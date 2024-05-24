<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Cập nhật điểm</h1>
            <form action="{{ route('c1points.update', $c1point->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="masv">Mã sinh viên</label>
                    <input type="text" class="form-control" id="masv" name="masv" value="{{ $c1point->masv }}" required>
                </div>
                <div class="form-group">
                    <label for="mamonhoc">Mã môn học</label>
                    <input type="text" class="form-control" id="mamonhoc" name="mamonhoc" value="{{ $c1point->mamonhoc }}" required>
                </div>
                <div class="form-group">
                    <label for="diemcc">Điểm chuyên cần</label>
                    <input type="text" class="form-control" id="diemcc" name="diemcc" value="{{ $c1point->diemcc }}" required>
                </div>
                <div class="form-group">
                    <label for="diemgk">Điểm giữa kì</label>
                    <input type="text" class="form-control" id="diemgk" name="diemgk" value="{{ $c1point->diemgk }}" required>
                </div>
                <div class="form-group">
                    <label for="diemck">Điểm cuối kì</label>
                    <input type="text" class="form-control" id="diemck" name="diemck" value="{{ $c1point->diemck }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
