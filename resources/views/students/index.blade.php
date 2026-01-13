@extends('layout')

@section('content')
<div class="animate-fade-in">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-white fw-bold">
            📋 Student List
        </h1>
        <a href="{{ url('/students/create') }}" class="btn btn-success">
            ➕ Add New Student
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">📚 Registered Students</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Year Level</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-weight: 600;">JD</div>
                                    <div>
                                        <strong>John Doe</strong>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">BS Computer Science</span></td>
                            <td><span class="badge bg-secondary">3rd Year</span></td>
                            <td class="text-center">
                                <a href="{{ url('/students/1') }}" class="btn btn-info btn-sm me-1">👁️ View</a>
                                <a href="{{ url('/students/1/edit') }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>2</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-weight: 600;">JS</div>
                                    <div>
                                        <strong>Jane Smith</strong>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">BS Information Technology</span></td>
                            <td><span class="badge bg-secondary">2nd Year</span></td>
                            <td class="text-center">
                                <a href="{{ url('/students/2') }}" class="btn btn-info btn-sm me-1">👁️ View</a>
                                <a href="{{ url('/students/2/edit') }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>3</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-weight: 600;">MJ</div>
                                    <div>
                                        <strong>Michael Johnson</strong>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">BS Computer Engineering</span></td>
                            <td><span class="badge bg-secondary">4th Year</span></td>
                            <td class="text-center">
                                <a href="{{ url('/students/3') }}" class="btn btn-info btn-sm me-1">👁️ View</a>
                                <a href="{{ url('/students/3/edit') }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>4</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-weight: 600;">EW</div>
                                    <div>
                                        <strong>Emily Williams</strong>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">BS Data Science</span></td>
                            <td><span class="badge bg-secondary">1st Year</span></td>
                            <td class="text-center">
                                <a href="{{ url('/students/4') }}" class="btn btn-info btn-sm me-1">👁️ View</a>
                                <a href="{{ url('/students/4/edit') }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>5</strong></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-info text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-weight: 600;">DB</div>
                                    <div>
                                        <strong>David Brown</strong>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">BS Cybersecurity</span></td>
                            <td><span class="badge bg-secondary">3rd Year</span></td>
                            <td class="text-center">
                                <a href="{{ url('/students/5') }}" class="btn btn-info btn-sm me-1">👁️ View</a>
                                <a href="{{ url('/students/5/edit') }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light">
            <small class="text-muted">Showing 5 students</small>
        </div>
    </div>
</div>
@endsection