@extends('front_layout.app')
@section('content')

  <!-- all offers -->
  <section class="mt-6">
    <div class="container-fluid">
      
      @foreach ($notifications as $key => $notification)
      <div class="row px-3">
        <div class="col-12">
          <a href="{{$notification["href"]}}" onclick="readNotification({{$notification['id']}})">
          <h5 class="mb-0 wc">{{strtoupper($notification["title"])}}</h5>
          <p class="wc mb-0">{{ucwords($notification["body"])}}</p>
          <small class="wc2">{{$notification["created_at"]}}</small>
          </a>
        </div>
      </div>
       <hr>
      @endforeach

    {{-- <div class="row px-3">
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
</section>
<!-- all offers -->

@endsection