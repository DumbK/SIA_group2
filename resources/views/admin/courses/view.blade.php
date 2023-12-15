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
                                    <td class="font-weight-bold">Course Name:</td>
                                    <td>{{ $courses->courses_name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
