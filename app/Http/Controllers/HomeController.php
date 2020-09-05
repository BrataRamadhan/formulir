<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Siswa;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = User::where('id', Auth::user()->id)->first();

        // $siswa = Siswa::with('user')->get();
        // dd($siswa);
        return view('welcome', compact('siswa'));
    }

    public function palindrome(){
        return view ('palindrome');
    }

    public function tampil(){
        // $siswa = DB::table('siswa')->get();
        $siswa = Siswa::with('user')->get();
        // dd($siswa);
        return view('survey', compact('siswa'));
    }
}
