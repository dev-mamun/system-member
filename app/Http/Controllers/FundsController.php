<?php

namespace App\Http\Controllers;

use App\Models\funds;
use Illuminate\Http\Request;

class FundsController extends Controller
{
    public function index()
    {
        return view('funds-history');
    }
}
