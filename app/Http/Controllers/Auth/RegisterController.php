<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Index()
    {
        return view('auth.register');
    }

    public function Save(Request $request)
    {
        dd($request);
    }
}
