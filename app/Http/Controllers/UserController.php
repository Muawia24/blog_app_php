<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request) {
        $incomingData = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200']

        ]);

        $incomingData['password'] = bcrypt($incomingData['password']);
        $user = User::create($incomingData);
        auth()->login($user);

        return redirect('/');
    }
}
