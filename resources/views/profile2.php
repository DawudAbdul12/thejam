@extends('front_layout.app')
@section('content')
  <!-- all offers -->
  <section class="jambacks">
    <div class="container-fluid profileback">
      <div class="row">
        <div class="col-12 text-center ">
          <img src="img/user.png" alt="buy orders" width="100" class="rounded-circle border">
          <h3 class="wc mb-0 mt-3">John Doe Kofi</h3>
          <p class="wc">johndoekofi@gmail.com</p>
          <a href="edit_profile.php">Edit</a>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="row text-center pt-4">
        <div class="col-6">
          <p class="wc mb-0">Offers Redeemed</p>
          <p class="wc2 mb-0">25</p>
        </div>

        <div class="col-6">
          <p class="wc mb-0">Rented Items</p>
          <p class="wc2 mb-0">08</p>
        </div>
      </div>
      <hr>
    </div>



    <div class="container">
      <div class="row px-3">
        <div class="col-12 ">
          <p class="wc mb-4 ">Social Following</p>
        </div>
        <div class="col-4 text-center">
             <i class="fa wc fa-facebook fb fa-2x" aria-hidden="true"></i>
          <p class="wc2 mb-0">5000</p>

        </div>
       <div class="col-4 text-center">
          <i class="fa wc fa fa-twitter twi fa-2x" aria-hidden="true"></i>
          <p class="wc2 mb-0">2058</p>

        </div>
       <div class="col-4 text-center">
          <i class="fa wc fa-instagram ig fa-2x" aria-hidden="true"></i>
          <p class="wc2 mb-0">7603</p>

        </div>
      </div>
      <hr>
    </div>
  </section>
  <!-- all offers -->

@endsection