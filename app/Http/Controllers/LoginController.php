<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request) {
        $query = User::where(array('username' => $request->json()->get('username'), 'password' => $request->json()->get('password')))->first();
        if (!$query) {
           $message =  array('message' => 'Username and password did not match', 'error' => 500);
        } else {
            session()->put('id', $query->id);
            var_dump(session()->get('id'));
            $message = array('message' => 'login successful', 'error' => 200);
        }

        return $message;
    }
}
