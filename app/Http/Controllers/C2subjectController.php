<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C2subject;
class C2subjectController extends Controller
{
    public function index()
    {
        $c2subjects = C2subject::all();
        return view('c2subjects.index', compact('c2subjects'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('c2subjects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        C2subject::create($request->all());

        return redirect()->route('c2subjects.index');
    }

    public function edit($id)
    {
        $c2subject = C2subject::findOrFail($id);
        return view('c2subjects.edit', compact('c2subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mamonhoc' => 'required',
            'tenmonhoc' => 'required',
            'sotinchi' => 'required',
            'nguoiday' => 'required',
        ]);

        $c2subject = C2subject::findOrFail($id);
        $c2subject->update($request->all());

        return redirect()->route('c2subjects.index');
    }

    public function destroy($id)
    {
        $c2subject = C2subject::findOrFail($id);
        $c2subject->delete();
        return redirect()->route('c2subjects.index');
    }
}
