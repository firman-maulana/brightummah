<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleController extends Controller
{
    /**
     * Redirect ke Google OAuth
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle callback dari Google
     */
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            // Cari user berdasarkan google_id
            $user = User::where('google_id', $googleUser->id)->first();
            
            if ($user) {
                // User sudah terdaftar dengan Google
                Auth::login($user);
                return redirect()->intended(route('home'));
            } else {
                // Cek apakah email sudah terdaftar
                $existingUser = User::where('email', $googleUser->email)->first();
                
                if ($existingUser) {
                    // Email sudah ada, update google_id dan avatar
                    $existingUser->update([
                        'google_id' => $googleUser->id,
                        'avatar' => $googleUser->avatar,
                    ]);
                    Auth::login($existingUser);
                    return redirect()->intended(route('home'));
                } else {
                    // Buat user baru
                    $newUser = User::create([
                        'name' => $googleUser->name,
                        'email' => $googleUser->email,
                        'google_id' => $googleUser->id,
                        'avatar' => $googleUser->avatar,
                        'password' => bcrypt('google_password_' . uniqid()),
                        'role' => 'user',
                    ]);
                    Auth::login($newUser);
                    return redirect()->intended(route('home'));
                }
            }
        } catch (Exception $e) {
            return redirect(route('login'))->with('error', 'Gagal login dengan Google: ' . $e->getMessage());
        }
    }
}