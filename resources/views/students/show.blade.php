@extends('layout')

@section('content')
<div class="animate-fade-in">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-white fw-bold">
            👤 Student Profile
        </h1>
        <div>
            <a href="{{ url('/students/1/edit') }}" class="btn btn-warning me-2">
                ✏️ Edit Profile
            </a>
            <a href="{{ url('/students') }}" class="btn btn-secondary">
                ← Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card text-center">
                <div class="card-body py-5">
                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 120px; height: 120px; font-size: 3rem; font-weight: 700;">
                        JD
                    </div>
                    <h3 class="fw-bold mb-1">John Doe</h3>
                    <p class="text-muted mb-3">Student ID: STU-2024-001</p>
                    <span class="badge bg-success fs-6 px-3 py-2">Active Student</span>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">📋 Student Information</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small text-uppercase fw-bold">Full Name</label>
                                <p class="fs-5 mb-0 fw-semibold">John Doe</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small text-uppercase fw-bold">Email Address</label>
                                <p class="fs-5 mb-0">
                                    <a href="mailto:john.doe@university.edu" class="text-decoration-none">john.doe@university.edu</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small text-uppercase fw-bold">Course</label>
                                <p class="fs-5 mb-0">
                                    <span class="badge bg-primary fs-6">BS Computer Science</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small text-uppercase fw-bold">Year Level</label>
                                <p class="fs-5 mb-0">
                                    <span class="badge bg-secondary fs-6">3rd Year</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small text-uppercase fw-bold">Phone Number</label>
                                <p class="fs-5 mb-0">+63 912 345 6789</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small text-uppercase fw-bold">Date Enrolled</label>
                                <p class="fs-5 mb-0">September 15, 2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="text-muted small text-uppercase fw-bold">Address</label>
                                <p class="fs-5 mb-0">123 University Drive, College Town, Metro Manila, Philippines</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">📊 Academic Summary</h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3 mb-3">
                            <div class="p-3 rounded" style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));">
                                <h2 class="fw-bold mb-0" style="color: #667eea;">1.75</h2>
                                <small class="text-muted">Current GPA</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="p-3 rounded" style="background: linear-gradient(135deg, rgba(17, 153, 142, 0.1), rgba(56, 239, 125, 0.1));">
                                <h2 class="fw-bold mb-0" style="color: #11998e;">85</h2>
                                <small class="text-muted">Units Earned</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="p-3 rounded" style="background: linear-gradient(135deg, rgba(240, 147, 251, 0.1), rgba(245, 87, 108, 0.1));">
                                <h2 class="fw-bold mb-0" style="color: #f5576c;">5</h2>
                                <small class="text-muted">Semesters</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="p-3 rounded" style="background: linear-gradient(135deg, rgba(79, 172, 254, 0.1), rgba(0, 242, 254, 0.1));">
                                <h2 class="fw-bold mb-0" style="color: #4facfe;">2026</h2>
                                <small class="text-muted">Expected Graduation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
