<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController; // <-- Mengambil langsung dari inti Laravel

class DashboardController extends BaseController
{
    // Mengarahkan user ke halaman beranda setelah login sukses
    public function beranda()
    {
        return view('beranda');
    }
}