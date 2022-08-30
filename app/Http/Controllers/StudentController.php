<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::latest()->paginate();
        return view('students.index', compact('students'));
    }


    public function create()
    {
        return view   ('students.create');
        }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:100', 'min:4'],
            'email' => ['required', 'email', 'max:100'],
        ]);

        Student::create($valid);

        return redirect(route('students.index'));
    }


    public function edit(Student $student)
    {
        $student = Student::find($student->id);
        return view('students.edit', compact('student'));
    }


    public function update(Request $request, Student $student)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:100', 'min:4'],
            'email' => ['required', 'email', 'max:100'],
        ]);

        $student->update($valid);

        return redirect(route('students.index'));
    }


    public function destroy(Student $student)
    {
        $student = Student::find($student->id);
        $student->delete();
        return back();
    }
}
