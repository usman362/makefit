@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title" id="title">Update Show Banner</h4>
                   </div>
                </div>
                

                <div class="iq-card-body">
                   <form action="{{URL::to('showbannerupd',$sbanner->id)}}" method="POST" enctype="multipart/form-data" >
                     @csrf
                      <div class="row">
                         <div class="col-lg-7">
                            <div class="row">
                            

                               <div class="col-12 form-group">
                                  <input type="text" class="form-control" value="{{$sbanner->banner_name}}" name="banner_name" placeholder="Banner Name" required>
                               </div>
                              
                               <div class="col-md-6 form-group">
                                  <select class="form-control" name="show_id" id="exampleFormControlSelect1" required>
                                     <option disabled="">Shows</option>
                                     <option>Select Show</option>
                                      @foreach (App\Show::all() as $show)
                                          <option value="{{$show->id}}"
                                            {{$show->id == $sbanner->show_id ? 'selected' : ''}}
                                            >{{$show->show_title}}</option>
                                      @endforeach
                                  </select>
                               </div>
                           
                           
                            </div>
                         </div>
                       
                         
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