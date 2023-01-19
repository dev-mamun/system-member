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
        $query = User::where(array('username' => $request->username))->first();
        if ($query) {
            $name = array('name' => $request->session()->get('username'), 'message' => 'Username are taken');
            $message = 'username is taken';
            print_r('message');
        } else {
            //get the id of the referrer
            $query = User::where(array('username' => $_POST['upline_username']))->first();
            $_POST['referred_by'] = $query->id;
            $_POST['password'] = md5($_POST['password']);
            $_POST['is_active'] = 0;
            $_POST['refferal_unique_id'] =  rand(1111111111,9999999999);
            User::create($_POST);
            print_r(url('welcome'));
        }
    }

    public function congratulations() {
        return view('congratulations');
    }

    public function version() {
        return view('version');
    }

    public function splashPage() {
        return view('splash');
    }
}
