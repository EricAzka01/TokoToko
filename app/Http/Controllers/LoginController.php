<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        $title = 'Login';

        return view('auth.login', [
            'title' => $title,
        ]);
    }

    public function login_buyer(Request $request) {
        $credentials = $request->validate([
            'b_email' => 'required',
            'b_password' => 'required',
        ]);

        // workaround cuz eloquent wants the 'password' field
        $credentials['password'] = $credentials['b_password'];

        if (Auth::guard('buyer')->attempt($credentials)) {
            return redirect()->intended(route('buyer.home'));
        }

        return redirect('/login')->withInput()->with('loginFailed', 'Invalid credentials, please retry to');
    }

    public function login_seller(Request $request) {
        $credentials = $request->validate([
            's_email' => 'required',
            's_password' => 'required',
        ]);

        // same as above
        $credentials['password'] = $credentials['s_password'];

        if (Auth::guard('seller')->attempt($credentials)) {
            return redirect()->intended(route('seller.home'));
        }

        return redirect('/login')->withInput()->with('loginFailed', 'Invalid credentials, please retry to');
    }

    public function logout_buyer(Request $request) {
        Auth::guard('buyer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function logout_seller(Request $request) {
        Auth::guard('seller')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
