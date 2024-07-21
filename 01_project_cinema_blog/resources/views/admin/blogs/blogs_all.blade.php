@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Movie Reviews All</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Movie Reviews All Data </h4>
                            <table id="datatable" class="table-bordered dt-responsive nowrap table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Movie Category</th>
                                        <th>Movie Title</th>
                                        <th>Movie Tags</th>
                                        <th>Movie Image</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach ($blogs as $key => $item)
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $item['category']['blog_category'] }} </td>
                                            <td> {{ $item->blog_title }} </td>
                                            <td> {{ $item->blog_tags }} </td>
                                            <td> <img src="{{ asset($item->blog_image) }}" style="width: 60px; height: 50px;"> </td>
                                            <td>
                                                <a href="{{ route('edit.blog', $item->id) }}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i> </a>
                                                <a href="{{ route('delete.blog', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i> </a>
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
@endsection
