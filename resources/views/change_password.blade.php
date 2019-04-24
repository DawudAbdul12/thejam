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
            <h3 class="wc mb-5">Change Password</h3>
            @include('message')
            <form action="/editpassword" method="POST">
              @csrf
             <div class="form-row">
              <div class="form-group col-12 col-md-6 ">
                <input type="password" class="form-control form-controltino-log{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password" required>
              </div>

                <div class="form-group col-12 col-md-6 ">
                <input type="password" class="form-control form-controltino-log{{ $errors->has('password') ? ' is-invalid' : '' }}" name="cpassword" placeholder="Confirm Password" required>
              </div>

          <div class="col-12 text-center px-0 py-5">
          <button type="submit" class="btn btn-jam btn-lg btn-block">Update Password</button>
          </div>
        </form>

        </div>

      </div>
    </div>



  </div>
</div>
</section>
<!-- main content -->


@endsection