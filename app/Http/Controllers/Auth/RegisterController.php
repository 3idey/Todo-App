<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:254|confirmed',
        ]);

        // Create the user
        $user = \App\Models\User::create($attributes);

        // Log the user in
        \Illuminate\Support\Facades\Auth::login($user);

        // Redirect to the home page with a success message
        return redirect('/');
    }
}
