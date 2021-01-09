<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index()
    {
        // dd(auth()->user());
        return view('dashboard');
    }
}
