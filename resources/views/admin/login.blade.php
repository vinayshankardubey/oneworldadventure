<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:title" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:image" content="{{asset('admin_assets/social-image.png')}}" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>{{$title}}</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('admin_assets/images/favicon.png')}}" />
    <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{asset('admin_assets/images/logo-full.png')}}" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form id="form-login">
                                      @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" value="" placeholder="example@gmail.com">
                                            <span id="error_email"></span>
                                          </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control"  value="">
                                            <span id="error_password"></span>
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" id="btn-login" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>

                                    </div>
                                    <span id="error"></span>
                                    @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $("#btn-login").click(function(e){
    $('#error').html('Please Wait...');
    $('#error').css('color','green');
    $('#btn-login').attr('');
    e.preventDefault();
    var formData = new FormData($('#form-login')[0]);
    $.ajax({
      url:"{{ route('admin-login')}}",
      type:'post',
      data:formData,
      processData: false,
      contentType: false,
      success:function(response){
        $('#error').html(' ');
        if(response.error==true){

        }else{
            $('#error').html(response.message);
            window.location.assign("{{ url('dashboard') }}");

        }


      },
      error:function(xhr){ 
        $('#error').html(' ');
        var errors = xhr.responseJSON.errors;
        $.each(errors, function(field, messages) {
            // Append error message(s) for each field
            $('#' + 'error_' + field).text(messages.join(', '));
            $('#' + 'error_' + field).css('color','red');
        });
      }
    });
  });
</script>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin_assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/custom.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/dlabnav-init.js')}}"></script>
	<script src="{{asset('admin_assets/js/styleSwitcher.js')}}"></script>
</body>

</html>