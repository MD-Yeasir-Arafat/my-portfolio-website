@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">About Page Setup</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

             <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('update.portfolio') }}" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $portfolio->id }}">
                                            
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                                                <div class="col-sm-10">
                                                    <input name="portfolio_name" class="form-control" type="text" id="example-text-input" value="{{ $portfolio->portfolio_name }}">
                                                    @error('portfolio_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Title</label>
                                                <div class="col-sm-10">
                                                    <input name="portfolio_title" class="form-control" type="text" id="example-text-input" value="{{ $portfolio->portfolio_title }}">
                                                    @error('portfolio_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- end row -->
                                           
                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                                                <div class="col-sm-10">
                                                    <textarea id="elm1" class="form-control" name="portfolio_description" id="example-email-input">{{ $portfolio->portfolio_description }}</textarea>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="portfolio_image" type="file" placeholder="bootstrap@example.com" id="image">
                                                </div>
                                            </div>

                                            

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <div class="card">
                                                        <img id="showImage" height="150" width="150" src="{{ (!empty($portfolio->portfolio_image))? asset($portfolio->portfolio_image): asset('upload/home_slider/banner_img.png') }}" alt="Card image">
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <!-- end row -->

                                            <div>
                                                <button type="submit" class="btn btn-secondary waves-effect waves-light">Update Portfolio</button>
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