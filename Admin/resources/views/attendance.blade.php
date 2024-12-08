@extends('layouts.master')
@section('title') Attendance @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Attendance @endslot
        @slot('title') Record Attendance @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Display error message -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('attendance.store') }}">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>IC Number</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($students as $student)
                                            <tr>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ $student->ic_number }}</td>
                                                <td>
                                                    <input type="checkbox" name="attendance[]" value="{{ $student->id }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary">Submit Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/js/displayMode.js') }}"></script>
    <script src="{{ asset('assets/js/font-size.js') }}"></script>
@endsection
