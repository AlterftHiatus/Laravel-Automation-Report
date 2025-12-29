<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $laporans = Laporan::all();
        return view('home');
    }
}
