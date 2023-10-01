@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Blog Category Manage</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blog Category</a></li>
                            <li class="breadcrumb-item active">Blog category All Data</li>
                            
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
                            <a href="{{ route('add.blog.category') }}" class="btn btn-info btn-sm"><i class="fas fa-plus"></i> ADD</a>
                        </div>
                       

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Blog Category</th>
                                <th>Action</th>
                               
                            </tr>
                            </thead>


                            <tbody>
                            @php($i = 1)
                            @foreach($blogCategory as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->blog_category }}</td>
                                    <td>
                                        <a href="{{ route('edit.blog.category',$item->id) }}" class="btn btn-info sm fas fa-edit" title="Edit"></a>
                                        <a href="{{ route('delete.blog.category',$item->id) }}" class="btn btn-danger sm fas fa-trash" title="Delete" id="delete"></a>
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