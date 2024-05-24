<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C1subject;
class C1subjectController extends Controller
{
    public function index()
    {
        $c1subjects = C1subject::all();
        return view('c1subjects.index', compact('c1subjects'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('c1subjects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        C1subject::create($request->all());

        return redirect()->route('c1subjects.index');
    }

    public function edit($id)
    {
        $c1subject = C1subject::findOrFail($id);
        return view('c1subjects.edit', compact('c1subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        $c1subject = C1subject::findOrFail($id);
        $c1subject->update($request->all());

        return redirect()->route('c1subjects.index');
    }

    public function destroy($id)
    {
        $c1subject = C1subject::findOrFail($id);
        $c1subject->delete();
        return redirect()->route('c1subjects.index');
    }
}
