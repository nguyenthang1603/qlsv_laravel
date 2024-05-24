<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T1point;
class T1pointController extends Controller
{
    public function index()
    {
        $t1points = T1point::all();
        return view('t1points.index', compact('t1points'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('t1points.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'masv' => 'required',
            'mamonhoc' => 'required',
            'diemcc' => 'required',
            'diemgk' => 'required',
            'diemck' => 'required',
        ]);

        T1point::create($request->all());

        return redirect()->route('t1points.index');
    }

    public function edit($id)
    {
        $t1point = T1point::findOrFail($id);
        return view('t1points.edit', compact('t1point'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'masv' => 'required',
            'mamonhoc' => 'required',
            'diemcc' => 'required',
            'diemgk' => 'required',
            'diemck' => 'required',
        ]);

        $t1point = T1point::findOrFail($id);
        $t1point->update($request->all());

        return redirect()->route('t1points.index');
    }

    public function destroy($id)
    {
        $t1point = T1point::findOrFail($id);
        $t1point->delete();
        return redirect()->route('t1points.index');
    }
}
