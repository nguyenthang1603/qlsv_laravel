@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Management System</h1>
            <a href="{{ route('t2subjects.create') }}" class="btn btn-primary">Add Subject</a>  <a href="{{ url('/home') }}" class="btn btn-primary">Trang chủ</a>
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
                    @foreach ($t2subjects as $t2subject)
                    <tr>
                        <td>{{ $t2subject->mamonhoc }}</td>
                        <td>{{ $t2subject->tenmonhoc }}</td>
                        <td>{{ $t2subject->sotinchi }}</td>
                        <td>{{ $t2subject->nguoiday }}</td>
                        <td>
                            <a href="{{ route('t2subjects.edit', $t2subject->id) }}" class="btn btn-primary">Cập nhật</a>
                            <form action="{{ route('t2subjects.destroy', $t2subject->id) }}" method="POST" class="d-inline">
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