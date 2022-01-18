<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminIndex()
    {
        
        $user = Auth::user();
        $packages = DB::select('select * from packages');
        $students = Student::all();
        
        $sumAge = (int)$students->sum('age');
        $avarageAge = (int)($sumAge / count($students));
        if ($user->is_admin) {
            return view('admin.index', [
                'packages' => $packages, 
                'user' => $user, 
                'students' => $students, 
                'avarageAge' => $avarageAge
            ]);
        } else {
            return view('auth.login');
        }
        
    }

    public function students()
    {
        $user = Auth::user();
        $packages = DB::select('select * from packages');
        $students = Student::all();
        
        $sumAge = (int)$students->sum('age');
        $avarageAge = (int)($sumAge / count($students));

        return view('admin.students', [
            'packages' => $packages, 
            'user' => $user, 
            'students' => $students, 
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
