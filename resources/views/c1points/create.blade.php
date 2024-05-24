@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm điểm</h1>
            <form action="{{ route('c1points.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="masv">Mã sinh viên</label>
                    <input type="text" class="form-control" id="masv" name="masv" required>
                </div>
                <div class="form-group">
                    <label for="mamahoc">Mã môn học</label>
                    <input type="text" class="form-control" id="mamonhoc" name="mamonhoc" required>
                </div>
                <div class="form-group">
                    <label for="diemcc">Điểm chuyên cần</label>
                    <input class="form-control" id="diemcc" name="diemcc" required>
                </div>
                <div class="form-group">
                    <label for="diemgk">Điểm giữa kì</label>
                    <input type="text" class="form-control" id="diemgk" name="diemgk" required>
                </div>
                <div class="form-group">
                    <label for="diemck">Điểm cuối kì</label>
                    <input type="text" class="form-control" id="diemck" name="diemck" required>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection