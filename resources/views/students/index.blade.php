@extends('layout')

@section('content')
<h1>Student List</h1>
<a href="{{ url('/students/create') }}"><button class="btn">Add New Student</button></a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>BS Computer Science</td>
            <td>3rd Year</td>
            <td>
                <a href="{{ url('/students/1') }}">View</a> |
                <a href="{{ url('/students/1/edit') }}">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>BS Information Technology</td>
            <td>2nd Year</td>
            <td>
                <a href="{{ url('/students/2') }}">View</a> |
                <a href="{{ url('/students/2/edit') }}">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Mike Johnson</td>
            <td>BS Computer Engineering</td>
            <td>4th Year</td>
            <td>
                <a href="{{ url('/students/3') }}">View</a> |
                <a href="{{ url('/students/3/edit') }}">Edit</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection