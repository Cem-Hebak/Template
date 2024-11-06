@extends('layouts.master')
@section('title') Dashboard @endsection

@section('content')
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
                        <p><strong class="font-40">Language and Region</strong></p>
                    </div><!--end row-->
                </div><!--end card-body-->
                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="text-start">Account Language</h3>
                            <h6 class="text-start" style="color: #adb5bd;">See buttons, titles, and other text in your preferred language. Communications to you, such as account emails or notifications, will be in this language.</h6>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter6">
                            view
                            </button>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">App language</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5>Choose the language</h5>
                                            <p>Language that is understandable</p>
                                            <select id="languageSelector" class="form-select mt-3">
                                                <option value="en">English</option>
                                                <option value="ms">Bahasa Melayu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-soft-primary btn-sm">Save changes</button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

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
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/js/displayMode.js') }}"></script>
@endsection
