@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Add Movie</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form action="{{URL::to('movie')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                      <div class="row">
                         <div class="col-lg-7">
                            <div class="row">
                               <div class="col-12 form-group">
                                  <input type="text" class="form-control" name="title" placeholder="Title" required>
                               </div>
                               <div class="col-12 form_gallery form-group">
                                  <label id="gallery2" for="form_gallery-upload">Upload Image  <span>&nbsp; Recommend(1920 X 1080)</span></label>
                                  
                                  <input data-name="#gallery2" id="form_gallery-upload" name="image" class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg" required>
                             
                                 </div>
                               
                               <div class="col-md-6 form-group">
                                  <select class="form-control" name="category" id="exampleFormControlSelect1" required>
                                     <option disabled="">Movie Category</option>
                                     <option>Select Category</option>
                                      @foreach ($categories as $category)
                                          <option value="{{$category->id}}">{{$category->c_name}}</option>
                                      @endforeach
                                  </select>
                               </div>
                               <div class="col-sm-6 form-group">
                                  <select class="form-control" name="quality" id="exampleFormControlSelect2" required>
                                     <option disabled="">Choose quality</option>
                                     <option value="full-hd">FULLHD</option>
                                     <option value="hd">HD</option>
                                  </select>
                               </div>
                               <div class="col-12 form-group">
                                  <textarea id="text" name="description" rows="5" class="form-control" placeholder="Description" required></textarea>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-5">
                            <div class="d-block position-relative">
                               <div class="form_video-upload">
                                  <input type="file" name="video" accept="video/mp4,video/x-m4v,video/*" required >
                                  <p>Upload video</p>
                                  
                               </div>
                               
                            </div>
                            
                         </div>
                         
                      </div>
                      <div class="row">
                         <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" name="release_year" placeholder="Release year" required>
                         </div>
                         <div class="col-sm-6 form-group">
                            <select class="form-control" id="exampleFormControlSelect3" name="language">
                               <option selected="" disabled="">Choose Language</option>
                               <option value="English">English</option>
                               <option value="Hindi">Hindi</option>
                               <option value="Tamil">Tamil</option>
                               <option value="Gujarati">Gujarati</option>
                            </select>
                         </div>
                         <div class="col-sm-6 form-group">
                            <input type="text" name="duration" class="form-control" placeholder="2h 2m" required>
                         </div>
                         <div class="col-sm-6 form-group">
                           <input type="text" name="age_restriction" class="form-control" placeholder="13+,16+,18+,...." required>
                        </div>
                         <div class="col-12 form-group ">
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