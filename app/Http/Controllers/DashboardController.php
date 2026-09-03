<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController; 

class DashboardController 
{

    public function dashboard()
    {
        return view('layouts.dashboard');
    }
}