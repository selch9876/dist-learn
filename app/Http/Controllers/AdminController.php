<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreStudent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    public function showStudent($id)
    {
        $student =  Student::findOrFail($id);
        
        return view('admin.showstudent', [
            'student' => $student,
        ]);
    }

    public function editStudent($id)
    {
        return view('admin.editstudent', ['student'=>Student::findOrFail($id)]);
    }

    public function updateStudent(StoreStudent $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validated();
        $student ->fill($validated);
        $student->phone = $request['phone'];
        
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $path = $request->file('thumbnail')->storeAs('thumbnails', $student->id . '.' . $file->guessExtension());

            if ($student->image) {
                Storage::delete($student->image->path);
                $student->image->path = $path;
                $student->image->save();
            } else {
                $student->image()->save(
                Image::create(['path'=>$path])
                );
            }
            
        }

        
        $student->save();

        $request->session()->flash('status', 'The student is updated');

        return redirect()->route('admin.showstudent', ['student'=>$student->id]);
    }

    public function destroyStudent($id)
    {
        $student = Student::findOrFail($id);

        $this->authorize('delete', $student);

        /* if (Gate::denies('update-post', $post)) {
            abort(403, "You can't delete this post");
        } */
        
        if ($student->image) {
            Storage::delete($student->image->path);
        }
            

        $student->delete();

        session()->flash('status', 'The student was deleted!');

        return redirect()->route('admin.students');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
