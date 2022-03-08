@extends('layouts.app')
@section('content')
<div class="iq-breadcrumb-one  iq-bg-over iq-over-dark-50" style="background-image: url({{asset('images/about-us/01.jpg')}});">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h2 class="title">Pricing Plan</h2>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pricing Plan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">

                <div class="iq-pricing-card">
                    <div class="table-responsive iq-pricing pt-2">
                        <table id="my-table" class="table" data-active="premium">
                            <thead>
                                <tr>
                                    <th class="text-center iq-price-head">
                                    </th>
                                    <th class="text-center iq-price-head free">
                                        <div class="iq-price-box">
                                            <h3 class="iq-price-rate text-white">€19<small> / Month</small></h3>
                                            <span class="type">Basic</span>
                                        </div>
                                    </th>
                                    <th class="text-center iq-price-head premium">
                                        <div class="iq-price-box active">
                                            <h3 class="iq-price-rate text-white">€29<small> / Month</small></h3>
                                            <span class="type">Recommend</span>
                                        </div>
                                    </th>
                                    <th class="text-center iq-price-head basic">
                                        <div class="iq-price-box">
                                            <h3 class="iq-price-rate text-white">€49<small> / Month</small></h3>
                                            <span class="type">Premium</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" scope="row"> Sports Category</th>
                                    <td class="text-center iq-child-cell">
                                        1
                                    </td>
                                    <td class="text-center iq-child-cell active">
                                       1
                                    </td>
                                    <td class="text-center iq-child-cell">
                                        Unlimited
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">Sports Videos</th>
                                    <td class="text-center iq-child-cell">
                                        3
                                    </td>
                                    <td class="text-center iq-child-cell active">
                                        10
                                    </td>
                                    <td class="text-center iq-child-cell">
                                        Unlimited
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row"> Monthly Live</th>
                                    <td class="text-center iq-child-cell">
                                       1
                                    </td>
                                    <td class="text-center iq-child-cell active">
                                        10
                                    </td>
                                    <td class="text-center iq-child-cell">
                                        Unlimited
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">Monthly Challenge</th>
                                    <td class="text-center iq-child-cell">
                                        0
                                    </td>
                                    <td class="text-center iq-child-cell active">
                                       3
                                    </td>
                                    <td class="text-center iq-child-cell">
                                        Unlimited
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row"> Per View</th>
                                    <td class="text-center iq-child-cell">
                                        0.001€ <br>(0.01€ for New Subscriber)
                                    </td>
                                    <td class="text-center iq-child-cell active">
                                        0.005€ <br>(0.05€ for New Subscriber)
                                    </td>
                                    <td class="text-center iq-child-cell">
                                        0.01€ <br>(0.10€ for New Subscriber)
                                    </td>
                                </tr>
                              
                                <tr>
                                    <th class="text-center iq-price-footer"></th>
                                    <td class="text-center iq-price-footer">
                                        <div class="align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.3">
                                            <a href="sign-up.html" class="btn btn-hover iq-button">Subscribe</a>
                                        </div>
                                    </td>
                                    <td class="text-center iq-price-footer active">
                                        <div class="align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.3">
                                            <a href="sign-up.html" class="btn btn-hover iq-button">Subscribe</a>
                                        </div>
                                    </td>
                                    <td class="text-center iq-price-footer">
                                        <div class="align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.3">
                                            <a href="sign-up.html" class="btn btn-hover iq-button">Subscribe</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection