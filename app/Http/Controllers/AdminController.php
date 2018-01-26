<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    //
    public function getDashboardView()
    {
        return view('admin.dashboard', []);
    }
}
