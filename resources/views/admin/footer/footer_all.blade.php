@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Footer Setup</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

             <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('update.footer') }}" enctype="multipart/form-data">
                                            @csrf
                                            {{-- if --}}
                                            <input type="hidden" name="id" value="{{ $footer->id }}">

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
                                                <div class="col-sm-10">
                                                    <input name="number" class="form-control" type="text" id="example-text-input" value="{{ $footer->number }}">
                                                </div>
                                            </div>

                                            
                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Short Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="short_description" id="example-email-input" rows="5">{{ $footer->short_description }}</textarea>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input name="address" class="form-control" type="text" id="example-text-input" value="{{ $footer->address }}">
                                                </div>
                                            </div>
                                            <!-- end -->

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input name="email" class="form-control" type="email" id="example-text-input" value="{{ $footer->email }}">
                                                </div>
                                            </div>
                                            <!-- end -->

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                                <div class="col-sm-10">
                                                    <input name="facebook" class="form-control" type="text" id="example-text-input" value="{{ $footer->facebook }}">
                                                </div>
                                            </div>
                                            <!-- end -->

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Linkedin</label>
                                                <div class="col-sm-10">
                                                    <input name="linkedin" class="form-control" type="text" id="example-text-input" value="{{ $footer->linkedin }}">
                                                </div>
                                            </div>
                                            <!-- end -->

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                                                <div class="col-sm-10">
                                                    <input name="copyright" class="form-control" type="text" id="example-text-input" value="{{ $footer->copyright }}">
                                                </div>
                                            </div>
                                            <!-- end -->
                                        

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

@endsection