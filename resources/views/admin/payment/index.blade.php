@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('payment.search') }}" method="POST" class="d-flex align-items-center">
                @csrf
                <div class="mr-3">
                    <label for="idnumber" class="form-label">ID Number:</label>
                    <input type="text" class="form-control" placeholder="Enter ID Number" name="idnumber" id="idnumber">
                </div>
                <div class="mr-3">
                    <label for="firstname" class="form-label">Firstname:</label>
                    <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname" id="firstname">
                </div>
                <div class="mr-3">
                    <label for="lastname" class="form-label">Lastname:</label>
                    <input type="text" class="form-control" placeholder="Enter Lastname" name="lastname" id="lastname">
                </div>  
                <div class="mr-3">
                    <label for="academic year" class="form-label">Academic Year:</label>
                    <input type="text" class="form-control" placeholder="Enter Academic Year" name="academic year" id="academic year">
                </div> 
                <div class="mr-3">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" class="form-control" placeholder="Enter Semester" name="semester" id="semester">
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
                                    @if(isset($value['course']['course']))
                                    <tr>
                                      <td>{{ $value['idnumber'] }}</td>
                                      <td>{{ $value['first_name'] }}</td>
                                      <td>{{ $value['last_name'] }}</td>
                                      <td>{{ $value['course']['course'] }}</td>
                                      <td><a class="btn btn-primary" href="">Pay</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endif        
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>       

    <!-- Rest of your content goes here -->
    </div>
</div>
@endsection
