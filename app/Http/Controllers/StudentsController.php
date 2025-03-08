<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = \App\Models\Student::latest()->paginate(10);
        $data['students'] = $student;
        return view('students_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
           'name' => 'required|string|max:225',
           'gender' => 'required|in:male,female',
           'email' => 'required|email|unique:students,email',
           'phone' => 'required|string|max:20',
           'grade' => 'required|string|max:50', 
        ]);

        $student = new \App\Models\Student();
        $student->name = $requestData['name'];
        $student->gender = $requestData['gender'];
        $student->email = $requestData['email'];
        $student->phone = $requestData['phone'];
        $student->grade = $requestData['grade'];
        $student->save();
        return redirect('/students')->with('success', 'Student created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        $data['student'] = $student;
        return view('students_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $requestData = $request->validate([
            'name' => 'required|string|max:225',
            'gender' => 'required|in:male,female',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required|string|max:20',
            'grade' => 'required|string|max:50',
        ]);
    
        $student->name = $requestData['name'];
        $student->gender = $requestData['gender'];
        $student->email = $requestData['email'];
        $student->phone = $requestData['phone'];
        $student->grade = $requestData['grade'];
        $student->save();
    
        return redirect('/students')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student = \App\Models\Student::findOrFail($student->id);
        $student->delete();
        return back()->with('pesan', 'Data sudah dihapus');
    }
}
