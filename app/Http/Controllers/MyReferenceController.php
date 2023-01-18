<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyReferenceController extends Controller
{
    public function index(Request $request) 
    {
        if(!empty($request->session()->get('id'))) {
            $users = \App\Models\User::where('referred_by', $request->session()->get('id'))->get();
            return view('my-reference', compact('users'));
        } else {
            return redirect('login');
        }
    }
}
