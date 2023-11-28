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
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Delete Course</h4>
                    <div class="table-responsive pt-3">
                        <form action="{{ route('courses.delete', ['id'=> $courses->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <table class="table table-course">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Id Number</th>
                                    <th>Full Name</th>
                                    <th>Course</th>
                                    <th>A.Y.</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $courses->id }}</td>
                                    <td>{{ $courses->id_number }}</td>
                                    <td>{{ $courses->full_name }}</td>
                                    <td>{{ $courses->ay }}</td>
                                    <td>{{ $courses->semester }}</td>
                                    <td>
                                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
