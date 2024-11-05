@extends('layouts.master')
@section('title') Dashboard @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') SeKAD @endslot
        @slot('li_3') Payments @endslot
        @slot('title') Payments @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body invoice-head">
                    <div class="row">
                        <p><strong class="font-40">Payment Information</strong></p>
                    </div><!--end row-->
                </div><!--end card-body-->
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="text-start">Business location and currency</h3>
                            <h5 class="text-start" style="color: #adb5bd;">Malaysia, Malaysian Ringgit MYR</h5>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-start" style="padding-top: 0px;">Add payment method</h3>

                            <!-- Debit or Credit Card Row -->
                            <div class="d-flex justify-content-between align-items-center mt-2 full-width">
                                <h5 class="text-start mb-0">Debit or credit card</h5>
                                <div class="radio radio-primary">
                                    <input type="radio" name="paymentMethod" id="radio13" value="debit_credit_card">
                                    <label for="radio13"></label>
                                </div>
                            </div>

                            <!-- Grabpay Row -->
                            <div class="d-flex justify-content-between align-items-center mt-2 full-width">
                                <h5 class="text-start mb-0">Grabpay</h5>
                                <div class="radio radio-primary">
                                    <input type="radio" name="paymentMethod" id="radio14" value="grabpay">
                                    <label for="radio14"></label>
                                </div>
                            </div>

                            <!-- FPX Row -->
                            <div class="d-flex justify-content-between align-items-center mt-2 full-width">
                                <h5 class="text-start mb-0">FPX</h5>
                                <div class="radio radio-primary">
                                    <input type="radio" name="paymentMethod" id="radio15" value="fpx">
                                    <label for="radio15"></label>
                                </div>
                            </div>

                            <!-- New Button Below FPX -->
                            <div class="d-flex justify-content-end mt-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive project-invoice">
                                <!-- Table content goes here -->
                            </div>  <!--end /div-->
                        </div>  <!--end col-->
                    </div><!--end row-->

                    <div class="row justify-content-center">
                        <div class="col-lg-6 align-self-end">
                            <!-- Additional content if needed -->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <hr>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                            <div class="text-center"><small class="font-12">Your payment methods are saved and stored securely.</small></div>
                        </div><!--end col-->
                        <div class="col-lg-12 col-xl-4">
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>
@endsection

@section('style')
<style>
    /* Ensure full width for alignment */
    .full-width {
        width: 100%;
    }
    /* Align button to the right edge */
    .button-right {
        margin-left: auto;
    }
</style>
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
