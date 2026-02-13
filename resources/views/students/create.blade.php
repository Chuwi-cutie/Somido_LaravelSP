@extends('students.component.layout')

@section('content')
<h1>Add Student</h1>
<form>
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter name">

    <label>Email</label>
    <input type="email" name="email" placeholder="Enter email">

    <label>Course</label>
    <select name="course">
        <option value="">Select Course</option>
        <option value="BSCS">BS Computer Science</option>
        <option value="BSIT">BS Information Technology</option>
        <option value="BSCE">BS Computer Engineering</option>
    </select>

    <label>Year Level</label>
    <select name="year_level">
        <option value="">Select Year Level</option>
        <option value="1">1st Year</option>
        <option value="2">2nd Year</option>
        <option value="3">3rd Year</option>
        <option value="4">4th Year</option>
    </select>

    <br><br>
    <button type="submit" class="btn">Save</button>
    <a href="{{ url('/students') }}"><button type="button" class="btn">Cancel</button></a>
</form>
@endsection
