<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Session;
use App\Models\User;
use App\Models\UserPackage;
use App\Notifications\SystemNotification;
use Illuminate\Http\Request;

class UserPackageController extends Controller
{
    public function all()
    {
        try {
            $packages = UserPackage::orderBy('created_at', 'desc')->get();
            if ($packages->isEmpty()) {
                return response([
                    'status' => false,
                    'message' => 'Kayıt bulunamadı'
                ], 200);
            }
            $packages->map(function ($package) {
                $package->count = $package->counts()['all'];
                $package->end_date = date('Y-m-d H:i:s', strtotime($package->end_date . '-1 day'));
                $package->user = User::where('user_id', $package->user_id)->withTrashed()->first()->name;
                return $package;
            });
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $packages
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required',
                'start_date' => 'required',
                'audios' => 'required',
                'sessionCount' => 'required',
                'name' => 'required|unique:user_package,name',
            ], [
                'user_id.required' => 'Kullanıcı alanı zorunludur',
                'start_date.required' => 'Başlangıç tarihi alanı zorunludur',
                'audios.required' => 'Sesler alanı zorunludur',
                'sessionCount.required' => 'Seans sayısı alanı zorunludur',
                'name.required' => 'Paket adı alanı zorunludur',
                'name.unique' => 'Bu isimde bir paket zaten var',
            ]);

            $data = $request->all();
            $sessionCount = $request->sessionCount;
            $data['end_date'] = date('Y-m-d H:i', strtotime($data['start_date'] . ' ' . $sessionCount + 1 . ' day'));
            // Create UserPackage
            $userPackage = UserPackage::create($data);

            // Find Package - Get Audios - Create Sessions
            $packageAudioJson = json_decode($userPackage->audios);
            $originalAudios = [];
            foreach ($packageAudioJson as $audio) {
                $originalAudios[] = Audio::where('audio_id', $audio->audio_id)->first();
            }

            // Repeat until the total count reaches the desired sessionCount
            while (count($originalAudios) < $sessionCount) {
                $originalAudios[] = $originalAudios[count($originalAudios) % count($packageAudioJson)];
            }

            // $newUserPackage = UserPackage::where('user_id', $request->user_id)->orderByDesc('created_at')->first();
            $sessionStartDate = $userPackage->start_date;
            $dayCounter = 0;
            foreach ($originalAudios as $index => $item) {
                $audio = Audio::where('audio_id', $item['audio_id'])->first();
                $session = new Session();
                $session->user_id = $request->user_id;
                $session->user_package_id = $userPackage->user_package_id;
                $session->audio_id = $audio->audio_id;
                $session->duration = $audio->duration;
                $session->start_date = date('Y-m-d H:i', strtotime($sessionStartDate . " +{$dayCounter} day"));
                $session->end_date = date('Y-m-d H:i', strtotime($session->start_date . ' +2 day'));
                $session->package_sort_number = $index;
                $session->save();

                $dayCounter++;
            }
            // User Package end date should be last session end date
            // Last Session

