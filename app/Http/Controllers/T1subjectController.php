<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T1subject;
class T1subjectController extends Controller
{
    public function index()
    {
        $t1subjects = T1subject::all();
        return view('t1subjects.index', compact('t1subjects'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('t1subjects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        T1subject::create($request->all());

        return redirect()->route('t1subjects.index');
    }

    public function edit($id)
    {
        $t1subject = T1subject::findOrFail($id);
        return view('t1subjects.edit', compact('t1subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        $t1subject = T1subject::findOrFail($id);
        $t1subject->update($request->all());

        return redirect()->route('t1subjects.index');
    }

    public function destroy($id)
    {
        $t1subject = T1subject::findOrFail($id);
        $t1subject->delete();
        return redirect()->route('t1subjects.index');
    }
}
