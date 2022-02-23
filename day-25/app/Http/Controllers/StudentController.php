<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    protected $students;
    protected $student;


    public function index()
    {
       return view('add-student');
    }
    public function create(Request $request)
    {
//        return $request->all();  ******** to check data if this is shown or all data collect correctly from a form
        $this->student = new Student();    //here Student is the model name and we create a
        $this->student->name = $request->name;  // here student->name is database table name
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();
//we can return data in 3 ways
        return redirect()->back()->with('message', 'Student Info save successfully');  // with this way message store in session 1 time
    }

}
