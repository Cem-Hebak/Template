@extends('layouts.master')
@section('title') Dashboard @endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .button-right {
            margin-left: auto;
        }
    </style>

    @component('components.breadcrumb')
        @slot('li_1') SeKAD @endslot
        @slot('li_2') Notifications @endslot
        @slot('li_3') Reminders @endslot
        @slot('title') Reminders @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body invoice-head">
                    <div class="row">
                        <p><strong class="font-40">Accessibility</strong></p>
                        <p><strong class="font-20">These options enhance accessibility on the SeKAD website.</strong></p>
                    </div><!--end row-->
                </div><!--end card-body-->
                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h4 class="text-start">Display</h4>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">
                            view
                            </button>
                            
                        </div>
                    </div>

                    <div class="row align-items-center mt-3">
                        <div class="col-lg-6">
                            <h4 class="text-start">Size</h4>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter3">
                            view
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">App Display Mode</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5>Choose Display Mode</h5>
                                            <p>Toggle between light and dark modes for the website.</p>
                                            <select id="displayModeSelector" class="form-select mt-3">
                                            <option value="light">Light Mode</option>
                                            <option value="dark">Dark Mode</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-soft-primary btn-sm" onclick="saveDisplayMode()" data-bs-dismiss="modal">Save changes</button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Font Size Modal  -->
                    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">Change size</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div><!--end modal-header-->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <h5>Pick the size</h5>
                                                <p>Adjust the sizing of words according to your preference.</p>
                                                <select id="fontSizeSelector" class="form-select mt-3">
                                                <option value="small">Small</option>
                                                <option value="medium" selected>Medium</option>
                                                <option value="large">Large</option>
                                                </select>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                </div><!--end modal-body-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-soft-primary btn-sm" onclick="applyFontSize()" data-bs-dismiss="modal">Save changes</button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                </div><!--end modal-footer-->
                            </div><!--end modal-content-->
                        </div><!--end modal-dialog-->
                    </div><!--end modal-->
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive project-invoice">
                                <!-- Table content goes here -->
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-6 align-self-end">
                            <!-- Additional content if needed -->
                        </div>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                            <div class="text-center"><small class="font-12">Thank you very much for doing business with us.</small></div>
                        </div>
                        <div class="col-lg-12 col-xl-4">
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>

    <style>
        /* CSS for font size classes */
        .small {
            font-size: 12px; /* Example size */
        }

        .medium {
            font-size: 16px; /* Example size */
        }

        .large {
            font-size: 20px; /* Example size */
        }

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
