@extends('layouts.app')
@section('content')

<div class="video-container iq-main-slider" >
    <video class="video d-block" controls="" loop="" onclick="document.getElementById('post-view{{$movie->id}}').submit()">
        <source src="{{asset('videos/Movies/'.$movie->video)}}" type="video/mp4">
    </video>
</div>

<div class="main-content">
    <section class="movie-detail container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-info season-info g-border">
                    <h4 class="trending-text big-title text-uppercase mt-0">{{$movie->title}}</h4>
                    
                    <p class="trending-dec w-100 mb-0">{{$movie->description}}</p>
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
                            <h4 class="main-title">Latest Movies</h4>
                            <a href="/movie-category" class="text-primary">View all</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($latestmovies as $latestmovie)
                        
                    <div class="col-1-5 col-md-6 iq-mb-30">
                        <div class="epi-box">
                            <div class="epi-img position-relative">
                                <img src="{{asset('images/movies/'.$latestmovie->image)}}" class="img-fluid img-zoom" alt="">
                                <div class="episode-play-info">
                                    <div class="episode-play">
                                        <a href="/movie-single/{{$latestmovie->id}}">
                                            <i class="ri-play-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="epi-desc p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="text-white">{{$latestmovie->created_at->format('Y-m-d')}}</span>
                                    <span class="text-primary">{{$latestmovie->duration}}</span>
                                </div>
                                <a href="/movie-single/{{$latestmovie->id}}">
                                    <h6 class="epi-name text-white mb-0">{{$latestmovie->title}}
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