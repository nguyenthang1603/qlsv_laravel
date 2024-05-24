<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C1point;
class C1pointController extends Controller
{
    public function index()
    {
        $c1points = C1point::all();
        return view('c1points.index', compact('c1points'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('c1points.create');
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

        C1point::create($request->all());

        return redirect()->route('c1points.index');
    }

    public function edit($id)
    {
        $c1point = C1point::findOrFail($id);
        return view('c1points.edit', compact('c1point'));
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

        $c1point = C1point::findOrFail($id);
        $c1point->update($request->all());

        return redirect()->route('c1points.index');
    }

    public function destroy($id)
    {
        $c1point = C1point::findOrFail($id);
        $c1point->delete();
        return redirect()->route('c1points.index');
    }
}
