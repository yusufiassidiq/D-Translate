<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Job;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('RoleName');
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
        $users = Auth::user()->id;
    	// mengirim data pegawai ke view pegawai
    	return view('company.listjob', [
            'sorted' => $sorted,
            'users' => $users,
            // dd($users)
        ]);
    }

    // menambahkan job
    public function add()
    {
    	return view('addjob');
    }

    // menghapus job
    public function delete($id)
    {
        $pegawai = Job::find($id);
        $pegawai->delete();
        return redirect('/listjob');
    }

    // menyimpan job dalam database
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'namadokumen' => 'required',
            'keterangan' => 'required|max:730'  ,
            'harga' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'file' => 'required|file',
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
        $image = $request->file('image');
        $nama_image = time()."_".$image->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
        $image->move($tujuan_upload,$nama_image);
        //menyimpan file
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        
        Job::create([
    		'namadokumen' => $request->namadokumen,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'image' => $nama_image,
            'file' => $nama_file,
            'user_id'=>Auth::user()->id,
    	]);
 
        return redirect('/Company');
        // return redirect()->back();
        
    }

    //controller untuk ngeliat satu document
    public function show_detail(Request $request, $id){
        //query cari dokumen
        $job = Job::where('id', $id)->first();
        // if($job === NULL){
        //     return redirect('/listjob')->with('danger','No document found');
        // }
        $users = Auth::user()->id;   
        return view('viewjob', compact('users','job'));
        // return view('/viewjob');
    }
}
