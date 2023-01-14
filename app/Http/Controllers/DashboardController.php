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

    public function myDailySpinsPage() {
        return view('my-daily-spins');
    }

    public function myFundsPage() {
        return view('my-funds');
    }

    public function withdrawalPage() {
        return view('withdrawal');
    }

    public function myBonusItem() {
        return view('my-bonus-items');
    }

    public function myRaffleTicket() {
        return view('my-raffle-ticket');
    }
}
