@extends('layout')

@section('content')
<h1>Student Profile</h1>
<p><strong>Name:</strong> John Doe</p>
<p><strong>Email:</strong> john.doe@email.com</p>
<p><strong>Course:</strong> BS Computer Science</p>
<p><strong>Year Level:</strong> 3rd Year</p>
<br>
<a href="{{ url('/students') }}"><button class="btn">Back to Student List</button></a>
@endsection
