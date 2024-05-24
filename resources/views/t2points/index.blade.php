@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Management System</h1>
            <a href="{{ route('t2points.create') }}" class="btn btn-primary">Thêm điểm</a>  <a href="{{ url('/home') }}" class="btn btn-primary">Trang chủ</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Mã sinh viên</th>
                        <th>Mã môn học</th>
                        <th>Điểm chuyên cần</th>
                        <th>Điểm giữa kì</th>
                        <th>Điểm cuối kì</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($t2points as $t2point)
                    <tr>
                        <td>{{ $t2point->masv }}</td>
                        <td>{{ $t2point->mamonhoc }}</td>
                        <td>{{ $t2point->diemcc }}</td>
                        <td>{{ $t2point->diemgk }}</td>
                        <td>{{ $t2point->diemck }}</td>
                        <td>
                            <a href="{{ route('t2points.edit', $t2point->id) }}" class="btn btn-primary">Cập nhật</a>
                            <form action="{{ route('t2points.destroy', $t2point->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this point?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection