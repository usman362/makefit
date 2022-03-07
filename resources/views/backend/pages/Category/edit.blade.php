@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Edit Category</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div class="row">
                      <div class="col-lg-12">
                         <form action="{{URL::to('category',$category->id)}}" method="POST">
                           @csrf
                           @method('PUT')
                            <div class="form-group">
                               <input type="text" class="form-control" name="c_name" value="{{$category->c_name}}" required>
                            </div>
                            <div class="form-group">
                               <textarea id="text" name="c_desc" rows="5" class="form-control" required>{{$category->c_desc}}</textarea>
                            </div>
                            <div class="form-group radio-box">
                               <label>Status</label>
                               <div class="radio-btn">
                                  @if ($category->c_status == 'enable')
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio6" value="enable" name="c_status" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio6">enable</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio7" value="disable" name="c_status" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio7">disable </label>
                                 </div>
                                  @else
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio6" value="enable" name="c_status" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6">enable</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio7" value="disable" name="c_status" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio7">disable </label>
                                 </div>
                                  @endif

                                  
                               </div>
                            </div>
                            <div class="form-group ">
                               <button type="submit" class="btn btn-primary">Update</button>
                               <button type="reset" class="btn btn-danger">cancel</button>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
