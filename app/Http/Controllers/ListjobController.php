<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class ListjobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('listjob');
    // }
    public function index()
    {
    	// mengambil data pegawai
    	$job = Job::all();
        $job = Job::paginate(5);
    	// mengirim data pegawai ke view pegawai
    	return view('listjob', ['job' => $job]);
    }
    
}
