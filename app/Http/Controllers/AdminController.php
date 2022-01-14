<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminIndex()
    {
        $user = Auth::user();
        $packages = DB::select('select * from packages');
        $customers = Customer::all();
        
        $sumAge = (int)$customers->sum('age');
        $avarageAge = (int)($sumAge / count($customers));

        return view('admin.index', [
            'packages' => $packages, 
            'user' => $user, 
            'customers' => $customers, 
            'avarageAge' => $avarageAge
        ]);
    }

    public function students()
    {
        $user = Auth::user();
        $packages = DB::select('select * from packages');
        $customers = Customer::all();
        
        $sumAge = (int)$customers->sum('age');
        $avarageAge = (int)($sumAge / count($customers));

        return view('admin.students', [
            'packages' => $packages, 
            'user' => $user, 
            'customers' => $customers, 
            'avarageAge' => $avarageAge
        ]);
    }

    public function addStudent()
    {
        $user = Auth::user();   
        return view('admin.addstudent', ['user' => $user]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
