@extends('layout')

@section('content')
<div class="row justify-content-center animate-fade-in">
    <div class="col-lg-8">
        <div class="card text-center">
            <div class="card-body py-5">
                <div class="mb-4">
                    <span style="font-size: 5rem;">🎓</span>
                </div>
                <h1 class="display-4 fw-bold mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Welcome to the Student Portal
                </h1>
                <p class="lead text-muted mb-4">
                    A comprehensive student management system designed to streamline 
                    student records, track academic progress, and manage enrollment efficiently.
                </p>
                <hr class="my-4">
                <p class="text-secondary mb-4">
                    This portal allows administrators to easily manage student information including 
                    personal details, course enrollments, and academic year levels. Navigate through 
                    the system to view, add, edit, or manage student records seamlessly.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ url('/students') }}" class="btn btn-primary btn-lg px-5">
                        📋 View Student List
                    </a>
                    <a href="{{ url('/students/create') }}" class="btn btn-success btn-lg px-5">
                        ➕ Add New Student
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row mt-4 g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="card-body py-4">
                        <div class="mb-3" style="font-size: 3rem;">👥</div>
                        <h5 class="card-title fw-bold">Manage Students</h5>
                        <p class="card-text text-muted small">View and manage all registered students in one place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="card-body py-4">
                        <div class="mb-3" style="font-size: 3rem;">📚</div>
                        <h5 class="card-title fw-bold">Track Courses</h5>
                        <p class="card-text text-muted small">Keep track of student course enrollments and progress.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="card-body py-4">
                        <div class="mb-3" style="font-size: 3rem;">📊</div>
                        <h5 class="card-title fw-bold">Easy Updates</h5>
                        <p class="card-text text-muted small">Quickly update student information when needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
