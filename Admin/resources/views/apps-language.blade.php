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
        @slot('li_3') {{ __('messages.language') }} @endslot
        @slot('title') {{ __('messages.language') }} @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body invoice-head">
                    <div class="row">
                        <p><strong class="font-40">{{ __('messages.language') }}</strong></p>
                    </div><!--end row-->
                </div><!--end card-body-->
                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="text-start">{{ __('messages.account_language') }}</h3>
                            <h6 class="text-start" style="color: #adb5bd;">{{ __('messages.account_detail') }}</h6>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter6">
                            {{ __('messages.view') }}
                            </button>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">{{ __('messages.language') }}</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5>{{ __('messages.language') }}</h5>
                                            <p>{{ __('messages.select_language') }}</p>
                                            <select id="languageSelector" class="form-select mt-3">
                                            <option value="en" {{ App::getLocale() === 'en' ? 'selected' : '' }}>English</option>
                                            <option value="ms" {{ App::getLocale() === 'ms' ? 'selected' : '' }}>Bahasa Melayu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-soft-primary btn-sm" onclick="saveLanguage()" data-bs-dismiss="modal">{{ __('messages.save_changes') }}</button>
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
                            <div class="text-center"><small class="font-12"></small>{{ __('messages.thank_you') }}</div>
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
    <script>
    function saveLanguage() {
        // Get selected language from the dropdown
        const selectedLang = document.getElementById('languageSelector').value;
        // Redirect to the language switch route
        window.location.href = "{{ url('/switch-language') }}/" + selectedLang;
    }
    </script>
    <script src="{{ asset('assets/js/font-size.js') }}"></script>
@endsection
