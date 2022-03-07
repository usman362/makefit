@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Add Show</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form action="{{URL::to('show')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                      <div class="row">
                         <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Title" name="show_title" required>
                         </div>
                         <div class="col-md-6 form-group" >
                            <select class="form-control" id="exampleFormControlSelect1" name="show_language" required>
                               <option selected="" disabled="">Choose Language</option>
                               <option>English</option>
                               <option>Hindi</option>
                               <option>Tamil</option>
                               <option>Gujarati</option>
                            </select>                                 
                         </div>
                         <div class="col-md-6 form-group">
                            <select class="form-control" id="exampleFormControlSelect2" name="show_category" required>
                               <option selected="" disabled="">Show Category</option>
                               <option value="">Select Category</option>
                               @foreach ($categories as $category)
                                   <option value="{{$category->id}}">{{$category->c_name}}</option>
                               @endforeach
                            </select>
                         </div>
                         <div class="col-md-6 form-group">
                            <select class="form-control" id="exampleFormControlSelect3" name="show_quality" required>
                               <option selected="" disabled="">Choose quality</option>
                               <option>Full HD</option>
                               <option>HD</option>
                            </select>
                         </div>
                         <div class="col-md-6 form_gallery form-group">
                            <label id="gallery2" for="form_gallery-upload">Upload Image</label>
                            <input data-name="#gallery2" id="form_gallery-upload" name="show_image" required class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                         </div>
                         <div class="col-md-6 form_gallery form-group">
                            <label id="gallery3" for="show2">Upload Show Banner</label>
                            <input data-name="#gallery3" id="show2" name="show_banner" required class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                         </div>

                         <div class="col-lg-6">
                           <div class="d-block position-relative">
                              <div class="form_video-upload position-relative">
                                 <input type="file" name="video" class="position-relative" accept="video/mp4,video/x-m4v,video/*" required>
                                 <p style="line-height: 160px;">Upload video</p>
                              </div>
                           </div>
                        </div>
                         <div class="col-6 form-group">
                            <textarea id="text1" name="show_description" required rows="5" class="form-control" placeholder="Description"></textarea>
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