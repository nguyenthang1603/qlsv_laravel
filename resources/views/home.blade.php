@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Menu -->
        <div class="col-md-3">
            <div class="menu">
                <h2>Menu</h2>
                <ul>
                    <li class="menu-item" onclick="showFaculties()">Khoa</li>
                    <li id="class-item" class="menu-item" style="display: none;" onclick="showClasses()">Lớp</li>
                </ul>
                <div id="faculty-list-container" style="display: none;">
                    <ul id="faculty-list">
                        <li><a href="#" onclick="selectFaculty('CNTT')">Khoa CNTT</a></li>
                        <li><a href="#" onclick="selectFaculty('TMDT')">Khoa TMDT</a></li>
                    </ul>
                </div>
                <div id="class-list-container" style="display: none;">
                    <ul id="class-list"></ul>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h1>Student Management System</h1><a class="nav-link" href="{{ url('/') }}">Trang chủ</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="content-container" style="display: none;">
                        <!-- Placeholder for content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showFaculties() {
        document.getElementById('faculty-list-container').style.display = 'block';
        document.getElementById('class-list-container').style.display = 'none';
        document.getElementById('class-item').style.display = 'none';
    }

    function showClasses() {
        document.getElementById('faculty-list-container').style.display = 'none';
        document.getElementById('class-list-container').style.display = 'block';
        document.getElementById('class-item').style.display = 'block';
    }

    function selectFaculty(faculty) {
        document.getElementById('class-list-container').style.display = 'block';

        const classList = {
            'CNTT': ['CNTT1', 'CNTT2'],
            'TMDT': ['TMDT1', 'TMDT2']
        };

        const classes = classList[faculty];
        const classListElement = document.getElementById('class-list');

        classListElement.innerHTML = '';
        classes.forEach(className => {
            const li = document.createElement('li');
            const a = document.createElement('a');
            a.href = '#';
            a.onclick = () => selectClass(className);
            a.innerText = className;
            li.appendChild(a);
            classListElement.appendChild(li);
        });
    }

    function selectClass(className) {
        const contentContainer = document.getElementById('content-container');

        const classUrls = {
            'CNTT1': {
                students: "{{ url('/c1students') }}",
                subjects: "{{ url('/c1subjects') }}",
                points: "{{ url('/c1points') }}"
            },
            'CNTT2': {
                students: "{{ url('/c2students') }}",
                subjects: "{{ url('/c2subjects') }}",
                points: "{{ url('/c2points') }}"
            },
            'TMDT1': {
                students: "{{ url('/t1students') }}",
                subjects: "{{ url('/t1subjects') }}",
                points: "{{ url('/t1points') }}"
            },
            'TMDT2': {
                students: "{{ url('/t2students') }}",
                subjects: "{{ url('/t2subjects') }}",
                points: "{{ url('/t2points') }}"
            }
        };

        const urls = classUrls[className];

        contentContainer.innerHTML = `
            <h3>Danh sách sinh viên, môn học, điểm của lớp ${className}</h3>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="${urls.students}">Danh sách sinh viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="${urls.subjects}">Danh sách môn học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="${urls.points}">Danh sách điểm các môn học của sinh viên</a>
                </li>
            </ul>
        `;
        contentContainer.style.display = 'block';
    }
</script>

@endsection
