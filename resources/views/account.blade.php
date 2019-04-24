<!doctype html>
<html lang="en">
<head>
  <title>The JAM </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >

  <link rel="stylesheet" href="{{asset('plugins/animate.css')}}">

  <!-- custom -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}" >
  <!-- custom -->

  <link rel="stylesheet" type="text/css" href="{{asset('plugins/lightbox2-master/dist/css/lightbox.css')}}">

  <link rel="stylesheet" href="{{asset('plugins/owlcarousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/owlcarousel/owl.theme.default.css')}}">

  <!-- google fonts used -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <!-- google fonts used -->

  <!-- font-awesome fonts used  https://fontawesome.com/v4.7.0/ -->
  <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> 
  <!-- font-awesome fonts used  https://fontawesome.com/v4.7.0/ -->


</head>
<body>



<section>
  <div class="container">
    <div class="row ">


      <div class="col-12 col-md-7 mx-auto text-center loglog ">
        <img src="{{asset('img/picture1.png')}}" class="img-fluid" width="200">
        @include('message')
      </div>
        

        <div class="col-12  col-md-7 mx-auto loglog">
         {{-- <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}"> --}}
          <form method="POST" action='{{ url("account/$token") }}' aria-label="{{ __('Login') }}">
          @csrf
         <div class="form-row">
        
        <div class="form-group col-12 ">
            <input id="password" type="password" class="form-control form-control-log{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

        <input  type="hidden" name="token" value="{{$token}}"  required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group col-12 ">
          <input id="password" type="password" class="form-control form-control-log{{ $errors->has('password') ? ' is-invalid' : '' }}" name="cpassword" placeholder="Confirm Password" required>

          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
      </div>

     

      </div>
    
        </div>
    </div>
   


    <div class="col-12 col-md-7 mx-auto my-5 d-none d-lg-block">
        <button type="submit" class="btn btn-jam btn-lg btn-block"><img src="{{asset('img/login.svg')}}"  width="30"> Submit </button>
      </div>
  </div>
</form>
</section>




  <div class="cx-mimi-footlog  d-md-block d-lg-none">
    <div class="container">
      <div class="row centerit">
      <div class="col-12 text-center">
        <a href="profile.php">
          <h4><img src="img/login.svg"  width="30"> </h4>
        </a>
      </div>
    </div>
  </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('plugins/lightbox2-master/dist/js/lightbox-plus-jquery.js')}}"></script>
<script src="{{asset('plugins/owlcarousel/owl.carousel.min.js')}}" ></script>

<script src="{{asset('js/app.js')}}"></script>

<script src="{{asset('plugins/wow/wow.min.js')}}"></script>
<script>
  new WOW().init();
</script>




</body>
</html>