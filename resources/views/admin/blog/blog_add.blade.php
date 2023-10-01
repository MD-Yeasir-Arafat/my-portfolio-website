@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Blogs Add Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

             <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('store.blog') }}" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category </label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="blog_cattegory_id">
                                                        <option selected="">Select One</option>
                                                        @foreach($categorie as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->blog_category }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('portfolio_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title </label>
                                                <div class="col-sm-10">
                                                    <input name="blog_title" class="form-control" type="text" id="example-text-input">
                                                    @error('blog_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags </label>
                                                <div class="col-sm-10">
                                                    <input name="blog_tags" value="Home,ech" class="form-control" type="text" data-role="tagsinput">
                                                    @error('blog_tags')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- end row -->
                                           
                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Blog Description</label>
                                                <div class="col-sm-10">
                                                    <textarea id="elm1" class="form-control" name="blog_description" id="example-email-input"></textarea>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Blog Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="blog_image" type="file" placeholder="bootstrap@example.com" id="image">
                                                </div>
                                            </div>

                                            

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <div class="card">
                                                        <img id="showImage" height="150" width="150" src="{{ asset('upload/home_slider/banner_img.png') }}" alt="Card image">
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <!-- end row -->

                                            <div>
                                                <button type="submit" class="btn btn-secondary waves-effect waves-light">Insert Blog</button>
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