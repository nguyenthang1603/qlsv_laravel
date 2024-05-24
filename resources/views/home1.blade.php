@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Student Management System</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Trang chủ</a></li>
        </ul>
        
    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action" onclick="showTable('c1students')">Students CNTT1</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showTable('c1subjects')">Subjects CNTT1</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showTable('c1points')">Points CNTT1</a>
                
            </div>
        </div>
        <div class="col-md-9">
            <div id="c1studentsTable" style="display: none;">
            <div id="form-container">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm..." id="searchInput1">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" onclick="search()">Tìm kiếm</button>
        </div>
    </div>
    </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Họ và tên</th>
                            <th>Mã sinh viên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($c1students as $c1student)
                        <tr>
                            <td>{{ $c1student->name }}</td>
                            <td>{{ $c1student->masv }}</td>
                            <td>{{ $c1student->gender }}</td>
                            <td>{{ $c1student->date }}</td>
                            <td>{{ $c1student->address }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="c1subjectsTable" style="display: none;">
            <div id="form-container">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm..." id="searchInput2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" onclick="search()">Tìm kiếm</button>
        </div>
    </div>
    </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã môn học</th>
                            <th>Tên môn học</th>
                            <th>Số tín chỉ</th>
                            <th>Thầy (cô) giảng dạy</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($c1subjects as $c1subject)
                        <tr>
                            <td>{{ $c1subject->mamonhoc }}</td>
                            <td>{{ $c1subject->tenmonhoc }}</td>
                            <td>{{ $c1subject->sotinchi }}</td>
                            <td>{{ $c1subject->nguoiday }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="c1pointsTable" style="display: none;">
            <div id="form-container">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm..." id="searchInput3">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" onclick="search()">Tìm kiếm</button>
        </div>
    </div>
    </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã sinh viên</th>
                            <th>Mã môn học</th>
                            <th>Điểm chuyên cần</th>
                            <th>Điểm giữa kì</th>
                            <th>Điểm cuối kì</th>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function showTable(table) {
        document.getElementById('c1studentsTable').style.display = 'none';
        document.getElementById('c1subjectsTable').style.display = 'none';
        document.getElementById('c1pointsTable').style.display = 'none';
        document.getElementById(table + 'Table').style.display = 'block';
    }
    function search() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput1");
        filter = input.value.toUpperCase();
        table = document.getElementById("c1studentsTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; 
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    function search() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput3");
        filter = input.value.toUpperCase();
        table = document.getElementById("c1pointsTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; // Thay đổi chỉ số này để lọc theo cột khác
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    function search() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput2");
        filter = input.value.toUpperCase();
        table = document.getElementById("c1subjectsTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; // Thay đổi chỉ số này để lọc theo cột khác
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection