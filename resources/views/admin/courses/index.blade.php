@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
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
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->courses_name }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('courses.view', ['id'=> $course->id]) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('courses.delete', ['id'=> $course->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="{{ route('courses.edit', ['id'=> $course->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
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
