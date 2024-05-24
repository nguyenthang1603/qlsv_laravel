@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Management System</h1>
            <a href="{{ route('c2subjects.create') }}" class="btn btn-primary">Thêm môn học</a>  <a href="{{ url('/home') }}" class="btn btn-primary">Trang chủ</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tín chỉ</th>
                        <th>Thầy (Cô) giảng dạy</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($c2subjects as $c2subject)
                    <tr>
                        <td>{{ $c2subject->mamonhoc }}</td>
                        <td>{{ $c2subject->tenmonhoc }}</td>
                        <td>{{ $c2subject->sotinchi }}</td>
                        <td>{{ $c2subject->nguoiday }}</td>
                        <td>
                            <a href="{{ route('c2subjects.edit', $c2subject->id) }}" class="btn btn-primary">Cập nhật</a>
                            <form action="{{ route('c2subjects.destroy', $c2subject->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this subject?')">Xóa</button>
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