<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('auth')->except('contact', 'index', 'home', 'team', 'reviews');
    }

}
