@extends('layouts.adminlayouts.admin_design')
@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
        <div id="content" class="page-wrapper">
         <div class="container-fluid">
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
  <h1>
      User Profile
             </h1>
<form class="form-horizontal m-t-20" id="changePassword" method="post" action="{{ url('/admin/updatepwd')}}">@csrf
                        <div class="row p-b-30">
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Current Password" aria-label="CurrentPassword" aria-describedby="basic-addon1" required="" name="CurrentPassword" id="CurrentPassword">
                                </div>  <div class="col-4"><span id="chkPwd"> </span></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="New Password" aria-label="NewPassword" name="NewPassword" id="NewPassword"aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder=" Confirm Password" aria-label="Password" name="VerifyPassword" id="VerifyPassword" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Update Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            <!-- ============================================================== -->
            <!-- End Row container fluid  -->
            <!-- ============================================================== -->
        </div>
 </div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

@endsection
@section('javascripts')
<script>
    $(document).ready(function() {

  $("#NewPassword").click(function(){
	 var current_pwd =$("#CurrentPassword").val();

      $.ajax({
          type: 'get',
          url: 'checkpwd',
          data: {current_pwd:current_pwd},
          success: function(resp){
              if (resp == "false") {
                  $('#chkPwd').html("<font color='red'> Current Password is incorrect </font>");
              }else if (resp == "true") {
                  $('#chkPwd').html("<font color='green'> Current Password is Correct </font>");
              }

          },
          error:   function()    { alert("hhh"); }
          })
      });

     /* Add Form validation */
     $("#changePassword").validate({
        rules: {
            CurrentPassword: {
                required:true,
                minlength:5
            },
            NewPassword: {
                  required:true,
                  minlength:5
            },
            VerifyPassword: {
                  required:true,
                  minlength:5,
                  equalTo:"#NewPassword"
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.input-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.input-group').removeClass('error');
            $(element).parents('.input-group').addClass('success');
        }
    });

  });
    </script>
@endsection
