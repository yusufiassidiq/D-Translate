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
        // $job = Job::paginate(5);
        $sorted = $job->sortByDesc('updated_at');
    	// mengirim data pegawai ke view pegawai
    	return view('listjob', [
            'job' => $job,
            'sorted' => $sorted
            ]);
    }
    public function add()
    {
    	return view('addjob');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'namadokumen' => 'required',
            'keterangan' => 'required',
            'harga' => 'required'
    	]);
 
        Job::create([
    		'namadokumen' => $request->namadokumen,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga
    	]);
 
    	return redirect('/listjob');
    }
}
