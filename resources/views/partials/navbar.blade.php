<!-- Header -->
<header id="main-header">
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>
                        <a class="navbar-brand" href="/"> <img class="img-fluid logo" src="{{asset('/images/MAKEFITTVlogoBLUE petit.png')}}" alt="streamit" /> </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/movie-category">Movies</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/show-category">Tv Shows</a>
                                    </li>
                                    <!-- <li class="menu-item">
                                    <a href="movie-category.html">Blog</a>
                                 </li> -->
                                    <li class="menu-item">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about-us">About Us</a></li>
                                            <li class="menu-item "><a href="contact">Contact</a></li>
                                            <li class="menu-item"><a href="faq">FAQ</a></li>
                                            <li class="menu-item"><a href="privacy-policy">Privacy-Policy</a></li>
                                            <li class="menu-item"><a href="pricing-plan">Pricing</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                <div class="navbar-right position-relative">
                                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                        <li>
                                            <a href="#" class="search-toggle">
                                                <i class="ri-search-line"></i>
                                            </a>
                                            <div class="search-box iq-search-bar">
                                                <form action="{{URL::to('search-result')}}" method="Get" class="searchbox">
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="text search-input font-size-12" name="search" placeholder="type here to search...">
                                                        <i class="search-link ri-search-line"></i>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="nav-item nav-icon">
                                            <a href="#" class="search-toggle position-relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" class="noti-svg">
                                             <path fill="none" d="M0 0h24v24H0z" />
                                             <path
                                                d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                          </svg>
                                                <span class="iq-primary dots" style="color: "></span>
                                            </a>
                                            <div class="iq-sub-dropdown">
                                                <div class="iq-card shadow-none m-0">
                                                    <div class="iq-card-body">
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <img src="{{asset('images/notify/thumb-1.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                                <div class="media-body">
                                                                    <h6 class="mb-0 ">Boop Bitty</h6>
                                                                    <small class="font-size-12"> just now</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <img src="{{asset('images/notify/thumb-2.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                                <div class="media-body">
                                                                    <h6 class="mb-0 ">The Last Breath</h6>
                                                                    <small class="font-size-12">15 minutes ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <img src="{{asset('images/notify/thumb-3.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                                <div class="media-body">
                                                                    <h6 class="mb-0 ">The Hero Camp</h6>
                                                                    <small class="font-size-12">1 hour ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                                <img src="{{Auth::User()->profile_img != null ? asset('/images/User_profile/'.Auth::User()->profile_img) : asset('/images/user/user.jpg')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                                            </a>
                                            <div class="iq-sub-dropdown iq-user-dropdown">
                                                <div class="iq-card shadow-none m-0">
                                                    <div class="iq-card-body p-0 pl-3 pr-3">
                                                        <a href="/manage_profile" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-file-user-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Manage Profile</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="/setting" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-settings-4-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Settings</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="/pricing-plan" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-settings-4-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Pricing Plan</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-logout-circle-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Logout</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0">
                                <li class="nav-item nav-icon">
                                    <a href="#" class="search-toggle device-search">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="search-box iq-search-bar d-search">
                                        <form action="{{URL::to('search-result')}}" method="Get" class="searchbox">
                                            <div class="form-group position-relative">
                                                <input type="text" class="text search-input font-size-12" name="search" placeholder="type here to search...">
                                                <i class="search-link ri-search-line"></i>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon">
                                    <a href="#" class="search-toggle" data-toggle="search-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" class="noti-svg">
                                       <path fill="none" d="M0 0h24v24H0z" />
                                       <path
                                          d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                    </svg>
                                        <span class="iq-primary dots"></span>
                                    </a>
                                    <div class="iq-sub-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <img src="{{asset('images/notify/thumb-1.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                        <div class="media-body">
                                                            <h6 class="mb-0 ">Boot Bitty</h6>
                                                            <small class="font-size-12"> just now</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <img src="{{asset('images/notify/thumb-2.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                        <div class="media-body">
                                                            <h6 class="mb-0 ">The Last Breath</h6>
                                                            <small class="font-size-12">15 minutes ago</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <img src="{{asset('images/notify/thumb-3.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                        <div class="media-body">
                                                            <h6 class="mb-0 ">The Hero Camp</h6>
                                                            <small class="font-size-12">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon">
                                    <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center" data-toggle="search-toggle">
                                        <img src="{{Auth::User()->profile_img != null ? asset('/images/User_profile/'.Auth::User()->profile_img) : asset('/images/user/user.jpg')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0 pl-3 pr-3">
                                                @if (Auth::User()->role != '3')
                                               
                                                <a href="/index" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-file-user-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="my-0 ">Dashboard</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endif
                                                <a href="/manage_profile" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-file-user-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="my-0 ">Manage Profile</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/setting" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-settings-4-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="my-0 ">Settings</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/pricing-plan" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-settings-4-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="my-0 ">Pricing Plan</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-logout-circle-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Logout</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                        </div>
                        </li>
                        </ul>
                </div>
                </nav>
                <div class="nav-overlay"></div>
            </div>
        </div>
    </div>
    </div>
</header>
<!-- Header End -->