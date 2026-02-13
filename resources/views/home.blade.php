@extends('students.component.layout')

@section('content')
<h1>Welcome to the Student Portal</h1>
<p>This is a simple student management system for managing student records.</p>
<p>You can view, add, edit, and manage student information using this portal.</p>
<br>
<a href="{{ url('/students') }}"><button class="btn">View Student List</button></a>
@endsection
