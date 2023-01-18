<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function login(Request $request) {
    //     $query = User::where(array('username' => $request->json()->get('username'), 'password' => $request->json()->get('password')))->first();
    //     if (!$query) {
    //        $message =  array('message' => 'Username and password did not match', 'error' => 500);
    //     } else {
    //         session()->put('id', $query->id);
    //         var_dump(session()->get('id'));
    //         $message = array('message' => 'login successful', 'error' => 200);
    //     }

    //     return $message;
    // }

    public function loginPage() {
        return view('login');
    }

    public function login(Request $request) {
        $query = User::where(array('username' => $_POST['username'], 'password' => md5($_POST['password'])))->first();

        if(!$query) {
            return \Redirect::back()->with('error', 'Username and password are not match');
        } else {
            $request->session()->put('id', $query->id);
            return redirect('dashboard');
        }

    }

}
