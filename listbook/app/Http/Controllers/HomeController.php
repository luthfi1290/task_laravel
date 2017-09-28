<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book,Auth;

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
        $cek = Book::where('author_id',Auth::user()->id)->get();
        return view('home',compact('cek'));
    }
}
