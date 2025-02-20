<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
use App\Models\User;
use App\Models\UserTest;
use App\Notifications\SystemNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserTestController extends Controller
{
    public function all(Request $request)
    {
        $patient = User::where('user_id', $request->patient_user_id)->first();
        if (!$patient) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kullanıcı bulunamadı'
            ], 404);
        }

        $age = 0;
        if ($patient->child_birthyear) {
            $age = intval(date('Y')) - intval(explode('.', $patient->child_birthyear)[2]);
        } else if ($patient->birthday) {
            $age = intval(date('Y')) - intval(explode('.', $patient->birthday)[2]);
        } else {
            return response([
                'status' => false,
                'message' => 'no-birthday',
                'data' => 'Kullanıcıya ait doğum tarihi bulunamadı'
            ], 200);
        }

        $tests = Test::where('min_age', '<=', $age)->where(function ($query) use ($age) {
            $query->where('max_age', '>=', $age)
                ->orWhereNull('max_age');
        })->get();

        if ($tests->isEmpty()) {
            return response([
                'status' => false,
                'message' => 'no-test',
                'data' => 'Yaş aralığına uygun test bulunamadı'
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $tests
        ], 200);
    }
    public function create(Request $request)
    {
        try {
            $userTest = UserTest::create($request->all());

            $user = User::where('user_id', $userTest->user_id)->first();
            $test = Test::where('test_id', $userTest->test_id)->first();

            if ($test->slug != 'otizm') {
                $user->notify(new SystemNotification('Test Atama', 'Tarafınıza test ataması yapıldı', true, true));
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $userTest
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function detail(Request $request)
    {
        $user = UserTest::where('user_id', $request->user_id)->with('test')->get();
        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kayıt bulunamadı'
            ], 404);
        }

        foreach ($user as $item) {
            $item->date = Carbon::parse($item->updated_at)->format('d.m.Y');
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $user,
        ], 200);
    }

    public function myTests(Request $request)
    {
        if (hasUserPermission('platform.canSeeAllPatients')) {
            $tests = UserTest::with(['test', 'user'])->get();
            foreach ($tests as $test) {
                $test->date = Carbon::parse($test->updated_at)->format('d.m.Y');
            }
        } else {
            $tests = UserTest::where('user_id', $request->user_id)->with(['test'])->get();
            foreach ($tests as $test) {
                $test->date = Carbon::parse($test->updated_at)->format('d.m.Y');
            }
        }
        if (!$tests) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $tests,
        ], 200);
    }

    public function myTestResult(Request $request)
    {
        $data = $request->all();
        foreach ($data['answers'] as $item) {
            $question = Question::where('question_id', $item[0])->first();

            if (!$question) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'kayıt bulunamadı'
                ], 404);
            }
            $answerData = [
                'user_id' => auth()->user()->user_id,
                'test_id' => $question->test_id,
                'question_id' => $question->question_id,
                'user_test_id' => $data['user_test_id'],
                'answer' => $item[1],
                'score' => $item[2],
            ];

            Answer::create($answerData);
        }

        $userTest = UserTest::where('user_test_id', $request->user_test_id)->first();

        if (!$userTest) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kayıt bulunamadı'
            ], 404);
        }

        $userTest->status = 'TAMAMLANDI';
        $userTest->save();

        $otizmTest = Test::where('test_id', $userTest->test_id)->where('slug', 'otizm')->first();
        $user = User::where('user_id', $userTest->user_id)->first();

        if ($otizmTest) {
            $user->notify(new SystemNotification('Otizm Test', 'Uzmanınız otizm testini çözdü'));
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $userTest,
        ], 200);
    }

    public function getPatientTestDetail(Request $request)
    {
        $userTest = UserTest::with('user')->where('user_test_id', $request->user_test_id)->first();

        if (!$userTest) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Test bulunamadı'
            ], 404);
        }

        $score = [
            "total" => 0,
            "categories" => []
        ];
        $answers = Answer::where('user_test_id', $request->user_test_id)->with('question')->get();
        if (!$answers) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Test Cevapları Bulunamadı'
            ], 404);
        }
        foreach ($answers as $answer) {
            $answer['sorting_number'] = $answer->question->sorting_number;
            $answer['test_slug'] = $answer->question->test->slug;

            if ($answer->question->types != null && $answer->question->test->slug == 'conners-parent') {
                $categoryName = json_decode($answer->question->types, true);
                foreach ($categoryName as $category) {
                    if (isset($score['categories'][$category['name']])) {
                        $score['categories'][$category['name']] += $answer->score;
                    } else {
                        $score['categories'][$category['name']] = $answer->score;
                    }
                }
            } else if ($answer->question->types != null) {
                $categoryName = json_decode($answer->question->types, true)['name'];
                if (isset($score['categories'][$categoryName])) {
                    $score['categories'][$categoryName] += $answer->score;
                } else {
                    $score['categories'][$categoryName] = $answer->score;
                }
            } else {
                $score['total'] += $answer->score;
            }
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => ["answers" => $answers, "score" => $score, "user" => $userTest->user],
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $userTest = UserTest::where('user_test_id', $request->user_test_id)->first();

        if (!$userTest) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kayıt bulunamadı'
            ], 404);
        }

        $userTest->status = 'BAŞLADI';
        $userTest->save();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $userTest,
        ], 200);
    }
}
