@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Management System</h1>
            <a href="{{ route('c1points.create') }}" class="btn btn-primary">Thêm điểm</a>  <a href="{{ url('/home') }}" class="btn btn-primary">Trang chủ</a>
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
                    @foreach ($c1points as $c1point)
                    <tr>
                        <td>{{ $c1point->masv }}</td>
                        <td>{{ $c1point->mamonhoc }}</td>
                        <td>{{ $c1point->diemcc }}</td>
                        <td>{{ $c1point->diemgk }}</td>
                        <td>{{ $c1point->diemck }}</td>
                        <td>
                            <a href="{{ route('c1points.edit', $c1point->id) }}" class="btn btn-primary">Cập nhật</a>
                            <form action="{{ route('c1points.destroy', $c1point->id) }}" method="POST" class="d-inline">
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