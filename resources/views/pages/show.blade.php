@extends('layouts.app')
@section('content')
<section class="iq-main-slider p-0">
    <div id="tvshows-slider">
        @foreach (App\ShowBanner::all() as $sbanner)
            @foreach (App\Show::where('id',$sbanner->show_id)->get() as $show)
                
        <div>
            <a href="/show-single/{{$show->id}}">
                <div class="shows-img">
                    <img src="images/Banner/{{$show->show_banner}}" class="w-100" alt="">
                    <div class="shows-content">
                        <h4 class="text-white mb-1">{{$show->show_title}}</h4>
                        <div class="movie-time d-flex align-items-center">
                            <div class="badge badge-secondary p-1 mr-2">{{$show->age_restriction}}</div>
                            <span class="text-white"></span>
                         </div>
                    </div>
                </div>
            </a>
        </div>

        @endforeach
        @endforeach
    </div>
  
</section>
<!-- Slider End -->
<!-- MainContent -->
<div class="main-content">
    <section id="iq-favorites">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Recommend Shows</h4>
                    </div>
                    <div class="favorites-contens">
                        <ul class="favorites-slider list-inline  row p-0 mb-0">
                            @foreach ($shows as $show)
                                

                            <li class="slide-item">
                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="/images/Show/{{$show->show_image}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="/show-single/{{$show->id}}">{{$show->show_title}}</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <div class="badge badge-secondary p-1 mr-2">{{$show->age_restriction}}</div>
                                           
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="/show-single/{{$show->id}}"><span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now
                                            </span></a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection