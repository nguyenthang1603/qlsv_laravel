<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T2point;
class T2pointController extends Controller
{
    public function index()
    {
        $t2points = T2point::all();
        return view('t2points.index', compact('t2points'));
    }

    public function create()
    {
    // Logic để tạo form tạo mới sinh viên
    return view('t2points.create');
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

        T2point::create($request->all());

        return redirect()->route('t2points.index');
    }

    public function edit($id)
    {
        $t2point = T2point::findOrFail($id);
        return view('t2points.edit', compact('t2point'));
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

        $t2point = T2point::findOrFail($id);
        $t2point->update($request->all());

        return redirect()->route('t2points.index');
    }

    public function destroy($id)
    {
        $t2point = T2point::findOrFail($id);
        $t2point->delete();
        return redirect()->route('t2points.index');
    }
}
