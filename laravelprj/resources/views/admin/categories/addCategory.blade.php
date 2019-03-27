@extends('layouts.adminlayouts.admin_design')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div id="content" class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Basic</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
          @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
                @endif
                @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
                @endif
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                 <form class="form-horizontal" method="POST" action="{{ url('admin/addCategory') }}" name="addCategory" id="addCategory">@csrf
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
                            <div class="form-group row">
                                <label for="categoryName" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="url" class="col-sm-3 text-right control-label col-form-label">URL</label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control" id="url" name="url" placeholder="url Here">
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

@endsection

@section('javascripts')
<script>
 <!-- Add Category validation -->
     $("#addCategory").validate({
        rules: {
            categoryName: {
                required:true,
                minlength:5
            },
            description: {
                  required:true
            },
            url: {
                  required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('error');
            $(element).parents('.form-group').addClass('success');
        }
    });
    </script>
@endsection
