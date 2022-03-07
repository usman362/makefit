@extends('backend.layouts.app') @section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Movie Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="/movie/create" class="btn btn-primary">Add movie</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-view">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="data-tables table movie_table  dataTable no-footer" style="width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 251px;" aria-sort="ascending" aria-label="Movie: activate to sort column descending">Movie</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 109px;" aria-label="Quality: activate to sort column ascending">Quality</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 131px;" aria-label="Category: activate to sort column ascending">Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 170px;" aria-label="Release Year: activate to sort column ascending">Release Year</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 134px;" aria-label="Language: activate to sort column ascending">Language</th>
                                                    <th style="width: 258px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending">Description</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 148px;" aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($movies as $movie)
                                               
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">
                                                        <div class="media align-items-center">
                                                            <div class="iq-movie">
                                                                <a href="javascript:void(0);"><img src="/images/Movies/{{$movie->image}}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                                            </div>
                                                            <div class="media-body text-white text-left ml-3">
                                                                <p class="mb-0">{{$movie->title}}</p>
                                                                <small>{{$movie->duration}}</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$movie->quality}}</td>
                                                    @foreach (App\Category::where('id',$movie->category)->get() as $category)
                                                    <td>{{$category->c_name}}</td>
                                                    @endforeach
                                                    <td>{{$movie->release_year}}</td>
                                                    <td>{{$movie->language}}</td>
                                                    <td>
                                                        <p>{{$movie->description}}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            {{-- <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="lar la-eye"></i></a> --}}
                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="/movie/{{$movie->id}}/edit"><i class="ri-pencil-line"></i></a>
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