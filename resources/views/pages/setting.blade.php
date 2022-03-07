@extends('layouts.app')
@section('content')
    
<section class="m-profile setting-wrapper">
    <div class="container">
        <h4 class="main-title mb-4">Account Setting</h4>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="sign-user_card text-center">
                    <img src="images/user/user.jpg" class="rounded-circle img-fluid d-block mx-auto mb-3" alt="user">
                    <h4 class="mb-3">John Doe</h4>
                   
                    <a href="#" class="edit-icon text-primary">Edit</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="sign-user_card">
                    <h5 class="mb-3 pb-3 a-border">Personal Details</h5>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Email</span>
                            <p class="mb-0">example@gmail.com</p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            <a href="#" class="text-primary">Change</a>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Password</span>
                            <p class="mb-0">**********</p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            <a href="#" class="text-primary">Change</a>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Date of Birth</span>
                            <p class="mb-0">08-03-1995</p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            <a href="#" class="text-primary">Change</a>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Language</span>
                            <p class="mb-0">English</p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            <a href="#" class="text-primary">Change</a>
                        </div>
                    </div>
                    <h5 class="mb-3 mt-4 pb-3 a-border">Billing Details</h5>
                    <div class="row justify-content-between mb-3">
                        <div class="col-md-8 r-mb-15">
                            <p>Your next billing date is 19 September 2020.</p>
                            <a href="#" class="btn btn-hover">Cancel Membership</a>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            <a href="#" class="text-primary">Update Payment info</a>
                        </div>
                    </div>
                    <h5 class="mb-3 mt-4 pb-3 a-border">Plan Details</h5>
                    <div class="row justify-content-between mb-3">
                        <div class="col-md-8">
                            <p>Premium</p>
                        </div>
                        <div class="col-md-4 text-md-right text-left">
                            <a href="pricing-plan.html" class="text-primary">Change Plan</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection