<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        
        <title>JamJar | Login Page</title>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Jam Jar"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="../../../ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Global Theme Styles -->
                    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
                    <link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        
        
        
        <link rel="shortcut icon" href="{{asset('assets/demo/default/media/img/logo/favicon.ico')}}" />
    </head>
    <!-- end::Head -->

    
    <!-- begin::Body -->
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
			
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{asset('assets/app/media/img/bg/bg-1.jpg')}});">
	<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
		<div class="m-login__container">
			<div class="m-login__logo">
				<a href="#">
				<img src="{{asset('assets/demo/default/media/img/logo/logo_default_dark.png')}}" width=100px>  	
				</a>
			</div>
			<div class="m-login__signin">
				<div class="m-login__head">
					<h3 class="m-login__title">Complete Your Registration</h3>
					@include('message')
				</div>
				      
                        <form method="POST" class="m-login__form m-form"  action='{{ url("/vendor/account/$token") }}' aria-label="{{ __('Login') }}">
                            @csrf
						{{-- <!-- <form method="POST" class="m-login__form m-form" action="{{ route('/login/admin/$token') }}"> --> --}}
						
						<div class="form-group m-form__group">
						
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
								@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							{{-- <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" id="login_pass"> --}}
							<input  type="hidden" name="token" value="{{$token}}"  required>
						</div>
					<div class="form-group m-form__group">
						 
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="cpassword" placeholder="Confirm Password" required>
							@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						{{-- <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" id="login_pass"> --}}
					</div>
					<div class="row m-login__form-sub">
						
						<div class="col m--align-right m-login__form-right">
								
							
							{{-- <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a> --}}
						</div>
					</div>
					<div class="m-login__form-action">
						<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">Submit</button>
					</div>
				</form>
			</div>
			<div class="m-login__signup">
			

				<form class="m-login__form m-form" action="#">
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="password" placeholder="Password" name="password">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
					</div>
					<div class="row form-group m-form__group m-login__form-sub">
						<div class="col m--align-left">
							<label class="m-checkbox m-checkbox--light">
							<input type="checkbox" name="agree">I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
							<span></span>
							</label>
							<span class="m-form__help"></span>
						</div>
					</div>
					<div class="m-login__form-action">
						<button id="m_login_signup_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign Up</button>&nbsp;&nbsp;
						<button id="m_login_signup_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Cancel</button>
					</div>
				</form>


			</div>
			<div class="m-login__forget-password">
				<div class="m-login__head">
					<h3 class="m-login__title">Forgotten Password ?</h3>
					<div class="m-login__desc">Enter your email to reset your password:</div>
				</div>
				<form class="m-login__form m-form" action="#">
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
					</div>
					<div class="m-login__form-action">
						<button id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Request</button>&nbsp;&nbsp;
						<button id="m_login_forget_password_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Cancel</button>
					</div>
				</form>
			</div>
		
		</div>	
	</div>
</div>				
		

</div>
<!-- end:: Page -->


        <!--begin::Global Theme Bundle -->
                    <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
                    <script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

        
                    <!--begin::Page Scripts -->
                            <script src="{{asset('assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>
                        <!--end::Page Scripts -->
      
                    </body>
    <!-- end::Body -->
</html>