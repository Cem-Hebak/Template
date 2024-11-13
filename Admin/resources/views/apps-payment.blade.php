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
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="text-start">Business location and currency</h3>
                            <h5 class="text-start text-muted">Malaysia, Malaysian Ringgit MYR</h5>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-start">Add payment method</h3>

                            <div class="d-flex justify-content-between align-items-center mt-2 full-width">
                                <h5 class="text-start mb-0">Debit or credit card</h5>
                                <div class="radio radio-primary">
                                    <input type="radio" name="paymentMethod" id="radio13" value="debit_credit_card">
                                    <label for="radio13"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 full-width">
                                <h5 class="text-start mb-0">Grabpay</h5>
                                <div class="radio radio-primary">
                                    <input type="radio" name="paymentMethod" id="radio14" value="grabpay">
                                    <label for="radio14"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 full-width">
                                <h5 class="text-start mb-0">FPX</h5>
                                <div class="radio radio-primary">
                                    <input type="radio" name="paymentMethod" id="radio15" value="fpx">
                                    <label for="radio15"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <button id="submitPaymentButton" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Credit Card Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="paymentModalTitle">Enter Card Details</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="creditCardForm">
                        <div class="mb-3">
                            <label for="cardName" class="form-label">Name on Card</label>
                            <input type="text" id="cardName" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="cardNumber" class="form-label">Card Number</label>
                            <input type="text" id="cardNumber" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="expiryDate" class="form-label">Expiry Date (MM/YY)</label>
                            <input type="text" id="expiryDate" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" id="cvv" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Payment</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
<style>
    .full-width {
        width: 100%;
    }
</style>
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/js/displayMode.js') }}"></script>
    <script>
        document.getElementById('submitPaymentButton').addEventListener('click', function (event) {
            event.preventDefault();

            // Get the selected payment method
            const selectedMethod = document.querySelector('input[name="paymentMethod"]:checked');

            // Check if a payment method is selected
            if (selectedMethod) {
                if (selectedMethod.value === 'debit_credit_card') {
                    // Show credit card modal if "Debit or credit card" is selected
                    const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
                    paymentModal.show();
                } else {
                    alert('Redirecting to ' + selectedMethod.value + ' payment page...');
                    // Here you can add the redirection logic for other payment methods
                }
            } else {
                alert('Please select a payment method.');
            }
        });
    </script>
    <script src="{{ asset('assets/js/font-size.js') }}"></script>
@endsection
