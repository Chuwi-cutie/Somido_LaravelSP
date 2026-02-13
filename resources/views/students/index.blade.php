@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Student List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->studentID }}</td>
                    <td>{{ $student->studentName }}</td>
                    <td>{{ $student->studentEmail }}</td>
                    <td>{{ $student->studentCourse }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection