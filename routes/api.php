<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\JwtVerify;
use App\Mail\CareersMail;
use App\Services\OneSignalService;
use App\SMS\sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Orchid\Attachment\File;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/me', [UserController::class, 'me'])->name('me');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/send-phone-verification-code', [RegisterController::class, 'sendPhoneVerificationCode'])->name('send-phone-verification-code');
Route::post('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot-password');

Route::post(
    '/send-email',
    function (Request $request) {
        try {
            $title = $request->input('title');
            $userEmail = $request->input('email');
            $userName = $request->input('name');
            $userPhone = $request->input('phone');
            $message = $request->input('message');
            $oneSignalService = new OneSignalService();
            $oneSignalService->sendEmail($title, $message, "iletisim@talentosound.com", $userEmail, $userName, $userPhone);

            if (!($userPhone || $userEmail)) {
                return response([
                    'status' => 'error',
                    'message' => 'Email or phone number is required',
                ], 400);
            }

            if ($userPhone) {
                $sms = new sms();
                $sms->send([
                    'message' => 'Sayın ' . $userName . ' , mesajınız tarafımıza ulaştı. Sağlıklı günler dileriz.',
                    'no' => $userPhone,
                ]);
            } else {
                $oneSignalService->sendEmail('Mesajınız ulaştı.', 'Sayın ' . $userName . ', mesajınız tarafımıza ulaştı. Sağlıklı günler dileriz.', $userEmail);
            }

            return response([
                'status' => 'success',
                'message' => 'Email sent successfully',
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => $err->getMessage() . " " . $err->getLine() . " " . $err->getFile(),
            ], 500);
        }
    }
);

Route::post(
    '/send-application',
    function (Request $request) {
        try {
            $fullname = $request->input('fullname');
            $userEmail = $request->input('email');
            $userPhone = $request->input('phone');
            $coverLetter = $request->input('coverLetter');
            if ($_FILES && $_FILES['cv']) {
                $file = new File($request->file('cv'), 'public', 'cv');
                $attachment = $file->path('careers')->load();
                $cvUrl = $attachment->url();
            }
            // Mail Sender Service
            $oneSignalService = new OneSignalService();

            // Mail to Enduser
            $oneSignalService->sendEmail(
                'Başvurunuz ulaştı!',
                'Kuruluşumuza göstermiş olduğunuz ilgiye teşekkür ederiz. Başvurunuz değerlendirmeye alınmış olup, niteliklerinizin aranılan pozisyona uygun olması halinde sizinle irtibata geçeceğimizi belirtir, başarı dolu bir çalışma hayatı dileriz. Saygılarımızla,',
                $userEmail,
            );

            // Mail to Admin
            $oneSignalService->sendEmail(
                'İş başvurusu alındı!',
                'Sayın yetkili, ' . $fullname . ' isimli kişi iş başvurusunda bulundu. Başvuru detayları aşağıdaki gibidir.
                <br>
                <br>
                <b>Ad Soyad:</b> ' . $fullname . '
                <br>
                <b>Email:</b> ' . $userEmail . '
                <br>
                <b>Telefon:</b> ' . $userPhone . '
                <br>
                <b>Ön Yazı:</b> ' . $coverLetter . '
                <br>
                <b>CV:</b> <a href="' . $cvUrl . '">CV\'yi indir</a>',
                'iletisim@talentosound.com',
            );

            return response([
                'status' => 'success',
                'message' => 'Email sent successfully',
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => $err->getMessage() . " " . $err->getLine() . " " . $err->getFile(),
            ], 500);
        }
    }
);

Route::post('/appointment/makeRequest', [AppointmentController::class, 'makeRequest'])->name('make-appointment-request');

Route::middleware(JwtVerify::class)->group(function () {
    Route::any(
        '/{controller}/{action}',
        function ($controller, $action, Request $request) {
            $controllerClass = "App\\Http\\Controllers\\" . ucfirst($controller) . "Controller";
            return (new $controllerClass)->{$action}($request);
        }
    );
});
