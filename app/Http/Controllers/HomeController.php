<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Auth;
class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        $siswa=Siswa::where('user_id',$user_id)->orderBy('created_at','desc')->paginate('70');
        $data=Siswa::where('user_id',auth()->user()->id)->count();

        return view('home',compact('siswa','data'));
    }
}
