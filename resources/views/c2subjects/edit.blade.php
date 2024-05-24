<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Cập nhật môn học</h1>
            <form action="{{ route('c2subjects.update', $c2subject->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="mamonhoc">Mã môn học</label>
                    <input type="text" class="form-control" id="mamonhoc" name="mamonhoc" value="{{ $c2subject->mamonhoc }}" required>
                </div>
                <div class="form-group">
                    <label for="tenmonhoc">Tên môn học</label>
                    <input type="text" class="form-control" id="tenmonhoc" name="tenmonhoc" value="{{ $c2subject->tenmonhoc }}" required>
                </div>
                <div class="form-group">
                    <label for="sotinchi">Số tín chỉ</label>
                    <input type="number" class="form-control" id="sotinchi" name="sotinchi" value="{{ $c2subject->sotinchi }}" required>   
                </div>
                <div class="form-group">
                    <label for="nguoiday">Thầy (Cô) giảng dạy</label>
                    <input type="text" class="form-control" id="nguoiday" name="nguoiday" value="{{ $c2subject->nguoiday }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
