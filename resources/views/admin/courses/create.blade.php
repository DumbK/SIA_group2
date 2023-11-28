@extends('layouts.default')

@section('content')
	
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        	 <div class="card">
              <div class="card-body">
                <h4 class="card-title">Fill This Out!</h4>
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('courses.save') }}">

                  @csrf
                  <div class="form-group">
                    <label for="courses">Courses</label>
                    <input type="text" name="courses" class="form-control" id="courses">
                  </div>
                  <div class="form-group">
                    <label for="id_num">Id Number</label>
                    <input type="text" name="id_num" class="form-control" id="id_num" >
                  </div>
                  <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" class="form-control" id="full_name">
                  </div>
                  <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" name="course" class="form-control" id="course" >
                  </div> 
                  <div class="form-group">
                    <label for="ay">A.Y.</label>
                    <input type="number" name="ay" class="form-control" id="ay" >
                  </div>   
                  <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" name="semester" class="form-control" id="semester">
                  </div>                
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-primary">Cancel</button>
                </form>
              </div>

            </div>
      	</div>
      </div>
  </div>
@endsection

