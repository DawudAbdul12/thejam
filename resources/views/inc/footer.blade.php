




<!-- footer -->
  <section class="fot pt-5  d-none d-lg-block">
    <div class="container"> 
      <div class="row">
        <div class="col-12 text-center">
          <p></p>
        </div>
      </div>
    </div>
      <!-- <div class="container">
        <div class="row">
          <div class="col-xl-3">
             <p class="wc"><strong>THINK MYI</strong></p>
        <p class="wc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magn</p>
          </div>
          <div class="col-xl-3">
            <p class="wc"><strong>WHAHT WE DO</strong></p>
              <p>
            <a href="#" class="wc">
            What We Do One</a><br>
            <a href="#" class="wc">What We Do Two</a><br>
             <a href="#" class="wc">What We Do Three</a>
             </p>
          </div>
          <div class="col-xl-3">
            <p class="wc"><strong>SOCIAL LINKS</strong></p>
              <p>
            <a href="#" class="wc">Facebook</a><br>
            <a href="#" class="wc">Twitter</a><br>
             <a href="#" class="wc">Instagram</a><br>
             <a href="#" class="wc">YouTube</a>
             </p>
          </div>
          <div class="col-xl-3">
            <p class="wc"><strong>CONTACT</strong></p>
                <p class="wc">No 24 Palace Street,
                    <br> Dans-Bar Rd, North Kaneshie,</p>
               <p class="wc">Tel: +233 20-152-5252  / : +233 302260468  <br>Email: info@thimkmyi.com</p>

               <p>
               <a href="#" class="wc1f"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
                 <span><a href="#" class="wc1f"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a></span>
                 <span><a href="#" class="wc1f"><i class="fa fa-linkedin " aria-hidden="true"></i></a></span>
                 </p>
          </div>
        </div>
      </div> -->
    </section>
<!-- footer -->


<div class="cx-mimi-foot  d-md-block d-lg-none">
  <div class="container">
  <div class="row centerit">
    <div class="col-3 text-center">
      <a href="/index">
      <i class="fa fa-home fa-2x" aria-hidden="true"></i>
          </a>
    </div>

    <div class="col-3 text-center">
      <a href="/favourite">
       <i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>
      </a>
  </div>

  <div class="col-3 text-center">
    <a href="#">
    <img src="{{asset('img/jamjar.png')}}" alt="jamjar" width="40">
        </a>
</div>

<div class="col-3 text-center">
  <a href="/profile">
      @php  $image = "profile_pic/".auth()->user()->profile_pic;  @endphp
      <img src="{{asset($image)}}" alt="{{ auth()->user()->fname }}" width="35" class="rounded-circle border">
    {{-- <img src="img/user.png" alt="buy orders" width="40"> --}}
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

    		
      <script>

      function myFavourite(offer_id){
       // ASSIGN VALUES
       var member_id =  $("input[id='member_id']").val();
       document.getElementById(offer_id).innerHTML = '<i class="fa fa-heart fa-2x wc" aria-hidden="true"></i>';

       // BINDING DATA TO DATA FORM 
      var formData = new FormData();
      formData.append('offer_id',offer_id);
      formData.append('member_id',member_id);
    
       $.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });


       $.ajax({
        method: 'POST',
        url: '/add_favourite',
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data == "success"){
           document.getElementById(offer_id).innerHTML = '<i class="fa fa-heart fa-2x wc" aria-hidden="true"></i>';
          // document.event.target.id.innerHTML = '<i class="fa fa-heart fa-2x wc" aria-hidden="true"></i>';

          }else if(data == "deleted"){
            document.getElementById(offer_id).innerHTML = '<i class="fa fa-heart-o fa-2x wc" aria-hidden="true"></i>';
          // document.event.target.id.innerHTML = '<i class="fa fa-heart-o fa-2x wc" aria-hidden="true"></i>';

          }
        
        },
        error: console.error
      });
       // alert(registered_address);
    // BINDING DATA TO DATA FORM
  }
  </script>
   