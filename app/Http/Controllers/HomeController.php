<?php

namespace App\Http\Controllers;

use App\Flaite;
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
        $flaites = Flaite::orderBy('created_at','DESC')->get();
        return view('home',compact('flaites'));
    }
}
