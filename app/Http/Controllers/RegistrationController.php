<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index($name, Request $request) {
        $request->session()->put('name', $name);
        $name = array('name' => $name, 'message' => '');
        return view('registration')->with($name);
    }

    public function register(Request $request) {
        //check if the username already exist
        $query = User::where(array('username' => $_POST['username']))->first();
        if ($query) {
            $name = array('name' => $request->session()->get('username'), 'message' => 'Username are taken');
            $message = 'username is taken';
            print_r('message');
        } else {
            //get the id of the referrer
            $query = User::where(array('username' => $_POST['upline_username']))->first();
            $_POST['referred_by'] = $query->id;
            User::create($_POST);
            print_r(url('greetings/congratulations'));
        }
    }

    public function congratulations() {
        return view('congratulations');
    }
}
