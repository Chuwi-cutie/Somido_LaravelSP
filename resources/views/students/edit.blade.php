@extends('layout')

@section('content')
<div class="animate-fade-in">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-white fw-bold">
            ✏️ Edit Student
        </h1>
        <a href="{{ url('/students') }}" class="btn btn-secondary">
            ← Back to List
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">📝 Update Student Information</h5>
        </div>
        <div class="card-body p-4">
            <form action="#" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="John" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="Doe" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="john.doe@university.edu" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="+63 912 345 6789">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" id="course" name="course" required>
                            <option value="BSCS" selected>BS Computer Science</option>
                            <option value="BSIT">BS Information Technology</option>
                            <option value="BSCE">BS Computer Engineering</option>
                            <option value="BSDS">BS Data Science</option>
                            <option value="BSCY">BS Cybersecurity</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="year_level" class="form-label">Year Level</label>
                        <select class="form-select" id="year_level" name="year_level" required>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3" selected>3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3">123 University Drive, College Town, Metro Manila, Philippines</textarea>
                </div>

                <hr class="my-4">

                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">
                        💾 Update Student
                    </button>
                    <a href="{{ url('/students/1') }}" class="btn btn-secondary">
                        ❌ Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
