@extends('layouts.app')
@section('content')
     <!-- Slider Start -->
     <section id="home" class="iq-main-slider p-0">
        <div id="home-slider" class="slider m-0 p-0">
            @foreach (App\MovieBanner::all() as $banner)
                @foreach (App\Movie::where('id',$banner->movie_id)->get() as $movie)
               
            <div class="slide slick-bg s-bg-1" style="background-image: url('/images/Movies/{{$movie->image}}') !important;">
                <div class="container-fluid position-relative h-100">
                    <div class="slider-inner h-100">
                        <div class="row align-items-center  h-100">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <a href="javascript:void(0);">
                                    <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                        <img src="images/MAKEFITTVcopie2.png" class="c-logo" alt="streamit">
                                    </div>
                                </a>
                                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft" data-delay-in="0.6">{{$movie->title}}</h1>

                                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                                    <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                                        <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                            </li>
                                        </ul>
                                        {{-- <span class="text-white ml-2">4.7(lmdb)</span> --}}
                                    </div>
                                    <div class="d-flex align-items-center mt-2 mt-md-3">
                                        <span class="badge badge-secondary p-2">{{$movie->age_restriction}}</span>
                                        {{-- <span class="ml-3">2 Seasons</span> --}}
                                    </div>
                                </div>

                                <!-- <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                               
                              <span class="badge badge-secondary p-2">18+</span>
                              <span class="ml-3">2 Seasons</span>
                           </div> -->
                                <p data-animation-in="fadeInUp" data-delay-in="1.2">{{$movie->description}}.
                                </p>
                                <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                                    {{-- <div class="text-primary title starring">
                                        Starring: <span class="text-body">Karen Gilchrist, James Earl Jones</span>
                                    </div> --}}
                                    <div class="text-primary title genres">
                                        Genres: <span class="text-body">
                                            @foreach (App\Category::where('id',$movie->category)->get() as $item)
                                                {{$item->c_name}}
                                            @endforeach
                                        </span>
                                    </div>
                                    {{-- <div class="text-primary title tag">
                                        Tag: <span class="text-body">Action, Adventure, Horror</span>
                                    </div> --}}
                                </div>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <a href="/movie-single/{{$movie->id}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Play Now</a>
                                    <a href="/movie-category" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>
                        @if ($movie->trailer != null)                            
                        <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                            <a href="{{asset('trailers/Movies/'.$movie->trailer)}}" class="video-open playbtn">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10"
                                 points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                              <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                           </svg>
                                <span class="w-trailor">Watch Trailer</span>
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
               fill="none" stroke="currentColor">
               <circle r="20" cy="22" cx="22" id="test"></circle>
            </symbol>
         </svg>
    </section>
    <!-- Slider End -->
    <!-- MainContent -->
    <div class="main-content">
        <section id="iq-favorites">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Latest Movies</h4>
                            <a class="iq-view-all" href="/movie-category">View All</a>
                        </div>
                        <div class="favorites-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach ($latestMovies as $latestMovie)
                                    
                               
                                <li class="slide-item">

                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="/images/movies/{{$latestMovie->image}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="block-description">
                                            <h6 class="iq-title"><a href="/movie-single/{{$latestMovie->id}}">{{$latestMovie->title}}</a></h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                <div class="badge badge-secondary p-1 mr-2">{{$latestMovie->age_restriction}}</div>
                                                <span class="text-white">{{$latestMovie->duration}}</span>
                                            </div>
                                            <div class="hover-buttons">
                                               <a href="/movie-single/{{$latestMovie->id}}"> <span class="btn btn-hover iq-button">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
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
                                    </a>
                                </li>
                                @endforeach
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="iq-topten">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <!-- <h4 class="main-title iq-title topten-title-sm">Top 10 in India</h4> -->
                        </div>
                        <div class="topten-contens">
                            <h4 class="main-title iq-title topten-title">Top 10 Movies</h4>
                            <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                @foreach ($topMovies as $topMovie)
                                    
                                <li class="slick-bg">
                                    <a href="/movie-single/{{$topMovie->id}}">
                                        <img src="/images/movies/{{$topMovie->image}}" class="img-fluid w-100" alt="">
                                    </a>
                                </li>
                                
                                @endforeach
                            </ul>
                            <div class="vertical_s">
                                <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                                    @foreach ($topMovies as $topMovie)
                                    <li>
                                        <div class="block-images position-relative">
                                            <a href="/movie-single/{{$topMovie->id}}">
                                                <img src="/images/movies/{{$topMovie->image}}" class="img-fluid w-100" alt="">
                                            </a>
                                            <div class="block-description">
                                                <h5>{{$topMovie->title}}</h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">{{$topMovie->age_restriction}}</div>
                                                    <span class="text-white">{{$topMovie->duration}}</span>
                                                </div>
                                                <div class="hover-buttons">
                                                    <a href="/movie-single/{{$topMovie->id}}" class="btn btn-hover" tabindex="0">
                                                        <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="iq-suggestede" class="s-margin">
            <div class="container-fluid">
              
            </div>
        </section>
        @foreach (App\Show::where('show_category','1')->paginate(1) as $show)
           
        <section id="parallex" class="parallax-window" style="background-image: url('/images/Show/{{$show->show_image}}')">
            <div class="container-fluid h-100">
                <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                    <div class="col-lg-4 r-mb-23">
                        <div class="text-left">
                            <a href="javascript:void(0);">
                                {{$show->show_title}}
                            </a>
                            <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                                {{-- <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                    <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o"
                                 aria-hidden="true"></i></a></li>
                                </ul>
                                <span class="text-white ml-3">9.2 (lmdb)</span> --}}
                            </div>
                            <div class="movie-time d-flex align-items-center mb-3">
                                <div class="badge badge-secondary mr-3">{{$show->age_restriction}}</div>
                                {{-- <h6 class="text-white">2h 30m</h6> --}}
                            </div>
                            <p>{{$show->show_description}}...</p>
                            <div class="parallax-buttons">
                                <a href="/episodevideo/{{$show->id}}" class="btn btn-hover">Play Now</a>
                                <a href="/show-category" class="btn btn-link">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="parallax-img">
                            @foreach(App\Episode::where('show_id',$show->id)->paginate(1) as $ep)
                            <a href="/episodevideo/{{$ep->id}}">
                                <img src="images/Show/{{$show->show_image}}" class="img-fluid w-100" alt="bailey">
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
         
        @endforeach
        <section id="iq-trending" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Tv & Web Shows</h4>
                        </div>
                        <div class="trending-contens">
                            <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center">
                                @foreach ($shows as $show)
                                    
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="movie-slick position-relative">
                                            <img src="images/Show/{{$show->show_image}}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </li>

                                @endforeach
                            </ul>
                            <ul id="trending-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                @foreach ($shows as $show)
                                <li>
                                    <div class="tranding-block position-relative" style="background-image: url(images/Show/{{$show->show_image}});">
                                        <div class="trending-custom-tab">
                                           
                                            <div class="trending-content">
                                                <div id="trending-data1" class="overview-tab tab-pane fade active show">
                                                    <div class="trending-info align-items-center w-100 animated fadeInUp">
                                                        <a href="javascript:void(0);" tabindex="0">
                                                            <div class="res-logo">
                                                                <div class="channel-logo">
                                                                    <img src="images/MAKEFITTVcopie2.png" class="c-logo" alt="streamit">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <h1 class="trending-text big-title text-uppercase">{{$show->show_title}}</h1>
                                                        <?php 
                                                        $season = App\Episode::where('show_id',$show->id)->orderBy('season','desc')->first();
                                                        ?>
                                                        <div class="d-flex align-items-center text-white text-detail">
                                                            <span class="badge badge-secondary p-3">{{$show->age_restriction}}</span>
                                                            <span class="ml-3">{{$season->season}} Seasons</span>
                                                            <span class="trending-year">{{$show->date}}</span>
                                                        </div>
                                                      
                                                        <p class="trending-dec">{{$show->description}}
                                                        </p>
                                                        <div class="p-btns">
                                                            <div class="d-flex align-items-center p-0">
                                                                <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                              
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                             
                                            </div>
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
        <section id="iq-tvthrillers" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Recommended For You</h4>
                            <a class="iq-view-all" href="movie-category.html">View All</a>
                        </div>
                        <div class="tvthrillers-contens">
                            <ul class="favorites-slider list-inline row p-0 mb-0">
                                <li class="slide-item">

                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="images/tvthrillers/01.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="block-description">
                                            <h6 class="iq-title"><a href="show-details.html">Day of Darkness</a></h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                <div class="badge badge-secondary p-1 mr-2">15+</div>
                                                <span class="text-white">2 Seasons</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
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
                                                <li><span><i class="ri-heart-fill"></i></span>
                                                    <span class="count-box">19+</span></li>
                                                <li><span><i class="ri-add-line"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li class="slide-item">

                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="images/tvthrillers/02.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="block-description">
                                            <h6 class="iq-title"><a href="show-details.html">My True Friends</a></h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                <div class="badge badge-secondary p-1 mr-2">7+</div>
                                                <span class="text-white">2 Seasons</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
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
                                                <li><span><i class="ri-heart-fill"></i></span>
                                                    <span class="count-box">19+</span></li>
                                                <li><span><i class="ri-add-line"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li class="slide-item">

                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="images/tvthrillers/03.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="block-description">
                                            <h6 class="iq-title"><a href="show-details.html">Arrival 1999</a></h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                <div class="badge badge-secondary p-1 mr-2">11+</div>
                                                <span class="text-white">3 Seasons</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
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
                                                <li><span><i class="ri-heart-fill"></i></span>
                                                    <span class="count-box">19+</span></li>
                                                <li><span><i class="ri-add-line"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li class="slide-item">

                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="images/tvthrillers/04.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="block-description">
                                            <h6 class="iq-title"><a href="show-details.html">Night Mare</a></h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                <div class="badge badge-secondary p-1 mr-2">18+</div>
                                                <span class="text-white">3 Seasons</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
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
                                                <li><span><i class="ri-heart-fill"></i></span>
                                                    <span class="count-box">19+</span></li>
                                                <li><span><i class="ri-add-line"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li class="slide-item">

                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="images/tvthrillers/05.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="block-description">
                                            <h6 class="iq-title"><a href="show-details.html">The Marshal King</a></h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                <div class="badge badge-secondary p-1 mr-2">17+</div>
                                                <span class="text-white">1 Season</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
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
                                                <li><span><i class="ri-heart-fill"></i></span>
                                                    <span class="count-box">19+</span></li>
                                                <li><span><i class="ri-add-line"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
