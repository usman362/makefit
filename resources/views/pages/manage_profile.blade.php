@extends('layouts.app')
@section('content')
    
<section class="m-profile manage-p">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-lg-10" data-select2-id="20">
                <div class="sign-user_card" data-select2-id="19">
                    <form class="mt-4" id="manage_profile" action="{{URL::to('profile_update',$profile->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row" data-select2-id="18">
                        <div class="col-lg-2">
                            <div class="upload_profile d-inline-block">
                                <img src="{{$profile->profile_img != null ? asset('images/User_profile/'.$profile->profile_img) : asset('images/user/user.jpg')}}" class="profile-pic rounded-circle img-fluid" alt="user">
                                <div class="p-image">
                                    <i class="ri-pencil-line upload-button"></i>
                                    <input class="file-upload" name="profile_img" type="file" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10 device-margin" data-select2-id="17">
                            <div class="profile-from" data-select2-id="16">
                                <h4 class="mb-3">Manage Profile</h4>
                                
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control mb-0" name="name" id="exampleInputl2" placeholder="Enter Your Name" value="{{$profile->name}}" autocomplete="off" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="text" class="form-control date-input basicFlatpickr mb-0 flatpickr-input" name="dob" placeholder="Select Date" value="{{$profile->dob}}" required="" readonly="readonly">
                                    </div>
                                    <div class="form-group d-flex flex-md-row flex-column">
                                        <div class="iq-custom-select d-inline-block manage-gen">
                                            <select name="gender" class="form-control pro-dropdown " tabindex="-1" aria-hidden="true">
                                                <option value="female" {{$profile->gender == 'female' ? 'selected' : ''}}>Female</option>
                                                <option value="male" {{$profile->gender == 'male' ? 'selected' : ''}}>Male</option>
                                            </select>
                                        </div>
                                        <div class="iq-custom-select d-inline-block lang-dropdown manage-dd" >
                                            <select name="language" class="form-control pro-dropdown select2-hidden-accessible" id="lang" multiple=""  tabindex="-1" aria-hidden="true">
                                                <option value="english">English</option>
                                                <option value="hindi" >Hindi</option>
                                                <option value="gujarati" >Gujarati</option>
                                                <option value="bengali" >Bengali</option>
                                                <option value="marathi" >Marathi</option>
                                                <option value="tamil" >Tamil</option>
                                                <option value="spanish" >Spanish</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" onclick="document.getElementById('manage_profile').submit()" class="btn btn-hover">Save</a>
                                        <a href="/" class="btn btn-link">Cancel</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection