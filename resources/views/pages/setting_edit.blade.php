@extends('layouts.app')
@section('content')
    
<section class="m-profile setting-wrapper">
    <div class="container">
        <h4 class="main-title mb-4">Account Setting</h4>
        <div class="row">
            <form action="{{URL::to('/setting-update')}}" method="post" enctype="multipart/form-data" id="update-profile">@csrf
            <div class="col-lg-4 mb-3">
                <div class="sign-user_card text-center">
                    <img src="{{Auth::User()->profile_img != null ? asset('images/User_profile/'.Auth::User()->profile_img) : asset('images/user/user.jpg')}}" class="rounded-circle img-fluid d-block mx-auto mb-3" alt="user">
                    <input type="file" name="profile_img">
                   <input type="text" name="name" value="{{Auth::User()->name}}">
                   
                  
                </div>
            </div>
            <div class="col-lg-8">
                <div class="sign-user_card">
                    <h5 class="mb-3 pb-3 a-border">Personal Details</h5>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Email</span>
                            <p class="mb-0"><input type="email" name="email" value="{{Auth::User()->email}}"></p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Password</span>
                            <p class="mb-0"><input type="password" name="password" > </p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Date of Birth</span>
                            <p class="mb-0"><input type="text" name="dob" value="{{Auth::User()->dob}}"></p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Language</span>
                            <p class="mb-0"><input type="text" name="lang" value="{{Auth::User()->lang}}"></p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            
                        </div>
                    </div>
                 
                </div>
                <a href="#" class="btn mt-2 btn-hover" onclick="document.getElementById('update-profile').submit()">Update Profile</a>
            </div>
        </form>
        </div>
    </div>
</section>

@endsection