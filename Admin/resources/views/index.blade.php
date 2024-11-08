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
                    
                        <!-- Bootstrap Carousel -->
                        <div id="announcementCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- First Slide -->
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Announcement Image 1">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Announcement 1</h5>
                                        <p>Details about Announcement 1.</p>
                                    </div>
                                </div>

                                <!-- Second Slide -->
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Announcement Image 2">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Announcement 2</h5>
                                        <p>Details about Announcement 2.</p>
                                    </div>
                                </div>

                                <!-- Third Slide -->
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Announcement Image 3">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Announcement 3</h5>
                                        <p>Details about Announcement 3.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#announcementCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div><!-- End Carousel -->
                    </div>       
                    
                </div><!--end card-->
                <div class="row mt-3"> <!-- Add some spacing with mt-3 -->
                <!-- First Clickable Box -->
                 <div><b>Suggested items for you</b></div>
                <div class="col-md-3">
                    <a href="https://link-to-page1.com" target="_blank"> <!-- Link to the first page -->
                        <div class="card">
                            <div class="card-body text-left">
                                <h5 class="card-title"></i>Profile</h5>
                                <p class="card-text">View or Edit your Credentials</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Second Clickable Box -->
                <div class="col-md-3">
                    <a href="https://link-to-page2.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-left">
                                <h5 class="card-title">Class Registration</h5>
                                <p class="card-text">Register your class here!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Third Clickable Box -->
                <div class="col-md-3">
                    <a href="https://link-to-page3.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-left">
                                <h5 class="card-title">Facility Management</h5>
                                <p class="card-text">Book any Facilities here!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://link-to-page7.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-left">
                                <h5 class="card-title">Settings</h5>
                                <p class="card-text">Website settings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Fourth Clickable Box -->
                <div class="col-md-6">
                    <a href="https://link-to-page4.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-left">
                                <h5 class="card-title">Student Support Services</h5>
                                <p class="card-text">Book with a Counsellor here!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Fifth Clickable Box -->
                <div class="col-md-6">
                    <a href="https://link-to-page5.com" target="_blank"> <!-- Link to the second page -->
                        <div class="card">
                            <div class="card-body text-left">
                                <h5 class="card-title">Attendance and Absence Management</h5>
                                <p class="card-text">Any problem with your attendance can be solved here!</p>
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
