<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    // propertui
    public function index()
    {
        return view('admin.dashboard');
    }
}
