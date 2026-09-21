<?php

namespace App\Http\Controllers;

use App\Models\pasienModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthSocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $SosialUser = Socialite::driver('google')->user();
        $registeredUser = User::where('google_id', $SosialUser->id)->first();

        if (! $registeredUser) {
            if (User::where('email', $SosialUser->email)->exists()) {
                return redirect('/login')->withErrors([
                    'email' => 'Email ini sudah terdaftar. Silakan masuk menggunakan password Anda.',
                ]);
            }

            $newUser = User::create([
                'google_id' => $SosialUser->id,
                'nama' => $SosialUser->name,
                'email' => $SosialUser->email,
                'password' => Str::password(32),
                'google_token' => $SosialUser->token,
                'google_refresh_token' => $SosialUser->refreshToken,
                'no_hp' => '-',
                'role' => 'pasien',
                'alamat' => '-',
                'photo' => '',
                'cover_photo' => '',
            ]);

            // Buat data pasien
            if (! pasienModel::where('user_id', $newUser->id)->exists()) {
                pasienModel::createWithNoRm([
                    'user_id' => $newUser->id,
                    'no_ktp' => str_pad((string) random_int(0, 9999999999999999), 16, '0', STR_PAD_LEFT),
                ]);
            }

            $registeredUser = $newUser;
        }

        Auth::login($registeredUser);

        return redirect(match ($registeredUser->role) {
            'dokter' => '/obat',
            'admin' => '/iniadmin',
            default => '/dokter',
        });
    }
}