            $user = User::where('user_id', $userPackage->user_id)->first();
            $specialist = User::where('user_id', $user->specialist_id)->first();
            $user->notify(new SystemNotification('Paket Atama', 'Tarafınıza paket ataması yapıldı. Paketin başlangıç tarihi: ' . $userPackage->start_date, true, true));
            $specialist->notify(new SystemNotification('Paket Atama', $user->name . ' adlı danışanınıza paket ataması yapıldı. Paketin başlangıç tarihi: ' . $userPackage->start_date, true, true));

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $userPackage
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request)
    {
        // Find Package
        $package = UserPackage::where('user_package_id', $request->user_package_id)->first();

        // If null return 404
        if (!$package) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Paket bulunamadı'
            ], 404);
        }

        try {
            $data = $request->except(["_token", "user_id", "start_date"]);
            $sessionCount = $request->session_count;
            $sessionStartDate = "";
            $dayCounter = 0;
            if ($request->changeDate) {
                $data['end_date'] = date('Y-m-d H:i', strtotime($data['new_start_date'] . ' ' . $sessionCount + 1 . ' day'));
                if ($request->changeStartDate) {
                    $data['start_date'] = $data['new_start_date'];
                }
                $package->update($data);
                $sessionStartDate = $request->new_start_date;
            }

            $package->update($data);

            $packageAudiosIds = $request->new_audios;
            $originalAudios = [];
            foreach ($packageAudiosIds as $id) {
                $originalAudios[] = Audio::where('audio_id', $id)->first();
            }

            // Repeat until the total count reaches the desired sessionCount
            while (count($originalAudios) < $sessionCount) {
                $originalAudios[] = $originalAudios[count($originalAudios) % count($packageAudiosIds)];
            }

            // Delete all unlistened and not missed sessions of package
            $sessions = Session::where('user_package_id', $package->user_package_id)->whereNull('start_time')->where('is_missed', 0)->orderBy('package_sort_number', 'asc')->get();
            // Remmeber the start date of first deleted session if user does not want to change the date
            if ($sessions->count() > 0) {
                if (!$request->changeDate) {
                    $sessionStartDate = $sessions->first()->start_date;
                }
                foreach ($sessions as $session) {
                    $session->delete();
                }
            }

            // Is there any listened or missed session?
            // If yes, prepare index for new sessions
            $listenedSession = Session::where('user_package_id', $package->user_package_id)->where(function ($query) {
                $query->whereNotNull('start_time') // start_time boş olanları al
                    ->orWhere(function ($q) { // ya da start_time boş ama is_missed 1 olanları al
                        $q->whereNull('start_time')
                            ->where('is_missed', 1);
                    });
            })->orderBy('package_sort_number', 'desc')->first();

            if ($listenedSession) {
                $calculatedIndex = $listenedSession->package_sort_number + 1;
                foreach ($originalAudios as $index => $item) {
                    $audio = Audio::where('audio_id', $item['audio_id'])->first();
                    $session = new Session();
                    $session->user_id = $package->user_id;
                    $session->user_package_id = $package->user_package_id;
                    $session->audio_id = $audio->audio_id;
                    $session->duration = $audio->duration;
                    $session->start_date = date('Y-m-d H:i', strtotime($sessionStartDate . " +{$dayCounter} day"));
                    $session->end_date = date('Y-m-d H:i', strtotime($session->start_date . ' +2 day'));
                    $session->package_sort_number = $calculatedIndex;
                    $session->save();

                    $calculatedIndex++;
                    $dayCounter++;
                }
            } else {
                // Update un-listened sessions' start and end dates & package_sort_number & user_id
                foreach ($originalAudios as $index => $item) {
                    $audio = Audio::where('audio_id', $item['audio_id'])->first();
                    $session = new Session();
                    $session->user_id = $request->user_id;
                    $session->user_package_id = $package->user_package_id;
                    $session->audio_id = $audio->audio_id;
                    $session->duration = $audio->duration;
                    $session->start_date = date('Y-m-d H:i', strtotime($sessionStartDate . " +{$dayCounter} day"));
                    $session->end_date = date('Y-m-d H:i', strtotime($session->start_date . ' +2 day'));
                    $session->package_sort_number = $index;
                    $session->save();
                    $dayCounter++;
                }
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $package
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function patientPackages(Request $request)
    {
        try {
            if (hasUserPermission('platform.canSeeAllPatients')) {
                if (isset($request->user_id) && $request->user_id != null) {
                    $packages = UserPackage::where('user_id', $request->user_id)->get();
                } else {
                    $packages = UserPackage::with('user')->get();
                }
            } else {
                $packages = UserPackage::where('user_id', $request->user_id)->get();
            }
            if (!$packages) {
                return response([
                    'status' => false,
                    'data' => [],
                ], 200);
            }
            $packages->map(function ($package) {
                $package->counts = $package->counts();
                return $package;
            });
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $packages,
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function updateStatus(Request $request)
    {
        try {
            $package = UserPackage::where('user_package_id', $request->user_package_id)->first();

            if (!$package) {
                return response([
                    'status' => false,
                    'message' => "User Package not found",
                    'data' => []
                ], 200);
            }

            $patient = User::where('user_id', $package->user_id)->first();
            $specialist = User::where('user_id', $patient->specialist_id)->first();

            //If package is active, make it passive
            if ($package->status) {
                $package->status = !$package->status;
                $package->save();

                $patient->notify(new SystemNotification('Paket Durumu', 'Paket pasif olarak işaretlendi', true, true));
                $specialist->notify(new SystemNotification('Paket Durumu', $patient->name . ' paketi pasif olarak işaretlendi', true, true));

                //If package is passive, make it active & change remaining sessions' start and end dates
            } else {
                $package->status = !$package->status;
                $package->save();

                $patient->notify(new SystemNotification('Paket Durumu', 'Paket aktif olarak işaretlendi', true, true));

                $sessions = Session::where('user_package_id', $request->user_package_id)->whereNull('start_time')->orderBy('package_sort_number', 'asc')->get();
                $dayCounter = 0;
                foreach ($sessions as $key => $session) {
                    $session->start_date = date('Y-m-d H:i', strtotime(date('Y-m-d H:i') . " +{$dayCounter} day"));
                    $session->end_date = date('Y-m-d H:i', strtotime($session->start_date . ' +2 day'));
                    $session->save();

                    $dayCounter++;
                    if ($key == $sessions->count() - 1) {
                        $package->end_date = $session->end_date;
                        $package->save();
                    }
                }
            }
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $package
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function addSession(Request $request)
    {
        try {
            //UserPackage
            $userPackage = UserPackage::where('user_package_id', $request->user_package_id)->first();
            if (!$userPackage) {
                return response([
                    'status' => false,
                    'message' => "User Package not found",
                    'data' => []
                ], 200);
            }
            $count = $request->count;
            $sessions = Session::where('user_package_id', $request->user_package_id)->orderBy('package_sort_number', 'asc')->take($count)->get();
            $sessionsAudioIds = $sessions->pluck('audio_id')->toArray();
            $oldAudiosFieldOfPackage = json_decode($userPackage->audios);
            $newAudiosFieldOfPackage = array_merge($oldAudiosFieldOfPackage, $sessionsAudioIds);
            $userPackage->update(['audios' => json_encode($newAudiosFieldOfPackage)]);

            $sessionTotalCount = Session::where('user_package_id', $request->user_package_id)->count();
            $startDate = $request->start_date;
            $dayCounter = 0;

            for ($i = 1; $i <= $count; $i++) {
                $newSession = new Session();
                $newSession->user_id = $userPackage->user_id;
                $newSession->user_package_id = $userPackage->user_package_id;
                $newSession->audio_id = $sessions[$i - 1]->audio_id;
                $newSession->duration = $sessions[$i - 1]->duration;
                $newSession->start_date = date('Y-m-d H:i', strtotime($startDate . " +{$dayCounter} day"));
                $newSession->end_date = date('Y-m-d H:i', strtotime($newSession->start_date . ' +2 day'));
                $newSession->package_sort_number = $sessionTotalCount - 1 + $i; // -1 is for array index
                $newSession->save();

                $dayCounter++;
            }

            // User Package end date should be last session end date
            // Last Session
            $lastSession = Session::where('user_id', $userPackage->user_id)->orderBy('package_sort_number', 'desc')->first();
            $userPackage->update(['end_date' => $lastSession->end_date]);

            $user = User::where('user_id', $userPackage->user_id)->first();

            $user->notify(new SystemNotification('Ek Seans', 'Paketinize ek seanlar tanımlandı. Seanslarınızın başlangıç tarihi: ' . $startDate, true, true));

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => []
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function detailForPackage(Request $request)
    {
        // Get Package ordered by ID
        $package = UserPackage::where('user_package_id', $request->package_id)->first();

        // If no package
        if (!$package) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Paket bulunamadı'
            ], 404);
        }
        // Get First Session of package for information
        $firstSessionOfPackage = Session::where('user_package_id', $package->package_id)->first();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $package,
            // Use Eloquent relationships to get patient information
            'patient' => ['name' => $package->user->name, 'user_id' => $package->user->user_id],
        ], 200);
    }

    public function detail(Request $request)
    {
        try {
            if (isset($request->user_package_id)) {
                $package = UserPackage::where('user_package_id', $request->user_package_id)->first();
            } else {
                $package = UserPackage::where('user_id', auth()->user()->user_id)->orderBy('created_at', 'desc')->first();
            }
            if (!$package) {
                return response([
                    'status' => false,
                    'message' => "User Package not found",
                    'data' => []
                ], 200);
            }
            $package->counts = $package->counts();
            $package->end_date = date('Y-m-d H:i:s', strtotime($package->end_date . '-1 day'));
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $package
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $package = UserPackage::where('user_package_id', $request->user_package_id)->first();

            if (!$package) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Paket bulunamadı'
                ], 404);
            }

            $package->delete();

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => 'Paket silindi'
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }
}
