@extends('layouts.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') SeKad @endslot
            @slot('li_2') Dashboard @endslot
            @slot('title') Home @endslot
        @endcomponent

        <!-- Middle Box with any important messages -->
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Announcement</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        This Month<i class="las la-angle-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="">
                            <div><b>Any Announcement will Appear Here</b></div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="row mt-3"> <!-- Add some spacing with mt-3 -->
                <!-- First Clickable Box -->
                <div class="col-md-6">
                    <a href="https://link-to-page1.com" target="_blank"> <!-- Link to the first page -->
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Box 1 Title</h5>
                                <p class="card-text">Description for Box 1.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Second Clickable Box -->
                <div class="col-md-6">
                    <a href="https://link-to-page2.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Box 2 Title</h5>
                                <p class="card-text">Description for Box 2.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Third Clickable Box -->
                <div class="col-md-6">
                    <a href="https://link-to-page3.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Box 3 Title</h5>
                                <p class="card-text">Description for Box 3.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Fourth Clickable Box -->
                <div class="col-md-6">
                    <a href="https://link-to-page4.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Box 4 Title</h5>
                                <p class="card-text">Description for Box 4.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div> 
        <!-- Atas ni untuk halang dari rightbar tu tukar tempat -->

            <div class="col-lg-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="media">
                                    <img src="{{ URL::asset('assets/images/money-beg.png') }}" alt="" class="align-self-center" height="40">
                                    <div class="media-body align-self-center ms-3">
                                        <h6 class="m-0 font-20">X/366</h6>
                                        <p>Attendance</p>
                                        
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                    <div class="row">
                        <div class="col-12">
                            
                        </div><!--end col-->
                    </div>
                </div> <!--end card-->
                <!-- Analytics -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Attendance</h4>
                            </div><!--end col-->
                            
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="text-center">
                            <div id="ana_device" class="apex-charts"></div>
                            <h6 class="bg-light-alt py-3 px-2 mb-0">
                                <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                2025 Session
                            </h6>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!-- end col-->
        </div>

        
@endsection
@section('script')
        <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/jquery.sales_dashboard.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
