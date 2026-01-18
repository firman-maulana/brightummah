<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // IDENTITAS TUNGGAL: EMAIL
            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => bcrypt(uniqid()), // dummy
                    'role' => 'user',
                ]);
            }

            Auth::login($user);

            return redirect()->route('home');

        } catch (Exception $e) {
            return redirect()->route('login')
                ->with('error', 'Gagal login dengan Google');
        }
    }
}
