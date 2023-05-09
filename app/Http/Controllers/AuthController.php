<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();
        session(
            ['dinas' => $user->dinas],
        );


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/link');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()
            ->invalidate();
        $request->session()
            ->regenerateToken();
        return redirect('shortlink');
    }
}
