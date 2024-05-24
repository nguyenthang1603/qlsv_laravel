<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(Request $request)
{
    // Thực hiện xác thực
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Lưu trữ thông tin về lớp vào session
        session(['class_name' => auth()->user()->class_name]);
        return redirect('/home1'); // Điều hướng đến trang dashboard hoặc trang chính của ứng dụng
    } else {
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
    }
}
}
