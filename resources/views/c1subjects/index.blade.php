@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Management System</h1>
            <a href="{{ route('c1subjects.create') }}" class="btn btn-primary">Add Subject</a>  <a href="{{ url('/home') }}" class="btn btn-primary">Trang chủ</a>
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
                    @foreach ($c1subjects as $c1subject)
                    <tr>
                        <td>{{ $c1subject->mamonhoc }}</td>
                        <td>{{ $c1subject->tenmonhoc }}</td>
                        <td>{{ $c1subject->sotinchi }}</td>
                        <td>{{ $c1subject->nguoiday }}</td>
                        <td>
                            <a href="{{ route('c1subjects.edit', $c1subject->id) }}" class="btn btn-primary">Cập nhật</a>
                            <form action="{{ route('c1subjects.destroy', $c1subject->id) }}" method="POST" class="d-inline">
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