@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Course Info </h4>
                    <form class="forms-sample" enctype="multipart/form-data" method="POST"
                        action="{{ route('courses-.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $courses->id }}">
                        <div class="form-group">
                            <label for="courses">Courses</label>
                            <input type="text" name="courses" class="form-control" id="courses"
                                value="{{ $courses->courses }}">
                        </div>
                        <div class="form-group">
                            <label for="id_number">ID Number</label>
                            <input type="text" name="id_number" class="form-control" id="id_number"
                                value="{{ $courses->id_number }}">
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="full_name"
                                value="{{ $courses->full_name }}">
                        </div>
                        <div class="form-group">
                            <label for="course">Course</label>
                            <input type="text" name="course" class="form-control" id="course"
                                value="{{ $courses->course }}">
                        </div>
                        <div class="form-group">
                            <label for="ay">A.Y. </label>
                            <input type="ay" name="ay" class="form-control" id="ay"
                                value="{{ $courses->ay }}">

                        </div>
                        <div class="form-group">
                            <label for="semester">Semester </label>
                            <input type="semester" name="semester" class="form-control" id="semester"
                                value="{{ $courses->semester }}">

                         </div>
                        <div class="form-group">
                            <label for="action">Action</label>
                            <input type="action" name="action" class="form-control" id="action"
                                value="{{ $courses->action }}">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn btn-primary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
