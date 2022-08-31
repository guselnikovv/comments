<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max 200',
            'email' => 'required|email',
            'password' => 'required|max 200'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password']
        ]);
        User::save();

        return Redirect::route('home');
    }
}
