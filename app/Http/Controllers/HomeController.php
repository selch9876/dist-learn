<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $packages = DB::select('select * from packages');
        return view('home.index', ['packages' => $packages]);
    }

    public function team()
    {
        return view('home.team');
    }

    public function reviews()
    {
        return view('home.reviews');
    }

    public function __construct()
    {
        /* $this->middleware('auth')->except('contact', 'index', 'home', 'team', 'reviews'); */
        $this->middleware('auth', ['except' => ['index', 'team', 'reviews']]);
    }

}
