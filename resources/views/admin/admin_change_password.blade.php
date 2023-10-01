@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Change Password Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

             <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        @if(count($errors))
                                            @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="mdi mdi-block-helper me-2"></i>
                                                {{ $error }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @endforeach
                                        @endif

                                        <form method="POST" action="{{ route('update.password') }}">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                                <div class="col-sm-10">
                                                    <input name="oldPassword" class="form-control" type="password" placeholder="Old Password" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input name="newPassword" class="form-control" type="password" placeholder="New Password" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <input name="confirm_Password" class="form-control" type="password" placeholder="Confirm Password" id="example-text-input">
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-secondary waves-effect waves-light">Change Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

        
        <!-- end row -->
       
    </div> <!-- container-fluid -->
</div>

@endsection