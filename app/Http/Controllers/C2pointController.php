<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C2point;
class C2pointController extends Controller
{
    public function index()
    {
        $c2points = C2point::all();
        return view('c2points.index', compact('c2points'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('c2points.create');
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

        C2point::create($request->all());

        return redirect()->route('c2points.index');
    }

    public function edit($id)
    {
        $c2point = C2point::findOrFail($id);
        return view('c2points.edit', compact('c2point'));
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

        $c2point = C2point::findOrFail($id);
        $c2point->update($request->all());

        return redirect()->route('c2points.index');
    }

    public function destroy($id)
    {
        $c2point = C2point::findOrFail($id);
        $c2point->delete();
        return redirect()->route('c2points.index');
    }
}
