<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C1student;
use Illuminate\Support\Facades\Validator;
class C1studentController extends Controller
{
    public function index()
    {
        $c1students = C1student::all();
        return view('c1students.index', compact('c1students'));
        
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('c1students.create');
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

       // C1student::create($request->all());

        //return redirect()->route('c1students.index');
        
        $c1student = C1student::create($request->all());

        return response()->json([
        'message' => 'Student created successfully',
        'data' => $c1student
        ], 201);
        
    }

    public function edit($id)
    {
        $c1student = C1student::findOrFail($id);
       return view('c1students.edit', compact('c1student'));

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

        $c1student = C1student::findOrFail($id);
        $c1student->update($request->all());

        return redirect()->route('c1students.index');
        /*
        $c1student = C1student::findOrFail($id);
        $c1student->update($request->all());

        return response()->json([
            'message' => 'Student updated successfully',
            'data' => $c1student
        ], 200); 
    */
    }

    public function destroy($id)
    {
       $c1student = C1student::findOrFail($id);
        $c1student->delete();
       return redirect()->route('c1students.index');
        /*
        return response()->json([
            'message' => 'Student deleted successfully',
            'id' => $id
        ], 200);
    */
        
    }
}