<?php

namespace App\Http\Controllers\Admin\Profile\Status;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileStatusController extends Controller
{
    public function updateActivationStatus(Request $request, $userId)
    {
        $activeStatus = $request->input('active_status');

        // Tüm kullanıcıların aktivasyon durumunu 0 yap
        User::query()->update(['activestatus' => 0]);

        // Kullanıcıyı bul
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'Kullanıcı bulunamadı.'], 404);
        }

        // Aktivasyon durumunu güncelle
        $user->activestatus = $activeStatus;
        $user->save();

        // Başarılı yanıt döndür
        return response()->json(['success' => 'Aktivasyon durumu güncellendi.']);
    }
}
