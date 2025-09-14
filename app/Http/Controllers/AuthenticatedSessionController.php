<?php

namespace App\Http\Controllers;

use session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;


class AuthenticatedSessionController extends Controller
{
    public function create() {
        return view('Login');
    }

    public function store(LoginRequest $request) : RedirectResponse {
        $request->authenticate();

        $request->session()->regenerate();

        if(Auth::user()->is_admin) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('shop');
        }
    }

    public function destroy(Request $request): RedirectResponse {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    
}
}
