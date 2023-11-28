@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Course</h4>
                    <div class="form-group">
                        <label>Id:</label>
                        <h4>{{ $courses->id}}</h4>
                    </div>
                    <div class="form-group">
                        <label>Id Number:</label>
                        <h4>{{ $courses->id_number }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Full Name:</label>
                        <h4>{{ $courses->full_name }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Course:</label>
                        <h4>{{ $courses->course }}</h4>
                    </div>
                    <div class="form-group">
                        <label>A.Y.:</label>
                        <h4>{{ $courses->ay }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Semester:</label>
                        <h4>{{ $courses->semester }}</h4>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
