<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('template.register');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required'],
        ]);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfull!');

        return redirect('/login');
    }
}
