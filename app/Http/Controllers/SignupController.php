<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'fname' => ['required'],
            'lname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        // Hash the password before saving to the database
        $attributes['password'] = bcrypt($attributes['password']);

        // Create the user
        $user = User::create($attributes);

        // Log the user in
        Auth::login($user);

       // \Illuminate\Support\Facades\Mail::to($user->fname)->send(
          //  new \App\Mail\JobPosted($user)
       //  );

        // Redirect to the jobs page
        return redirect('/jobs');
    }
}
