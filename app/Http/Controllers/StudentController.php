<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PhpParser\Node\Expr\FuncCall;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address

        ]);

        $student->academic()->create([
            'course' => $request->course,
            'year' => $request->year,
        ]);

        $student->country()->create([
            'continent' => $request->continent,
            'country_name' => $request->country_name,
            'capital' => $request->capital,
        ]);

        return redirect('students')->with('message', 'Student and Academic Created!');
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(Student $student, Request $request)
    {
        $student->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address
        ]);

        $student->academic()->update([
            'course' => $request->course,
            'year' => $request->year,
        ]);

        $student->country()->update([
            'continent' => $request->continent,
            'country_name' => $request->country_name,
            'capital' => $request->capital
        ]);

        return redirect('students')->with('message', 'Student and Academic Updated!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('students')->with('message', 'Student and Academic Deleted! ');
    }
}
