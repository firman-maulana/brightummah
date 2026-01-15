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
            
            $user = User::where('google_id', $googleUser->id)->first();
            
            if ($user) {
                Auth::login($user);
                return redirect()->intended(route('home'));
            } else {
                $existingUser = User::where('email', $googleUser->email)->first();
                
                if ($existingUser) {
                    $existingUser->update([
                        'google_id' => $googleUser->id,
                        'avatar' => $googleUser->avatar,
                    ]);
                    Auth::login($existingUser);
                    return redirect()->intended(route('home'));
                } else {
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