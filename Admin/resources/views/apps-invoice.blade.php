@extends('layouts.master')
@section('title') Dashboard @endsection

@section('content')
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
                        <p><strong class="font-40">Notification settings</strong></p>
                        <p class="font-15">SeKAD may still send you important notifications about your account 
                            and content outside of your preferred notification settings.</p>
                    </div><!--end row-->
                </div><!--end card-body-->
                
                <div class="card-body">
                    <h3 class="mt-4">Reminders</h3>
                    <p>Push, Email, SMS</p>

                    <h4 class="mt-4">Where you receive these notifications</h4>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <p class="mb-0">Push</p>
                        <div class="form-check form-switch form-switch-info">
                            <input class="form-check-input" type="checkbox" id="customSwitchPush" checked>
                            <label class="form-check-label" for="customSwitchPush"></label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <p class="mb-0">Email</p>
                        <div class="form-check form-switch form-switch-info">
                            <input class="form-check-input" type="checkbox" id="customSwitchEmail" checked>
                            <label class="form-check-label" for="customSwitchEmail"></label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <p class="mb-0">SMS</p>
                        <div class="form-check form-switch form-switch-info">
                            <input class="form-check-input" type="checkbox" id="customSwitchSMS" checked>
                            <label class="form-check-label" for="customSwitchSMS"></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive project-invoice">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 align-self-end">
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
            </div><!--end card-->
        </div><!--end col-->
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
