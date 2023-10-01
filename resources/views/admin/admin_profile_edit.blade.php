@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Admin Edit Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

             <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input name="name" class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input" value="{{ $user->name }}">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">User Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="search" placeholder="How do I shoot web" name="username" id="example-search-input" value="{{ $user->username }}">
                                                    @error('username')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" readonly name="email" type="email" placeholder="bootstrap@example.com" id="example-email-input" value="{{ $user->email }}">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="profile_image" type="file" placeholder="bootstrap@example.com" id="image">
                                                </div>
                                            </div>

                                            

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label"> Old Image</label>
                                                <div class="col-sm-10">
                                                    <div class="card">
                                                        <img id="showImage" height="150" width="150" src="{{ (!empty($user->profile_image))? asset('upload/admin_images/'.$user->profile_image): asset('upload/admin_images/profile.jpg') }}" alt="Card image">
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <!-- end row -->

                                            <div>
                                                <button type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light">Update Profile</button>
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    })
</script>


@endsection