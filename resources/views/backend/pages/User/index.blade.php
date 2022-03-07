@extends('backend.layouts.app') @section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">User Lists</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-view">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="data-tables table movie_table dataTable no-footer" style="width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: 107px;" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending">Profile</th>
                                                    <th style="width: 107px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                                                    <th style="width: 258px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                                                    <th style="width: 107px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Gender</th>
                                                    <th style="width: 107px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                                                    <th style="width: 107px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Join Date: activate to sort column ascending">Join Date</th>
                                                    <th style="width: 107px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                        <img src="{{$user->profile_img != null ? asset('images/user/'.$user->profile_img) : asset('images/user/user.jpg')}}" class="img-fluid avatar-50" alt="author-profile">
                                                    </td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->gender}}</td>
                                                    <td><span class="badge {{$user->status == '1' ? 'iq-bg-success' : 'iq-bg-warning'}}">{{$user->status == '1' ? 'Active' : 'Pending'}}</span></td>
                                                    <td>{{$user->created_at->format('Y-m-d')}}</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
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