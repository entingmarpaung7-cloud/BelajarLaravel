<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard Rental Kamera & Alat Camping";

        return view('dashboard', compact('title'));
    }
}