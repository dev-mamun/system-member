<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\funds;
USE App\Models\Settings;

class DashboardController extends Controller
{
    public function index(Request $request) {
        if(!empty($request->session()->get('id'))) {
            return view('dashboard');
        } else {
            return redirect('login');
        }
        
    }

    public function dailySpinPage(Request $request) {
        if(!empty($request->session()->get('id'))) {
            return view('daily-spins');
        } else {
            return redirect('login');
        }
    }

    public function addFundsPage(Request $request) {
        if(!empty($request->session()->get('id'))) {
            return view('add-funds');
        } else {
            return redirect('login');
        }
    }

    public function myDailySpinsPage(Request $request) {
        if(!empty($request->session()->get('id'))) {
            return view('my-daiy-spins');
        } else {
            return redirect('login');
        }
    }

    public function myFundsPage(Request $request) {
        if(!empty($request->session()->get('id'))) {
            $query = funds::where(array('user_id' => $request->session()->get('id')))->get();
            return view('my-funds', ['query' => $query]);
        } else {
            return redirect('login');
        }
    }

    public function withdrawalPage(Request $request) {
        if(!empty($request->session()->get('id'))) {
            return view('withdrawal');
        } else {
            return redirect('login');
        }
    }

    public function myBonusItem(Request $request) {
        if(!empty($request->session()->get('id'))) {
            return view('my-bonus-items');
        } else {
            return redirect('login');
        }
    }

    public function myRaffleTicket(Request $request) {
        if(!empty($request->session()->get('id'))) {
            return view('my-raffle-ticket');
        } else {
            return redirect('login');
        }
    }

    public function MyProfile(Request $request) {
        if(!empty($request->session()->get('id'))) {
            $user = \App\Models\User::where('id', $request->session()->get('id'))->first();
            return view('my-profile', compact('user'));
        } else {
            return redirect('login');
        }
    }

    public function MyProfileEdit(Request $request) {
        if(!empty($request->session()->get('id'))) {
            $user = \App\Models\User::where('id', $request->session()->get('id'))->first();
            return view('my-profile-edit', compact('user'));
        } else {
            return redirect('login');
        }
    }

    public function addFundProcess(Request $request) {
        if(!empty($request->session()->get('id'))) {
            $mop = Settings::where(array('description' => 'MODE_OF_PAYMENT'))->first();
        $imageName = $request->image->getClientOriginalName();
        $receiptName = $request->receipt->getClientOriginalName();
        $request->image->move(public_path('/'), $imageName);
        $request->receipt->move(public_path('/'), $receiptName);
         $_POST['is_enabled'] = 0;
         $_POST['user_id'] = $request->session()->get('id');
         $_POST['image'] = url('/'.$imageName.'');
         $_POST['receipt_image'] = url('/'.$receiptName.'');
         $_POST['mop'] = $mop->value;
         funds::create($_POST);
         return redirect('my-funds');
        } else {
            return redirect('login');
        }
    }
}
