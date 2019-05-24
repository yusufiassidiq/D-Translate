<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Activity;
use Auth;
use App\Job;

class ActivityController extends Controller
{
    public function __construct(){
        $this->middleware('auth');//matiin kalo lagi testing mode
    }
    
    public function show()
    {   
        $users = Auth::user();
        $id = $users->id;
        $job = Job::where('user_id', $id)->get();
        $requests_accept = Activity::where('user_id',$id)->get();
        $requests_translate = Activity::where('translator_id',$id)->get();
        // $activities = Transaction::where('id_booker',$id)->OrWhere('id_lender',$id)->get();
        // return view('aktivitas', compact('users',/*'requests_lend','requests_borrow','activities',*/'job'));
        return view('aktivitas', [
            'job' => $job,
            'users' => $users,
            'requests_accept' => $requests_accept,
            'requests_translate' => $requests_translate
            // dd($job)
            ]);
    }

    public function translate($id){//id book
        $activity = new Activity;
        $activity->request_date = date('Y-m-d H:i:s');
        $activity->status = 0;
        $activity->user_id = Job::find($id)->user_id;
        $activity->translator_id = Auth::user()->id;
        $activity->job_id = $id;
        $activity->save();
        //return ke mana kek
        return redirect()->back()->withInfo('Request Sent!');
    }

}
