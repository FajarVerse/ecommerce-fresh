<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password as RulesPassword;

class RegisterUserController extends Controller
{

    /** 
     * @throws \Illuminate\Validation\ValidationException 
     * */

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:200',
            'password' => ['required', 'confirmed', RulesPassword::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),

        ]);

        event(new Registered($user));

        return redirect()->route('login');
        // return dd('ok'); 
    }
}
