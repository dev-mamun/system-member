<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function dailySpinPage() {
        return view('daily-spins');
    }

    public function addFundsPage() {
        return view('add-funds');
    }
}
