<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C1student;
use App\C1subject;
use App\C1point;
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
        return view('home');
    }

    public function home1()
    {
        $c1students = C1student::all(); 
        $c1subjects = C1subject::all();
        $c1points = C1point::all();
        return view('home1', compact('c1students', 'c1subjects', 'c1points'));
    }

}
