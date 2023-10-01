@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Portfolio Manage</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Portfolio</a></li>
                            <li class="breadcrumb-item active">Portfolio All Data</li>
                            
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
                            <a href="{{ route('add.portfolio') }}" class="btn btn-info btn-sm"><i class="fas fa-plus"></i> ADD</a>
                        </div>
                       

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Portfolio Name</th>
                                <th>Portfolio Title</th>
                                <th>Image</th>
                                <th>Action</th>
                               
                            </tr>
                            </thead>


                            <tbody>
                            @php($i = 1)
                            @foreach($portfolio as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->portfolio_name }}</td>
                                    <td>{{ $item->portfolio_title }}</td>
                                    <td><img height="60" width="60" class="rounded border" src="{{ asset($item->portfolio_image) }}"/></td>
                                    <td>
                                        <a href="{{ route('edit.portfolio',$item->id) }}" class="btn btn-info sm fas fa-edit" title="Edit"></a>
                                        <a href="{{ route('delete.portfolio',$item->id) }}" class="btn btn-danger sm fas fa-trash" title="Delete" id="delete"></a>
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