@extends('layouts.app')
@section('content')

<div class="video-container iq-main-slider">
    <video class="video d-block" controls="" loop="">
        <source src="{{asset('videos/Episode/'.$episode->video)}}" type="video/mp4">
    </video>
</div>


<div class="main-content">
    <section class="movie-detail container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-info season-info g-border">
                    <h4 class="trending-text big-title text-uppercase mt-0">@foreach(App\Show::where('id',$episode->show_id)->get() as $show){{$show->show_title}} @endforeach</h4>
                    <div class="d-flex align-items-center text-white text-detail episode-name mb-0">
                        <span>S{{$episode->season}}E{{$episode->ep_no}}</span>
                        <span class="trending-year">{{$episode->ep_name}}</span>
                    </div>
                    <p class="trending-dec w-100 mb-0">{{$episode->description}}</p>
                    <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                        <li><span><i class="ri-add-line"></i></span></li>
                        <li><span><i class="ri-heart-fill"></i></span></li>
                        <li class="share">
                            <span><i class="ri-share-fill"></i></span>
                            <div class="share-box">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                    <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                    <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-favorites">
        <div class="container-fluid">
            <div class="block-space">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Episodes</h4>
                            <a href="show-single.html" class="text-primary">View all</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach (App\Episode::where('show_id',$episode->show_id)->where('id','!=',$episode->id)->get() as $episode)
                        
                   
                    <div class="col-1-5 col-md-6 iq-mb-30">
                        <div class="epi-box">
                            <div class="epi-img position-relative">
                                <img src="{{asset('images/Episode/'.$episode->ep_image)}}" class="img-fluid img-zoom" alt="">
                                <div class="episode-play-info">
                                    <div class="episode-play">
                                        <a href="">
                                            <i class="ri-play-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="epi-desc p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="text-white">{{$episode->date}}</span>
                                    <span class="text-primary">{{$episode->r_time_minute}}</span>
                                </div>
                                <a href="show-details.html">
                                    <h6 class="epi-name text-white mb-0">{{$episode->description}}
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@endsection