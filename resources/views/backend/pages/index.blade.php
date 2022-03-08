@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-8">
             <div class="row">
                <div class="col-sm-6 col-lg-6 col-xl-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body">
                         <div class="d-flex align-items-center justify-content-between">
                            <div class="iq-cart-text text-capitalize">
                               <p class="mb-0">
                                  view
                               </p>
                            </div>
                            <div class="icon iq-icon-box-top rounded-circle bg-primary">
                               <i class="las la-eye"></i>
                            </div>
                         </div>
                         <div class="d-flex align-items-center justify-content-between mt-3">
                            <h4 class=" mb-0">+{{$total_views}}</h4>
                        
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body">
                         <div class="d-flex align-items-center justify-content-between">
                            <div class="iq-cart-text text-capitalize">
                               <p class="mb-0 font-size-14">
                                  Rated This App
                               </p>
                            </div>
                            <div class="icon iq-icon-box-top rounded-circle bg-warning">
                               <i class="lar la-star"></i>
                            </div>
                         </div>
                         <div class="d-flex align-items-center justify-content-between mt-3">
                            <h4 class=" mb-0">+55K</h4>
                          
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body">
                         <div class="d-flex align-items-center justify-content-between">
                            <div class="iq-cart-text text-capitalize">
                               <p class="mb-0 font-size-14">
                                  Downloaded
                               </p>
                            </div>
                            <div class="icon iq-icon-box-top rounded-circle bg-info">
                               <i class="las la-download"></i>
                            </div>
                         </div>
                         <div class="d-flex align-items-center justify-content-between mt-3">
                            <h4 class=" mb-0">+1M</h4>
                          
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body">
                         <div class="d-flex align-items-center justify-content-between">
                            <div class="iq-cart-text text-uppercase">
                               <p class="mb-0 font-size-14">
                                  Visitors
                               </p>
                            </div>
                            <div class="icon iq-icon-box-top rounded-circle bg-success">
                               <i class="lar la-user"></i>
                            </div>
                         </div>
                         <div class="d-flex align-items-center justify-content-between mt-3">
                            <h4 class=" mb-0">+2M</h4>
                            
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
                   <div class="iq-header-title">
                      <h4 class="card-title">Top Rated Item </h4>
                   </div>
                   <div id="top-rated-item-slick-arrow" class="slick-aerrow-block"></div>
                </div>
                <div class="iq-card-body">
                   <ul class="list-unstyled row top-rated-item mb-0">
                      <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                         <div class="iq-card mb-0">
                            <div class="iq-card-body p-0">
                               <div class="iq-thumb">
                                  <a href="javascript:void(0)">
                                     <img src="../assets/images/dashboard/01.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                  </a>
                               </div>
                               <div class="iq-feature-list">
                                  <h6 class="font-weight-600 mb-0">The Last Breath</h6>
                                  <p class="mb-0 mt-2">T.v show</p>
                                  <div class="d-flex align-items-center my-2">
                                     <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 134</p>
                                     <p class="mb-0 "><i class="las la-download ml-2"></i> 30 k</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                         <div class="iq-card mb-0">
                            <div class="iq-card-body p-0">
                               <div class="iq-thumb">
                                  <a href="javascript:void(0)">
                                     <img src="../assets/images/dashboard/02.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                  </a>
                               </div>
                               <div class="iq-feature-list">
                                  <h6 class="font-weight-600 mb-0">Last Night</h6>
                                  <p class="mb-0 mt-2">Movie</p>
                                  <div class="d-flex align-items-center my-2">
                                     <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 133</p>
                                     <p class="mb-0 "><i class="las la-download ml-2"></i> 20 k</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                         <div class="iq-card mb-0">
                            <div class="iq-card-body p-0">
                               <div class="iq-thumb">
                                  <a href="javascript:void(0)">
                                     <img src="../assets/images/dashboard/03.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                  </a>
                               </div>
                               <div class="iq-feature-list">
                                  <h6 class="font-weight-600 mb-0">Jeon Woochie</h6>
                                  <p class="mb-0 mt-2">Movie</p>
                                  <div class="d-flex align-items-center my-2">
                                     <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 222</p>
                                     <p class="mb-0 "><i class="las la-download ml-2"></i> 40 k</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                         <div class="iq-card mb-0">
                            <div class="iq-card-body p-0">
                               <div class="iq-thumb">
                                  <a href="javascript:void(0)">
                                     <img src="../assets/images/dashboard/04.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                  </a>
                               </div>
                               <div class="iq-feature-list">
                                  <h6 class="font-weight-600 mb-0">Dino Land</h6>
                                  <p class="mb-0 mt-2">T.v show</p>
                                  <div class="d-flex align-items-center my-2">
                                     <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 122</p>
                                     <p class="mb-0 "><i class="las la-download ml-2"></i> 25 k</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                         <div class="iq-card mb-0">
                            <div class="iq-card-body p-0">
                               <div class="iq-thumb">
                                  <a href="javascript:void(0)">
                                     <img src="../assets/images/dashboard/05.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                  </a>
                               </div>
                               <div class="iq-feature-list">
                                  <h6 class="font-weight-600 mb-0">Last Race</h6>
                                  <p class="mb-0 mt-2">T.v show</p>
                                  <div class="d-flex align-items-center my-2">
                                     <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 144</p>
                                     <p class="mb-0 "><i class="las la-download ml-2"></i> 35 k</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                         <div class="iq-card mb-0">
                            <div class="iq-card-body p-0">
                               <div class="iq-thumb">
                                  <a href="javascript:void(0)">
                                     <img src="../assets/images/dashboard/06.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                  </a>
                               </div>
                               <div class="iq-feature-list">
                                  <h6 class="font-weight-600 mb-0">Opend Dead Shot</h6>
                                  <p class="mb-0 mt-2">T.v show</p>
                                  <div class="d-flex align-items-center my-2">
                                     <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 134</p>
                                     <p class="mb-0 "><i class="las la-download ml-2"></i> 30 k</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="iq-card iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header">
                   <div class="iq-header-title">
                      <h4 class="card-title text-center">User's Of Product</h4>
                   </div>
                </div>
                <div class="iq-card-body pb-0">
                   <div id="view-chart-01">
                   </div>
                   <div class="row mt-1">
                      <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                         <div class="iq-card">
                            <div class="iq-card-body">
                               <div class="media align-items-center">
                                  <div class="iq-user-box bg-primary"></div>
                                  <div class="media-body text-white">
                                     <p class="mb-0 font-size-14 line-height">New <br>
                                        Customer
                                     </p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                         <div class="iq-card">
                            <div class="iq-card-body">
                               <div class="media align-items-center">
                                  <div class="iq-user-box bg-warning"></div>
                                  <div class="media-body text-white">
                                     <p class="mb-0 font-size-14 line-height">Exsisting <br>
                                        Subscriber's
                                     </p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                         <div class="iq-card">
                            <div class="iq-card-body">
                               <div class="media align-items-center">
                                  <div class="iq-user-box bg-info"></div>
                                  <div class="media-body text-white">
                                     <p class="mb-0 font-size-14 line-height">Daily<br>
                                        Visitor's
                                     </p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-3 col-lg-6 iq-user-list">
                         <div class="iq-card">
                            <div class="iq-card-body">
                               <div class="media align-items-center">
                                  <div class="iq-user-box bg-danger"></div>
                                  <div class="media-body text-white">
                                     <p class="mb-0 font-size-14 line-height">Extented <br>
                                        Subscriber's
                                     </p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-sm-12  col-lg-4">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex align-items-center justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Categories</h4>
                   </div>
                </div>
                <div class="iq-card-body p-0">
                   <div id="view-chart-03"></div>
                </div>
             </div>
          </div>
          <div class="col-lg-8">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex align-items-center justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Top Category</h4>
                   </div>
                </div>
                <div class="iq-card-body row align-items-center">
                   <div class="col-lg-12">
                      <div class="row list-unstyled mb-0 pb-0">
                         <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                               <span class="bg-primary" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 100%;"></span>
                            </div>
                            <div class="media align-items-center">
                               <div class="iq-icon-box-view rounded mr-3 iq-bg-primary"><i class="las la-film font-size-32"></i></div>
                               <div class="media-body text-white">
                                  <h6 class="mb-0 font-size-14 line-height">Actions</h6>
                                  
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-secondary">
                               <span class="bg-secondary" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 100%;"></span>
                            </div>
                            <div class="media align-items-center">
                               <div class="iq-icon-box-view rounded mr-3 iq-bg-secondary"><i class="las la-laugh-squint font-size-32"></i></div>
                               <div class="media-body text-white">
                                  <p class="mb-0 font-size-14 line-height">Comedy</p>
                                  
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-info">
                               <span class="bg-info" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 100%;"></span>
                            </div>
                            <div class="media align-items-center">
                               <div class="iq-icon-box-view rounded mr-3 iq-bg-info"><i class="las la-skull-crossbones font-size-32"></i></div>
                               <div class="media-body text-white">
                                  <p class="mb-0 font-size-14 line-height">Horror</p>
                                  
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                               <span class="bg-warning" data-percent="100" style="transition: height 2s ease 0s; width: 40%; height: 100%;"></span>
                            </div>
                            <div class="media align-items-center">
                               <div class="iq-icon-box-view rounded mr-3 iq-bg-warning"><i class="las la-theater-masks font-size-32"></i></div>
                               <div class="media-body text-white">
                                  <p class="mb-0 font-size-14 line-height">Drama</p>
                                  
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-6 mb-lg-0 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-success">
                               <span class="bg-success" data-percent="100" style="transition: height 2s ease 0s; width: 60%; height: 100%;"></span>
                            </div>
                            <div class="media align-items-center mb-lg-0 mb-3">
                               <div class="iq-icon-box-view rounded mr-3 iq-bg-success"><i class="las la-child font-size-32"></i></div>
                               <div class="media-body text-white">
                                  <p class="mb-0 font-size-14 line-height">Kids</p>
                                  
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-6  mb-lg-0 mb-3">
                            <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                               <span class="bg-danger" data-percent="100" style="transition: height 2s ease 0s; width: 80%; height: 100%;"></span>
                            </div>
                            <div class="media align-items-center">
                               <div class="iq-icon-box-view rounded mr-3 iq-bg-danger"><i class="las la-grin-beam font-size-32"></i></div>
                               <div class="media-body text-white">
                                  <p class="mb-0 font-size-14 line-height">Thrilled</p>
                                  
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   
                </div>
             </div>
          </div>
          <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Recently Viewd Items</h4>
                   </div>
                 
                </div>
                <div class="iq-card-body">
                   <div class="table-responsive">
                      <table class="data-tables table movie_table" style="width:100%">
                         <thead>
                            <tr>
                               <th style="width:20%;">Movie</th>
                               <th style="width:10%;">Rating</th>
                               <th style="width:20%;">Category</th>
                               <th style="width:10%;">Download/Views</th>
                               
                               <th style="width:20%;">Date</th>
                            </tr>
                         </thead>
                         <tbody>
                            
                           @foreach ($movies as $movie)
                           <tr>
                               <td>
                                  <div class="media align-items-center">
                                     <div class="iq-movie">
                                        <a href="javascript:void(0);"><img src="{{asset('images/movies/'.$movie->image)}}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                     </div>
                                     <div class="media-body text-white text-left ml-3">
                                        <p class="mb-0">{{$movie->title}}</p>
                                        <small>{{$movie->duration}}</small>
                                     </div>
                                  </div>
                               </td>
                               <td><i class="lar la-star mr-2"></i> 9.2</td>
                               <td>{{$category = App\Category::find($movie->category)->c_name}}</td>
                               <td>
                                  <i class="lar la-eye "></i>
                               </td>
                               
                               <td>{{$movie->created_at->format('Y-m-d')}}</td>
                            </tr>
                               
                            @endforeach
                           
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection