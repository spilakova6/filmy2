<?php

namespace App\Http\Controllers;

use App\User;
use App\Kino;
use Illuminate\Http\Request;

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
        $kinos = Kino::all();
        return view('kino.index')->with(['kinos'=>$kinos]);
    }
}
