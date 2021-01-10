<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Index()
    {
        return view('auth.login');
    }

    public function Store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login detail');
        }

        return redirect()->route('dashboard');
    }
}
