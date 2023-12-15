@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Course</h4>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">Id:</td>
                                    <td>{{ $courses->id }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Id Number:</td>
                                    <td>{{ $courses->id_number }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Full Name:</td>
                                    <td>{{ $courses->full_name }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Course:</td>
                                    <td>{{ $courses->course }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">A.Y.:</td>
                                    <td>{{ $courses->ay }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Semester:</td>
                                    <td>{{ $courses->semester }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
