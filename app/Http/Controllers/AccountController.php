<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\{
    Request,
    RedirectResponse
};

class AccountController extends Controller
{
    public function login(): View
    {
        $data = [
            'site' => 'Login'
        ];

        return view('account.login', $data);
    }

    public function auth(Request $request): RedirectResponse
    {
        $validated = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $remember = $request->has('remember');

        Auth::attempt($validated, $remember);

        return redirect()->back()->withErrors([
            'message' => 'Username atau Password salah'
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
