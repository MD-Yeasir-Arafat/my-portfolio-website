
@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Admin Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->



        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4">
                            <img class="card-img img-fluid" src="{{ (!empty($adminData->profile_image))? asset('upload/admin_images/'.$adminData->profile_image): asset('upload/admin_images/profile.jpg') }}" alt="Card image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2>Name : {{ $adminData->name }}</h2>
                                <hr>
                                <h5 class="card-title">Email : {{ $adminData->email }}</h5>
                                <hr>
                                <h5 class="card-title">Username : {{ $adminData->username }}</h5>
                                <hr>
                              
                                <a href="{{ route('profile.edit') }}" type="button" class="btn btn-primary btn-md btn-rounded waves-effect waves-light">Edit</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <!-- end row -->
       
    </div> <!-- container-fluid -->
</div>

@endsection