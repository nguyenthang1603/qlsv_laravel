<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T1student;
use Illuminate\Support\Facades\Validator;
class T1studentController extends Controller
{
    public function index()
    {
        $t1students = T1student::all();
        return view('t1students.index', compact('t1students'));
        
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('t1students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'masv' => 'required',
           'gender' => 'required',
           'date' => 'required',
            'address' => 'required',
       ]);

        T1student::create($request->all());

        return redirect()->route('t1students.index');
        /*return response()->json([
            'message' => 'Student created successfully',
            'data' => $student
        ], 201);
        */
    }

    public function edit($id)
    {
        $t1student = T1student::findOrFail($id);
       return view('t1students.edit', compact('t1student'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'masv' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'address' => 'required',
        ]);

        $t1student = T1student::findOrFail($id);
        $t1student->update($request->all());

        return redirect()->route('t1students.index');
        //return response()->json($student);
    }

    public function destroy($id)
    {
       $t1student = T1student::findOrFail($id);
        $t1student->delete();
       return redirect()->route('t1students.index');
        //$student = Student::findOrFail($id);
        //$student->delete();

       // return response()->json(null, 204);
        
    }
}