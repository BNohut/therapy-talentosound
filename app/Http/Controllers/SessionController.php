<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use App\Models\UserPackage;
use App\Notifications\SystemNotification;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function mine(Request $request)
    {
        try {
            $authUser = auth()->user();
            //***************
            //REMEMBER! USER (Patient) CANT HAVE MORE THAN ONE ACTIVE PACKAGE THAT HAS SAME SCHEDULE
            //We use dates for selecting, there could be only one package (active or passive)
            //***************
            //Has User Any Package

            $packageOfUser = UserPackage::where('user_id', $authUser->user_id)->where('start_date', '<=', date("Y-m-d H:i:s"))
                ->where('end_date', '>=', date("Y-m-d H:i:s"))
                ->first();
            //If not, that means the user has no package
            if (!$packageOfUser) {
                return response([
                    'status' => true,
                    'feedback' => 'no-package',
                    'message' => 'You have no package in theese days'
                ], 200);
            }

            // Is there any previous session that not listened?
            // If yes, that means the user missed deadline
            $missedSessions = Session::where('user_id', $authUser->user_id)
                ->where('end_date', '<', date("Y-m-d H:i:s"))
                ->whereNull('end_time')
                ->orderBy('package_sort_number', 'asc')
                ->where('is_missed', 0)->get();

            if ($missedSessions->count() > 0) {
                // If user listened less than 50% of the session, mark it as missed
                foreach ($missedSessions as $key => $missedSession) {
                    $durationPercentage = ($missedSession->player_time ?? 0 / $missedSession->duration) * 100;
                    if ($durationPercentage < 50) {
                        $missedSession->is_missed = 1;
                        $missedSession->save();
                    }
                }
            }

            // If all conditions are ok, return the session of user that not ended
            $session = Session::where('user_id', $authUser->user_id)->where('start_date', '<=', date("Y-m-d H:i:s"))
                ->where('end_date', '>=', date("Y-m-d H:i:s"))
                ->orderBy('package_sort_number', 'asc')
                ->whereNull('end_time')
                ->first();

            // If there is no session, that means the user completed todays session
            if (!$session) {
                return response([
                    'status' => true,
                    'feedback' => 'completed',
                    'message' => 'You have completed today\'s session.'
                ], 200);
            }
            // If there is a uncompleted session, check for delay operations
            $now = time(); // today as seconds
            $sessionEndDate = strtotime($session->end_date); // session end date as seconds
            $diff = $sessionEndDate - $now; // difference between session end date and today as seconds
            $diffAsDay = ceil($diff / (60 * 60 * 24)); // difference between session end date and today as days
            // If difference is bigger than 1 day, that means the user can access the session directly
            if ($diffAsDay > 1) {
                $session->append('url');
                $session->end_date = date('Y-m-d H:i:s', strtotime($session->end_date . ' -1 day'));
                return response([
                    'status' => true,
                    'feedback' => 'direct-access',
                    'message' => 'Your session is loaded',
                    'data' => $session
                ], 200);
                // If difference is smaller than 1 day, that means the user missed first deadline
            } else {
                // If session is delayed, that means user can access the session as second chance
                if ($session->is_delayed == 1) {
                    $session->append('url');
                    $session->end_date = date('Y-m-d H:i:s', strtotime($session->end_date . ' -1 day'));
                    return response([
                        'status' => true,
                        'feedback' => 'delayed-access',
                        'message' => 'Your session is loaded',
                        'data' => $session
                    ], 200);
                } else { // If session is not delayed and the difference is smaller than 1 day
                    // If user has started the session before
                    if ($session->start_time) {
                        // Check if next session is started
                        $nextSession = Session::where('user_id', $authUser->user_id)->where('package_sort_number', $session->package_sort_number + 1)->first();
                        if (!$nextSession) {
                            return response([
                                'status' => true,
                                'feedback' => 'completed',
                                'message' => 'You have completed your package'
                            ], 200);
                        }
                        // If next session started, give it to user
                        if ($nextSession->start_time) {
                            $nextSession->end_date = date('Y-m-d H:i:s', strtotime($nextSession->end_date . ' -1 day'));
                            return response([
                                'status' => true,
                                'feedback' => 'direct-access',
                                'message' => 'Your session is loaded',
                                'data' => $nextSession
                            ], 200);
                        }

                        // If next session not started, that means user started before but not completed and missed the deadline
                        // Should skip the next one
                        $session->is_missed = 1;
                        $session->save();
                        $nextSession->end_date = date('Y-m-d H:i:s', strtotime($nextSession->end_date . ' -1 day'));
                        return response([
                            'status' => true,
                            'feedback' => 'delayed-denied',
                            'message' => 'You have missed this session. You can skip to next one. Would you like to?',
                            'data' => $nextSession
                        ], 200);
                    }
                    // If user has not started the session before
                    // That means user can delay the session
                    $session->end_date = date('Y-m-d H:i:s', strtotime($session->end_date . ' -1 day'));
                    return response([
                        'status' => true,
                        'feedback' => 'missed-first-deadline',
                        'message' => 'You have missed your first deadline of session. Would you like to delay?',
                        'data' => $session
                    ], 200);
                }
            }
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'message' => 'Something went wrong.',
                'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile(),
            ], 500);
        }
    }

    public function pause(Request $request)
    {
        try {
            $session = Session::where('session_id', $request->session_id)->first();
            if (!$session) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Seans bulunamadı'
                ], 404);
            }
            $todayDate = date('Y-m-d');
            $todayTime = date('H:i:s');
            if ($session->pauses) {
                $pausesArr = json_decode($session->pauses, true);
                $pausesArr[] = ['date' => $todayDate, 'time' => $todayTime, 'player_time' => $request->player_time];
                $session->pauses = json_encode($pausesArr);
            } else {
                $pausesArr = [];
                $pausesArr[] = ['date' => $todayDate, 'time' => $todayTime, 'player_time' => $request->player_time];
                $session->pauses = json_encode($pausesArr);
            }
            $session->player_time = $request->player_time;
            $session->save();
            return response([
                'status' => 'success',
                'feedback' => 'paused',
                'message' => 'Başarılı',
                'data' => $session
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'message' => 'Something went wrong.',
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function started(Request $request)
    {
        try {
            $session = Session::where('session_id', $request->session_id)->first();
            if (!$session) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Seans bulunamadı'
                ], 404);
            }
            $session->start_time = date('Y-m-d H:i:s');
            $session->save();

            $user = User::where('user_id', $session->user_id)->first();
            $specialist = User::where('specialist_id', $user->specialist_id)->first();

            $specialist->notify(new SystemNotification('Paket Başlangıç Tarihi', $user->name . ' danışan paketi dinlemeye başladı'));

            return response([
                'status' => 'success',
                'feedback' => 'started',
                'message' => 'Başarılı',
                "data" => $session
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'message' => 'Something went wrong.',
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function ended(Request $request)
    {
        try {
            $session = Session::where('session_id', $request->session_id)->first();
            if (!$session) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Seans bulunamadı'
                ], 404);
            }
            $session->end_time = date('Y-m-d H:i:s');
            $session->player_time = floatval($session->duration);
            $session->save();

            //patient and specialist for Event
            $patient = User::where('user_id', $session->user_id)->first();
            $specialist = User::where('user_id', $patient->specialist_id)->first();

            $specialist->notify(new SystemNotification('Seans Tamamlandı', $patient->name . ' seansı tamamladı'));

            // If session is last session of package, deactivate the package
            $countOfSessionsOfPackage = Session::where('user_package_id', $session->user_package_id)->count();
            // -1 because of array index
            if ($countOfSessionsOfPackage - 1 == $session->package_sort_number) {
                $package = UserPackage::where('user_package_id', $session->user_package_id)->first();
                $package->status = 0;
                $package->save();
            }

            return response([
                'status' => 'success',
                'feedback' => 'ended',
                'message' => 'Başarılı'
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'message' => 'Something went wrong.',
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function delay(Request $request)
    {
        try {
            $session = Session::where('session_id', $request->session_id)->first();
            if (!$session) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Seans bulunamadı'
                ], 404);
            }
            $session->is_delayed = 1;
            $session->save();
            $session->append('url');
            return response([
                'status' => 'success',
                'feedback' => 'delayed',
                'message' => 'Başarılı',
                'data' => $session
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'message' => 'Something went wrong.',
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function sessionsForPackage(Request $request)
    {
        $sessions = Session::where('user_package_id', $request->package_id)->orderBy('package_sort_number', 'asc')->get();
        $sessions = $sessions->map(function ($item) {
            $audio = $item->audioS;
            $item->url = $audio->attachmentS->url;
            $item->name = $audio->name;
            return $item;
        });
        if ($sessions->isEmpty()) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $sessions
        ], 200);
    }

    public function sessions(Request $request)
    {
        try {
            $sessions = Session::where('user_package_id', $request->user_package_id)->orderBy('package_sort_number', 'asc')->get();
            // $sessions = $sessions->map(function ($item) {
            //     $audio = $item->audioS;
            //     $item->url = $audio->attachmentS->url;
            //     $item->name = $audio->name;
            //     return $item;
            // });
            if ($sessions->isEmpty()) {
                return response([
                    'status' => false,
                    'data' => []
                ], 200);
            }
            $sessions->map(function ($session) {
                $session->end_date = date('Y-m-d H:i:s', strtotime($session->end_date . ' -1 day'));
            });
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $sessions
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'message' => 'Something went wrong.',
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function playerTimeUpdate(Request $request)
    {
        try {
            $session = Session::where('session_id', $request->session_id)->first();
            if (!$session) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Seans bulunamadı'
                ], 404);
            }
            $session->player_time = $request->player_time;;
            $session->save();

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $session
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'message' => 'Something went wrong.',
                'error' => $err->getMessage(),
            ], 500);
        }
    }
}
