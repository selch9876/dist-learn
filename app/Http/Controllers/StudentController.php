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

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:student')
        ->only(['edit', 'update', 'destroy', 'index', 'dashboard']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $user = Auth::user();
        return view('students.dashboard', [
            'user'=> $user,
        ]);
    }

    public function index()
    {
        $packages = DB::select('select * from packages');
        return view('home.index', ['packages' => $packages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudent $request)
    {
        
        $validated = $request->validated();
        //$validated['user_id'] = $request->user()->id;
        $student =  new Student();
        $student->name = $request['name'];
        $student->email = $validated['email'];
        $student->phone = $request['phone'];
        $student->password = Hash::make($validated['password']);
        $student->save();
        
          if ($request->hasFile('thumbnail')) {
              $file = $request->file('thumbnail');
            $path = $request->file('thumbnail')->storeAs('thumbnails', $student->id . '.' . $file->guessExtension());
            $student->image()->save(
                Image::create(['path'=>$path])
            );
        }  


        $request->session()->flash('status', 'The student was created');

        return redirect()->route('admin.index', ['student'=>$student->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $student =  Student::findOrFail($id);
        
        return view('students.show', [
            'student' => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editstudent', ['student'=>Student::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudent $request, $id)
    {
        $validated = $request->validated();

        $student = Student::findOrFail($id);
        $student->name = $request['name'];
        $student->email = $validated['email'];
        $student->phone = $request['phone'];
        $student->password = Hash::make($validated['password']);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails');

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

        return redirect()->route('students.show', ['student'=>$student->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
