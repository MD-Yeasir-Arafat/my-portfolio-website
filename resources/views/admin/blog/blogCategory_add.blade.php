@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Blog Category Add Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

             <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" id="myForm" action="{{ route('store.blog.category') }}">
                                            @csrf
                                            
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category</label>
                                                <div class="from-group col-sm-10">
                                                    <input name="blog_category" class="form-control" type="text" id="example-text-input">
                                                    
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-secondary waves-effect waves-light">Insert</button>
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

<script>
    $(document).ready(function(){
        $('#myForm').validate({
            rules: {
                blog_category: {
                    required: true,
                },
            },
            messages: {
                blog_category: {
                    required : 'The field is empty! Please fillup',
                },
            },
            errorElement: 'span',
            errorPlacement: function(error,element){
                error.addClass('invalid-feedback');
                element.closest('.from-group').append(error);
            },
            highlight: function(element, errorClass, validClass){
                $(element).addClass('is-invalid')
            },
            unhighlight: function(element, errorClass, validClass){
                $(element).removeClass('is-invalid')
            },  
        });
    })
</script>

@endsection