<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonusController extends Controller
{
    public function index() {
        return view('my-bonuses-available');
    }
}
