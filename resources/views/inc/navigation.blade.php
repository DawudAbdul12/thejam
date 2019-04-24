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
  <body class="jambackcol">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-none d-lg-block ">
    <div class="container">
 <a href="/index"><img src="{{asset('img/logovacwc.png')}}" class="img-fluid navbar-brand" width="60"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item pr-3">
        <a class="nav-link  {{ Request::is('favourite') ? 'active' : null }} " href="/favourite"><span><i class="fa fa-heart-o fa-2ax" aria-hidden="true"></i></span> FAVOURATE</a>
      </li>
      
      <li class="nav-item pr-3">
        <a class="nav-link" href="#"><span><img src="{{asset('img/jamjar.png')}}" alt="buy orders" width="35"></span> THE JAM</a>
      </li>


      <li class="nav-item pr-3 notification_icon3 dropdow">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

      <span><i class="fa fa-bell   faoo" aria-hidden="true"></i></span>
      <span class="badge badge-pill-noti badge-danger-noti" id="notification_count"></span>
   
     </a>
      <div class="dropdown-menu dropdown-menu-right nooti" aria-labelledby="navbarDropdown">
          <div class="container-fluid" id="view-notification">

  

{{-- 
    <div class="row px-3">
      <div class="col-12">
        <h5 class="mb-0 wc">JAM</h5>
        <p class="wc mb-0">Favourite offer expires soon</p>
        <small class="wc2">2mins ago</small>
      </div>
    </div>
     <hr>


    <div class="row px-3">
      <div class="col-12">
        <h5 class="mb-0 wc">JAM</h5>
        <p class="wc mb-0">Approved JAM membership</p>
        <small class="wc2">3 days ago</small>
      </div>
    </div>
     <hr>


    <div class="row px-3">
      <div class="col-12">
        <h5 class="mb-0 wc">JAM</h5>
        <p class="wc mb-0">Favourite offer expires soon</p>
        <small class="wc2">3 days ago</small>
      </div>
    </div>
     <hr>


    <div class="row px-3">
      <div class="col-12">
        <h5 class="mb-0 wc">JAM</h5>
        <p class="wc mb-0">Favourite offer expires soon</p>
        <small class="wc2">5 days ago</small>
      </div>
    </div>
     <hr>

    <div class="row px-3">
      <div class="col-12">
        <h5 class="mb-0 wc">JAM</h5>
        <p class="wc mb-0">Favourite Offer have expiren</p>
        <small class="wc2">1 week ago</small>
      </div>
    </div>
     <hr> --}}

  </div>
        </div>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @php  $image = "profile_pic/".auth()->user()->profile_pic;  @endphp
            <img src="{{asset($image)}}" alt="{{ auth()->user()->fname }}" width="35" class="rounded-circle border">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/profile">MY PROFILE</a>
          <a class="dropdown-item" href="/redeem-history">REDEEM HISTORY</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">LOGOUT</a>
        </div>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>

       
      <!-- <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>
     -->
    </ul>
   
  </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark d-sm-block d-md-none  ">
  <div class="container py-sm-1 py-2">
   <a href="/index"><img src="{{asset('img/logovacwc.png')}}" class="img-fluid navbar-brand" width="50" ></a>

   <div class="notification_icon">
     <a href="/notification">
      <span><i class="fa fa-bell   faoo" aria-hidden="true"></i></span>
      <span class="badge badge-pill-noti badge-danger-noti" id="notification_count_mobile"></span>
     </a>
   </div>


   <!--  -->
   
   <!--  -->



   <h4 class="mr-4" onclick="openNav()">
    <img src="{{asset('img/menu-button.svg')}}" width="32px">
  </h4>
</div>

<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="mt-6">
  <a class="mt-5" href="/profile">PROFILE</a>
  <a class="mt-3" href="">ABOUT US</a>
  <a class="mt-3" href="">CONTACT US</a>
  <a class="mt-3" href="#">TERMS & CONDITIONS</a>
  <a class="mt-3" href="{{ route('logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">LOGOUT</a>
  </div>


  <div class="row">
    <div class="container">
      <div class="col-12 mx-auto mt-6">
        
         <hr>
      </div>
    </div>
  </div>

 
  <ul class="list-inline">
    <li class="list-inline-item smr"><a href="#">Go social with JAM</a></li>
  </ul>


</div>

</nav>

