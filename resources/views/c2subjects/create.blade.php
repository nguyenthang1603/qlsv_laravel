@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm môn học</h1>
            <form action="{{ route('c2subjects.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="mamonhoc">Mã môn học</label>
                    <input type="text" class="form-control" id="mamonhoc" name="mamonhoc" required>
                </div>
                <div class="form-group">
                    <label for="tenmonhoc">Tên môn học</label>
                    <input type="text" class="form-control" id="tenmonhoc" name="tenmonhoc" required>
                </div>
                <div class="form-group">
                    <label for="sotinchi">Số tín chỉ</label>
                    <input type="number" class="form-control" id="sotinchi" name="sotinchi" required>
                </div>
                <div class="form-group">
                    <label for="nguoiday">Thầy (Cô) giảng dạy:</label>
                    <input type="text" class="form-control" id="nguoiday" name="nguoiday" required>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection