<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:255',
            'name' => 'required',
            'password' => 'required'
        ]);

        if ($request->password != $request->repeat_password) {
            return redirect('/login');
        }

        $validatedData['password'] = Crypt::encryptString($request->password);

        User::create($validatedData);

        return redirect('/books');
    }
}
