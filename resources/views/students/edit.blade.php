@extends('students.component.layout')

@section('content')
<h1>Edit Student</h1>
<form>
    <label>Name</label>
    <input type="text" name="name" value="John Doe">

    <label>Email</label>
    <input type="email" name="email" value="john.doe@email.com">

    <label>Course</label>
    <select name="course">
        <option value="BSCS" selected>BS Computer Science</option>
        <option value="BSIT">BS Information Technology</option>
        <option value="BSCE">BS Computer Engineering</option>
    </select>

    <label>Year Level</label>
    <select name="year_level">
        <option value="1">1st Year</option>
        <option value="2">2nd Year</option>
        <option value="3" selected>3rd Year</option>
        <option value="4">4th Year</option>
    </select>

    <br><br>
    <button type="submit" class="btn">Update</button>
    <a href="{{ url('/students') }}"><button type="button" class="btn">Cancel</button></a>
</form>
@endsection
