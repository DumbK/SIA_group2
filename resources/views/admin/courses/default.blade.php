@extends('layouts.default')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <!-- Breadcrumb content goes here if needed -->
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <a href="{{ route('courses.create') }}" class="btn btn-primary btn-icon-text">
                <i class="mdi mdi-plus btn-icon-prepend"></i> Add Courses
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Courses</h4>
                    <p class="card-description">
                        <!-- <code>6604</code> -->
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Number</th>
                                    <th>Full Name</th>
                                    <th>Course</th>
                                    <th>A.Y.</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $courses)
                                <tr>
                                    <td>{{ $courses->id }}</td>
                                    <td>{{ $courses->id_number }}</td>
                                    <td>{{ $courses->full_name }}</td>
                                    <td>{{ $courses->course }}</td>
                                    <td>{{ $courses->ay }}</td>
                                    <td>{{ $courses->semester }}</td>
                                    <td>
                                        <a href="{{ route('courses.view', ['id'=> $courses->id]) }}">View</a>
                                        <a href="{{ route('courses.delete', ['id'=> $courses->id]) }}">Delete</a>
                                        <a href="{{ route('courses.edit', ['id'=> $courses->id]) }}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $courses->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
