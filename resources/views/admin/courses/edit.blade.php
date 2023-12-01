@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Course Info </h4>
                    <form class="forms-sample" enctype="multipart/form-data" method="POST"
                        action="{{ route('courses.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $course->id }}">
                        <div class="form-group">
                            <label for="courses">Course Name</label>
                            <input type="text" name="course_name" class="form-control" id="courses"
                                value="{{ $course->courses_name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn btn-primary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
