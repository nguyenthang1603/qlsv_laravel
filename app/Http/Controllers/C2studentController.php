<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C2student;
use Illuminate\Support\Facades\Validator;
class C2studentController extends Controller
{
    public function index()
    {
        $c2students = C2student::all();
        return view('c2students.index', compact('c2students'));
        
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('c2students.create');
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

        C2student::create($request->all());

        return redirect()->route('c2students.index');
        /*return response()->json([
            'message' => 'Student created successfully',
            'data' => $student
        ], 201);
        */
    }

    public function edit($id)
    {
        $c2student = C2student::findOrFail($id);
       return view('c2students.edit', compact('c2student'));

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

        $c2student = C2student::findOrFail($id);
        $c2student->update($request->all());

        return redirect()->route('c2students.index');
        //return response()->json($student);
    }

    public function destroy($id)
    {
       $c2student = C2student::findOrFail($id);
        $c2student->delete();
       return redirect()->route('c2students.index');
        //$student = Student::findOrFail($id);
        //$student->delete();

       // return response()->json(null, 204);
        
    }
}