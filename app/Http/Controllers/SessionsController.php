<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);

        if (!Auth::attempt($validated)) {
            return back()
                ->withErrors([
                    'password' => 'We were unable to authenticate using the provided credentials'
                ])
                ->withInput();
        }

        $request->session()->regenerate();
        return redirect()->intended('/')->with('success', 'You are now logged in.');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect("/");
    }
}
