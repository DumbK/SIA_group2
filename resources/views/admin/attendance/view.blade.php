@extends('layouts.default')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                		<i class="mdi mdi-home"></i>
                </span> {{ $title }}
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                	<li class="breadcrumb-item active" aria-current="page">
                		<span></span>Attendances <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                	</li>
                </ul>
            </nav>
    </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">SSC</h4>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID Number</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Course</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(isset($data))
                        @foreach($data as $value)
                        <tr>
                          <td>{{ $value['idnumber'] }}</td>
                          <td>{{ $value['firstname'] }}</td>
                          <td>{{ $value['last_name'] }}</td>
                          <td>{{ $value['course']['course'] }}</td>
                          <td><a class="btn btn-primary" href="">Pay</td>
                        </tr>
                        @endforeach
                      @endif                
                      </tbody>
                    </table>
                  </div>
                	</div>
              	</div>
              </div>
        </div>
        @endsection