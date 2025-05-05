<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:254',
        ]);

        // Attempt to authenticate the user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Invalid credentials',
            ]);
        }
        // regenerate the session to prevent session fixation attacks
        request()->session()->regenerate();

        // If authentication fails, redirect back with an error message
        return redirect('/');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
