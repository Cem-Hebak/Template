@extends('layouts.master')
@section('title') Dashboard @endsection

@section('css')
<link href="{{ URL::asset('assets/plugins/leaflet/leaflet.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/lightpick/lightpick.css') }}" rel="stylesheet" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Dastone @endslot
@slot('li_2') Pages @endslot
@slot('li_3') Profile @endslot
@slot('title') Profile @endslot
@endcomponent

<!-- stay dah mantap -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- <div class="card-body p-0">
                <div id="user_map" class="pro-map" style="height: 220px"></div>
            </div> -->
            <!--end card-body-->
            <div class="card-body">
                <div class="dastone-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="dastone-profile-main">
                                <div class="dastone-profile-main-pic">
                                    <img src="{{ (isset(Auth::user()->avatar) && Auth::user()->avatar != '') ? asset(Auth::user()->avatar) : asset('/assets/images/users/user-1.jpg') }}" alt="" height="110" class="rounded-circle">
                                    <span class="dastone-profile_main-pic-change" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                        <i class="mdi mdi-pencil"></i>
                                    </span>
                                </div>
                                <div class="dastone-profile_user-detail">
                                    <h5 class="dastone-user-name">{{ Auth::user()->name }}</h5>
                                    
                                </div>

                            </div>
                        </div>
                        <!--end col-->

                        
                        <!--end col-->
                        
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end f_profile-->
            </div>

            
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>



<div class="row">
    <div class="col-12">
        
            
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Biodata</h4>
                                <p class="text-muted mb-0">
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                
                                <table class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%;">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="width: 150px;">Date of Birth</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Gender</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Identification Card Number</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Nationality</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Role</th>
                                            <td>{{ Auth::user()->Role }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Class</th>
                                            <td>{{ Auth::user()->Class }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Contact</th>
                                            <td>{{ Auth::user()->mobilenumber }}</td>
                                            
                                        </tr>
                                       
                                        <tr>
                                            <th style="width: 150px;">Email</th>
                                            <td>{{ Auth::user()->email }}</td>
                                            
                                        </tr>
                                       
                                       
                                      
                                    </tbody>
                                </table>

                                

                            </div>
                        </div>
                    </div> <!-- end col -->
            </div>
            
            
            <!--end card-body-->
        </div>
        <!--end card-->

        
            
            <!--end card-body-->
        
    </div>
    <!--end col-->
</div>

<div class="row">
    <div class="col-12">
        
            
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Biodata</h4>
                                <p class="text-muted mb-0">
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                
                                <table class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%;">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="width: 150px;">Date of Birth</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Gender</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Identification Card Number</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Nationality</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Role</th>
                                            <td>{{ Auth::user()->Role }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Class</th>
                                            <td>{{ Auth::user()->Class }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Contact</th>
                                            <td>{{ Auth::user()->mobilenumber }}</td>
                                            
                                        </tr>
                                       
                                        <tr>
                                            <th style="width: 150px;">Email</th>
                                            <td>{{ Auth::user()->email }}</td>
                                            
                                        </tr>
                                       
                                       
                                      
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
            </div>

            
            <!--end card-body-->
        </div>
        <!--end card-->

        
            
            <!--end card-body-->
        
    </div>
    <!--end col-->
</div>




<!-- 
                                        <tr>
                                            <th style="width: 150px;">Father's Name</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                            </tr>
                                        <tr>
                                            <th style="width: 150px;">Father's Contact</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Father's Occupation</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Mother's Name</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Mother's Contact</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Mother's Occupation</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>


                                        <tr>
                                            <th style="width: 150px;">Blood Group</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
                                        <tr>
                                            <th style="width: 150px;">Allergies</th>
                                            <!-- <td>{{ Auth::user()->mobilenumber }}</td> -->
                                            
                                        </tr>
-->

@endsection

@section('script')


<script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#avatarError').text('');
        $('#mobilenumberError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#avatarError').text('');
                $('#mobilenumberError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                //$('#nameError').text(response.responseJSON.errors.name);
                $('#avatarError').text(response.responseJSON.errors.avatar);
                $('#mobilenumberError').text(response.responseJSON.errors.mobilenumber);
            }
        });
    });
</script>

<script src="{{ URL::asset('assets/plugins/leaflet/leaflet.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/lightpick/lightpick.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.profile.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection