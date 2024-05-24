<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T2subject;
class T2subjectController extends Controller
{
    public function index()
    {
        $t2subjects = T2subject::all();
        return view('t2subjects.index', compact('t2subjects'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('t2subjects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        T2subject::create($request->all());

        return redirect()->route('t2subjects.index');
    }

    public function edit($id)
    {
        $t2subject = T2subject::findOrFail($id);
        return view('t2subjects.edit', compact('t2subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        $t2subject = T2subject::findOrFail($id);
        $t2subject->update($request->all());

        return redirect()->route('t2subjects.index');
    }

    public function destroy($id)
    {
        $t2subject = T2subject::findOrFail($id);
        $t2subject->delete();
        return redirect()->route('t2subjects.index');
    }
}
