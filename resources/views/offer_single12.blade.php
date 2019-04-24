@extends('front_layout.app')
@section('content')
  <!-- single offer type 1 -->

  <section class="gut mt-6">
    <div class="container-fluid webmag">
      <div class="row">

        <!-- right side content -->
        <div class="col-12 col-md-7">
          <div class="row mb-3">
            <div class="col-12 px-0">
              <div class="entervas-konko3">
                <img src="img/pizzat.png" alt="" class="vasimg">
                <div class="overlay-light-black"></div>
                <div class="text-contain">
                  <ul class="list-inline ">
                    <!-- <li class="list-inline-item py-1  wc "> <img src="img/pizzahut.jpg" alt="" class="off_brand_logo"></li> -->
                    <li class="list-inline-item py-1  wc "><h4>Pizza Hut</h4></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="row px-3">
            <div class="col-10">
              <h5 class="mb-0 wc">20% off dinner for 2</h5>
              <small class="wc">Expires 30/11/18</small>
            </div>
            <div class="col-2"> <i class="fa fa-heart-o fa-2x wc" aria-hidden="true"></i></div>
          </div>
          <hr>


          <div class="row px-3">
           <div class="col-12">
             <p class="wc">Get a 20% discount for yourself and a partner at any of our locations</p>
           </div>
         </div>
         <hr>


         <div class="row px-3 mb-5">
           <div class="col-12">
            <p class="wc">imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
           </div>
         </div>
       </div>
       <!-- right side content -->

       <!-- left side content -->
       <div class="col-12 col-md-5">
        <div class="row">
      <div class="col-12 px-0 pl-md-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.5247523383287!2d-0.16072678528623885!3d5.6369282959137275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b0cf34200b3%3A0xeb1115bb4e9b0a53!2sEffect+Studios!5e0!3m2!1sen!2sgh!4v1549589116763" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
        </div>

      <div class="row mb-5">
       <div class="col-12 text-center px-0 pl-md-4 my-5">
        <a href="offer_redeemed.php" class="btn btn-jam btn-lg btn-block">Redeem</a>
      </div>
    </div>
      </div>
      <!-- left side content -->
    </div>
  </div>

</section>

<!-- single offer type 1 -->



<!-- related offers  visible on pc only -->
<section  cclass="px-md-5 my-5 ">
  <div class="container-fluid2  d-none d-lg-block">
    <div class="row"> 
      <div class="col-12">
        <h4 class="wc mb-3">Offer you might be intrested </h4>
      </div>
      <div class="col-12">
         <div class="owl-carousel owl-hit owl-theme">

           <div class="item">
            <div class="entervas-konko2">
              <img src="img/bg-home.jpg" alt="" class="vasimg">
              <div class="overlay-light-black"></div>
              <div class="text-contain">
                <div class="row ">
                  <div class="col-12 text-right">
                    <a href="offer_single1.php">
                     <h4 class="mb-0 wc">GHC 1000</h4>
                     <small class="wc">Expires 30/11/18</small>
                   </a>
                 </div>
               </div>
             </div>
           </div>
           <a href="offer_single1.php">
           <div class="card-body3">
              <p class="mb-0">Carbon Summer Splash</p>
              <small>Post 3 pictures and 2 videos at the event and 2 follow up posts after the event</small>
          </div>
          </a>
        </div>
    </div>
      </div>
    </div>
  </div>
</section>
<!-- related offers  visible on pc only -->


@endsection