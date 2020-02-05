<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index ()
    {   
       return view('index');
    }

    public function profile ()
    {
      $students = Student::all();
      //$students = Student::orderBy('id', 'asc')->get();
      return view('profile')->with('students', $students);
    }

    public function contact ()
    {
        return view('contact');
    }

    public function store (Request $request)
    {
      $request->validate([
        'name' => 'required|max:255|min:2',
        'user_id' => 'required',
    ]);
      $student = new Student;  
      $student->name = $request->name;
      $student->user_id = $request->user_id;
      $student->department = $request->department;
      $student->info = $request->info;
      $student->save();
      return redirect()->route('contact')->with('status', 'Successfully created!');
    }
    
    public function edit ($id)
    {
      $student = Student::find($id); 
      return view('edit')->with('student', $student);
    }

    public function update (Request $request, $id)
    {
      $student = Student::find($id);  
      $student->name = $request->name;
      $student->user_id = $request->user_id;
      $student->department = $request->department;
      $student->info = $request->info;
      $student->save();
      return redirect()->route('profile')->with('status', 'Updated Successfully!');
    }

    public function delete ($id)
    {
      $student = Student::find($id);
      $student->delete();
      return redirect()->route('profile')->with('status', 'ID Deleted!');
    }

    
}
