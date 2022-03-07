@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Add Episode</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form action="{{URL::to('episode',$episode->id)}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                      <div class="row">
                         <div class="col-lg-7">
                            <div class="row">
                               <div class="col-md-6 form-group">
                                  <select class="form-control" id="exampleFormControlSelect5" name="season" required>
                                     <option disabled="">Seasons</option>
                                     <option>Select Season</option>
                                     <option value="1" {{'1' == $episode->season ? 'selected' : ''}}>Season 1</option>
                                     <option value="2" {{'2' == $episode->season ? 'selected' : ''}}>Season 2</option>
                                     <option value="3" {{'3' == $episode->season ? 'selected' : ''}}>Season 3</option>
                                     <option value="4" {{'4' == $episode->season ? 'selected' : ''}}>Season 4</option>
                                     <option value="5" {{'5' == $episode->season ? 'selected' : ''}}>Season 5</option>
                                  </select>
                               </div>
                               <div class="col-md-6 form-group">
                                 <select class="form-control" id="exampleFormControlSelect5" name="show_id" required>
                                    <option disabled="">Shows</option>
                                    <option>Select Show</option>
                                    @foreach ($shows as $show)
                                        <option value="{{$show->id}}" 
                                            {{$show->id == $episode->show_id ? 'selected' : ''}}
                                            >{{$show->show_title}}</option>
                                    @endforeach
                                 </select>
                              </div>
                               <div class="col-md-6 form-group">
                                  <input type="number" class="form-control" name="ep_no" value="{{$episode->ep_no}}" placeholder="Episode No." required>
                               </div>
                               <div class="col-md-6 form-group">
                                  <input type="text" class="form-control" name="ep_name" value="{{$episode->ep_name}}" placeholder="Episode Name" required>
                               </div>
                               <div class="col-md-6 form_gallery form-group">
                                  <label id="gallery4" for="show3">Upload Image</label>
                                  <input data-name="#gallery4" id="show3" name="ep_image" class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg" required>
                               </div>
                               <div class="col-md-6 form-group">
                                  <input type="text" class="form-control" name="r_time_minute" value="{{$episode->r_time_minute}}" placeholder="Running Time in Minutes" required>
                               </div>
                               <div class="col-md-6 form-group">
                                  <input class="form-control date-input basicFlatpickr flatpickr-input" type="text" name="date" value="{{$episode->date}}" placeholder="Selete Date" required>
                               </div>
                               <div class="col-12 form-group">
                                  <textarea id="text" name="description" rows="5" class="form-control" placeholder="Description" required>{{$episode->description}}</textarea>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-5">
                            <div class="d-block position-relative">
                               <div class="form_video-upload">
                                  <input type="file" name="video" accept="video/mp4,video/x-m4v,video/*" >
                                  <p>Upload video</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-12 form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">cancel</button>
                         </div>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection