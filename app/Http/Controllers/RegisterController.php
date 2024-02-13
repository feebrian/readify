<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\View\View;

class RegisterController extends Controller
{

    public function show(): View
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->password != $request->repeat_password) {
            return back()
                ->withErrors(['password' => 'Password missmatch'])
                ->onlyInput('password');
        }

        $validatedData['password'] = bcrypt($request->password);

        User::create($validatedData);

        return redirect('/books');
    }
}
