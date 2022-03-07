@extends('backend.layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Category Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="add-category.html" class="btn btn-primary">Add Category</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-view">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                             
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="data-tables table movie_table  dataTable no-footer" style="width:100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: 106px;" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                                                    <th style="width: 258px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                                                    <th style="width: 560px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending">Description</th>
                                                    <th style="width: 106px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Movie: activate to sort column ascending">Movie</th>
                                                    <th style="width: 258px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $item)
                                                    
                                                
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">{{$item->id}}</td>
                                                    <td>{{$item->c_name}}</td>
                                                    <td>
                                                        <p>{{$item->c_desc}}
                                                        </p>
                                                    </td>
                                                    <td>65</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="/category/{{$item->id}}/edit"><i class="ri-pencil-line"></i></a>
                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"     onclick="document.getElementById('delete-form{{$item->id}}').submit();"><i class="ri-delete-bin-line"></i></a>
                                                            <form action="{{URL::to('category/'.$item->id)}}"
                                                                method="POST" id="delete-form{{$item->id}}">@csrf
                                                                @method('DELETE')</form>
                                                        </div>
                                                    </td>
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
        </div>
    </div>
</div>
@endsection
