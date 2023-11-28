@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('payment.search') }}" method="GET" class="d-flex align-items-center">
                <div class="mr-3">
                    <label for="idNumber" class="form-label">ID Number:</label>
                    <input type="text" class="form-control" placeholder="Enter ID Number" name="idNumber" id="idNumber">
                </div>
                <div class="mr-3">
                    <label for="semester" class="form-label">Semester:</label>
                    <input type="text" class="form-control" placeholder="Enter Semester" name="semester" id="semester">
                </div> 
                <div class="mr-3">
                    <label for="academic year" class="form-label">Academic Year:</label>
                    <input type="text" class="form-control" placeholder="Enter Academic Year" name="academic year" id="academic year">
                </div>
                <div class="mr-3">
                    <label for="course" class="form-label">Course:</label>
                    <select class="form-control" style="padding: 16px;" name="course" id="course" >
                        @if($courses = App\Models\Course::get())
                            @foreach($courses as $course)
                                <option value="{{ $course->id}}">{{ $course->courses_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 d-flex justify-content-end">
            <button class="btn btn-primary mt-4">Search</button>
        </div>
    </div></form>
    <!-- Student Information Section -->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Information</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID<th>
                                    <th>ID Number</th>
                                    <th>Full Name</th>
                                    <th>Course</th>
                                    <th>A.Y.</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
    <!-- Rest of your content goes here -->
</div>
@endsection
