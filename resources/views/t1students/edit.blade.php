<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Cập nhật sinh viên</h1>
            <form action="{{ route('t1students.update', $t1student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $t1student->name }}" required>
                </div>
                <div class="form-group">
                    <label for="masv">Mã sinh viên</label>
                    <input type="text" class="form-control" id="masv" name="masv" value="{{ $t1student->masv }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="male" {{ $t1student->gender == 'male' ? 'selected' : '' }}>Nam</option>
                        <option value="female" {{ $t1student->gender == 'female' ? 'selected' : '' }}>Nữ</option>
                        <option value="other" {{ $t1student->gender == 'other' ? 'selected' : '' }}>Khác</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Ngày sinh</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $t1student->date }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $t1student->address }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button></button>
            </form>
        </div>
    </div>
</div>
@endsection
