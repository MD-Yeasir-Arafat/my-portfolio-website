@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Multi Image Manage</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">About</a></li>
                            <li class="breadcrumb-item active"> All Images Tables</li>
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

                       
                       

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Action</th>
                               
                            </tr>
                            </thead>


                            <tbody>
                            @php($i = 1)
                            @foreach($allMultiImage as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img height="60" width="60" src="{{ asset($item->multi_image) }}"/></td>
                                    <td>
                                        <a href="{{ route('edit.multi.image',$item->id) }}" class="btn btn-info sm fas fa-edit" title="Edit"></a>
                                        <a href="{{ route('delete.multi.image',$item->id) }}" class="btn btn-danger sm fas fa-trash" title="Delete" id="delete"></a>
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