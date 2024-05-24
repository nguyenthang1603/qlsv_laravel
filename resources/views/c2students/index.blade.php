@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Management System</h1>
            <a href="{{ route('c2students.create') }}" class="btn btn-primary">Thêm sinh viên</a>  <a href="{{ url('/home') }}" class="btn btn-primary">Trang chủ</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th>Mã sinh viên</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($c2students as $c2student)
                    <tr>
                        <td>{{ $c2student->name }}</td>
                        <td>{{ $c2student->masv }}</td>
                        <td>{{ $c2student->gender }}</td>
                        <td>{{ $c2student->date }}</td>
                        <td>{{ $c2student->address }}</td>
                        <td>
                            <a href="{{ route('c2students.edit', $c2student->id) }}" class="btn btn-primary">Cập nhật</a>
                            <form action="{{ route('c2students.destroy', $c2student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Xóa</button>
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