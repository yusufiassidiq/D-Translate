<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Job;

class UserController extends Controller
{
    public function show(Request $request)
    {   
        $users = Auth::user();
        $id = $users->id;
        $job = Job::where('user_id', $id)->get();
        // $requests_lend = Transaction::where('id_lender',$id)->get();
        // $requests_borrow = Transaction::where('id_booker',$id)->get();
        // $activities = Transaction::where('id_booker',$id)->OrWhere('id_lender',$id)->get();
        // return view('aktivitas', compact('users',/*'requests_lend','requests_borrow','activities',*/'job'));
        return view('aktivitas', [
            'job' => $job,
            'users' => $users,
            // dd($job)
            ]);
    }
}
