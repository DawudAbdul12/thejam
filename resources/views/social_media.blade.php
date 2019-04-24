@extends('front_layout.app')
@section('content')

  <!-- header image -->
 {{-- include file from inc folder --}}
 @include('inc.profile_banner')
  <!-- header image -->

  <!-- main content -->
  <section class="my-5">
    <div class="container">
      <div class="row">

    {{-- include file from inc folder --}}
    @include('inc.profile_side_bar')

      <div class="col-12 col-md-9">
        <div class="row pt-4">

          <div class="col-12 pl-md-5">
            <h3 class="wc mb-5">Social Media Following</h3>

            <div class="row">


              <div class="col-12 col-md-4">
                 
                <button type="button" class="btn btn-primary "><span class="px-3"><i class="fa fa-facebook " aria-hidden="true"></i></span>Facebook Connect</button>
                <p class="wc mt-3">5K <span>Followers</span></p>
              </div>
              <div class="col-12 col-md-4">
                  <button type="button" class="btn btn-twitter"><span class="px-3"><i class="fa fa-twitter " aria-hidden="true"></i></span>Twitter Connect</button>
                <p class="wc mt-3">1K <span>Followers</span></p>
              </div>
              <div class="col-12 col-md-4">
                 <button type="button" class="btn btn-ig"><span class="px-3"><i class="fa fa-instagram " aria-hidden="true"></i></span>Instagram Connect</button>
                <p class="wc mt-3">10K <span>Followers</span></p>
              </div>


            </div>


          </div>

        </div>
      </div>



    </div>
  </div>
</section>
<!-- main content -->


@endsection