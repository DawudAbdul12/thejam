@extends('front_layout.app')
@section('content')

<section class="mt-7 jammasback">
  <div class="container pt-5">
    <div  class="row ">
      <div class="col-8 mx-auto centerit text-center">
        <img src="img/correct.png" class="img-fulid offericon" width="80">
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center mt-5">
        <h4 class="jamcol">Confirm Redeemed</h4>
        {{-- <small class="wc">Share Your Experience</small> --}}
      </div>
    </div>


    <div class="row">
      <div class="col-12">
          <div class="col-12 text-center px-0 pl-md-4 my-5">
              <a  href="/offer-redeemed" type="button"  class="btn btn-jam btn-lg btn-block">Confirm</a>
          </div>

       {{-- <ul class="list-inline mt-5 text-center">
              <li class="list-inline-item py-2 px-3 "><a href="#"><i class="fa wc fa-facebook fb fa-3x" aria-hidden="true"></i></a></li>
              <li class="list-inline-item py-2 px-3 "><a href="#"><i class="fa wc fa fa-twitter twi fa-3x" aria-hidden="true"></i></a></li>
              <li class="list-inline-item py-2 px-3 "><a href="#"><i class="fa wc fa-instagram ig fa-3x" aria-hidden="true"></i></a></li>
             
            </ul> --}}
      </div>
    </div>


  </div>
</section>

@endsection