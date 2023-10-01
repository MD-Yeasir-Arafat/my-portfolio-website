@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Home Slider Setup</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

             <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('update.slider') }}" enctype="multipart/form-data">
                                            @csrf
                                            {{-- if --}}
                                            <input type="hidden" name="id" value="{{ $homeslide->id }}">

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input name="title" class="form-control" type="text" id="example-text-input" value="{{ $homeslide->title }}">
                                                </div>
                                            </div>

                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Short Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="short_title" id="example-search-input" value="{{ $homeslide->short_title }}">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Video URL</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="video_url" type="text" id="example-email-input" value="{{ $homeslide->video_url }}">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="home_slide" type="file" placeholder="bootstrap@example.com" id="image">
                                                </div>
                                            </div>

                                            

                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <div class="card">
                                                        <img id="showImage" height="150" width="150" src="{{ (!empty($homeslide->home_slide))? asset($homeslide->home_slide): asset('upload/home_slider/banner_img.png') }}" alt="Card image">
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <!-- end row -->

                                            <div>
                                                <button type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light">Update</button>
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