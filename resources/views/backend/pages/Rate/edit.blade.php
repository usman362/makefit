@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title"> Edit Rating</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <p></p>
                   <form>
                      <div class="form-row">
                         <div class="col-md-3 mb-3">
                            <label for="validationDefault01">Category name</label>
                            <input type="text" class="form-control" id="validationDefault01" required="">
                         </div>
                         <div class="col-md-3 mb-3">
                            <label for="validationDefault02">user name</label>
                            <input type="text" class="form-control" id="validationDefault02" required="">
                         </div>
                         <div class="col-md-3 mb-3">
                            <label for="validationDefault01">Description</label>
                            <input type="text" class="form-control" id="validationDefault01" required="">
                         </div>
                         <div class="col-md-3 mb-3">
                            <label for="validationDefault02">Release Date</label>
                            <input type="date" class="form-control" id="validationDefault02" required="">
                         </div>
                         
                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                           <label for="validationDefault01">Rating</label>
                           <input type="number" class="form-control" id="validationDefault01" required="">
                        </div>    
                     </div>
                     
                      <div class="form-group">
                         <button class="btn btn-primary" type="submit">Submit form</button>
                      </div>
                   </form>
                </div>
             </div>
             
          </div>
          
       </div>
    </div>
 </div>
@endsection