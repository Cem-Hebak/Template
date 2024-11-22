@extends('layouts.master')
@section('title') Dashboard @endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/font-style.css') }}">
    @component('components.breadcrumb')
        @slot('li_1') SeKAD @endslot
        @slot('li_3') Attendance Record @endslot
        @slot('title') Attendance Record @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body invoice-head">
                    <div class="row">
                        <p><strong class="font-40">Attendance record for students</strong></p>
                        <p><strong class="font-20">Tick the name of the students that attend the class.</strong></p>
                    </div><!--end row-->
                </div><!--end card-body-->
                
                <div class="card-body">
                <div class="table-responsive project-invoice">
                    <table class="attendance-table">
                        <thead>
                            <tr>
                                <th >Name</th> <!-- Added color for visibility -->
                                <th class="checkbox-cell" >Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- Dummy Data -->
                            <tr>
                                <td>John Doe</td>
                                <td class="checkbox-cell">
                                <input type="checkbox" id="attendance-john" name="attendance[]" value="John Doe">
                                </td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td class="checkbox-cell">
                                <input type="checkbox" id="attendance-jane" name="attendance[]" value="Jane Smith">
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Brown</td>
                                <td class="checkbox-cell">
                                <input type="checkbox" id="attendance-michael" name="attendance[]" value="Michael Brown">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                    <div class="row mt-3">
                        <div class="col-lg-12 text-end">
                            <button class="btn btn-primary">Submit Attendance</button>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>

    <style>
        body.dark {
            background-color: #121212;
            color: #ffffff;
        }

        body.light {
            background-color: #ffffff;
            color: #000000;
        }
    </style>
@endsection

@section('script')
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script src="{{ URL::asset('assets/js/displayMode.js') }}"></script>
<script src="{{ asset('assets/js/font-size.js') }}"></script>
@endsection
