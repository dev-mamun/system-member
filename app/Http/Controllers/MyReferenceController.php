<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyReferenceController extends Controller
{
    public function index() {
        return view('my-reference');
    }
}
