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
                    <label for="courses">Course Name</label>
                    <input type="text" name="courses" class="form-control" id="courses">
                  </div>
                </form>
              </div>

            </div>
      	</div>
      </div>
  </div>
@endsection

