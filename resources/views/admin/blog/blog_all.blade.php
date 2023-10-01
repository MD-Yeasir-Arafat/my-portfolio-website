@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Blogs Manage</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blogs</a></li>
                            <li class="breadcrumb-item active">Blogs All Data</li>
                            
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
              
                <div class="card">
                    <div class="card-body">

                        <div class="mb-3">
                            <a href="{{ route('add.blog') }}" class="btn btn-info btn-sm"><i class="fas fa-plus"></i> ADD</a>
                        </div>
                       

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Blog Category</th>
                                <th>Blog Title</th>
                                <th>Blog Tags</th>
                                <th>Blog Image</th>
                                <th>Action</th>
                               
                            </tr>
                            </thead>


                            <tbody>
                            @php($i = 1)
                            @foreach($blog as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->blog_category_id ? $item->blogCategory->blog_category : '' }}</td>

                                    <td>{{ $item->blog_title }}</td>.
                                    <td>{{ $item->blog_tags }}</td>
                                    <td><img height="60" width="60" class="rounded border" src="{{ asset($item->blog_image) }}"/></td>
                                    <td>
                                        <a href="{{ route('edit.blog',$item->id) }}" class="btn btn-info sm fas fa-edit" title="Edit"></a>
                                        <a href="{{ route('delete.blog',$item->id) }}" class="btn btn-danger sm fas fa-trash" title="Delete" id="delete"></a>
                                    </td>
                                
                                </tr>
                            @endforeach
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        
    </div> <!-- container-fluid -->
</div>
@endsection