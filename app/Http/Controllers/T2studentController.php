<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T2student;
use Illuminate\Support\Facades\Validator;
class T2studentController extends Controller
{
    public function index()
    {
        $t2students = T2student::all();
        return view('t2students.index', compact('t2students'));
        
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('t2students.create');
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

        T2student::create($request->all());

        return redirect()->route('t2students.index');
        /*return response()->json([
            'message' => 'Student created successfully',
            'data' => $student
        ], 201);
        */
    }

    public function edit($id)
    {
        $t2student = T2student::findOrFail($id);
       return view('t2students.edit', compact('t2student'));

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

        $t2student = T2student::findOrFail($id);
        $t2student->update($request->all());

        return redirect()->route('t2students.index');
        //return response()->json($student);
    }

    public function destroy($id)
    {
       $t2student = T2student::findOrFail($id);
        $t2student->delete();
       return redirect()->route('t2students.index');
        //$student = Student::findOrFail($id);
        //$student->delete();

       // return response()->json(null, 204);
        
    }
}