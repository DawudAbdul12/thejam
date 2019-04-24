@extends('front_layout.app')
@section('content')
  {{-- include file from inc folder --}}
 @include('inc.profile_banner')

  <!-- main content -->
  <section class="my-5">
    <div class="container">
      <div class="row">
      {{-- include file from inc folder --}}
      @include('inc.profile_side_bar')

      <div class="col-12 col-md-9">
        <div class="row pt-4">

          <div class="col-12 pl-md-5">
            <h3 class="wc mb-5"> Profile</h3>
            @include('message')
            <form action="/editprofile" method="POST" >
              @csrf
             <div class="form-row">
              <div class="form-group col-12 col-md-6 ">
              <input type="text" class="form-control form-controltino" name="fname" placeholder="Firstname" value="{{ ucwords(auth()->user()->fname) }}">
              </div>

              <div class="form-group col-12 col-md-6 ">
                <input type="text" class="form-control form-controltino" name="lname" placeholder="Lastname"  value="{{ ucwords(auth()->user()->sname) }}">
              </div>


              <div class="form-group col-12 col-md-6">
                <input type="email" class="form-control form-controltino" name="email" placeholder="Your Email" value="{{ ucwords(auth()->user()->email) }}">
              </div>



              <div class="form-group col-12 col-md-6">
                <input type="text" class="form-control form-controltino" name="pnumber" placeholder="Number" value="{{ ucwords(auth()->user()->phone_number) }}">
              </div>

              <div class="form-group col-12 col-md-6">
                <input type="date" class="form-control form-controltino" name="dob" placeholder="DOB" value="{{ ucwords(auth()->user()->dob) }}">
              </div>



              <div class="form-group col-12 col-md-6">
                <input type="text" class="form-control form-controltino" id="subject" placeholder="Joined on" value="{{ ucwords(auth()->user()->created_at) }}">
              </div>



              <div class="form-group col-12">
                <textarea class="form-control form-controltino input-lg" rows="4" placeholder="Bio " name="details" >{{ ucfirst(auth()->user()->details) }}</textarea>
              </div>
            </div>
         
          <div class="col-12 text-center px-0 py-5">
            <button type="submit"  class="btn btn-jam btn-lg btn-block">Update Profile</button>
          </div>
        </div>
      </form>

      </div>
    </div>



  </div>
</div>
</section>
<!-- main content -->


@endsection