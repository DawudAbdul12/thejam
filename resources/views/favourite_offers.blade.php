@extends('front_layout.app')
@section('content')

  <!--  Your Favourite -->
  {{-- <section class="mt-7">
    <div class="container-fluid webmag">
      <div class="row">
        <div class="col-12">
          <h4 class="wc mb-3">Your Favourite</h4>
        </div>


      </div>

      <div class="row mb-3">
        <div class="col-12 px-0">
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
</section> --}}
<!--  Your Favourite -->


  <!-- all offers -->
  <section class="mt-7 my-md-5">
    <div class="container-fluid container-fluid2">
      <div class="row mb-3">

  @foreach ($all as $row)
          {{-- FAVOURITE --}}
      @foreach ($favourites as $favourite)
          @if($favourite['offer_id'] == $row->id &&  $favourite['member_id'] == auth()->user()->id )
        
      <div class="col-12 col-md-4 px-0 px-md-3 mb-4">
          @php 
          $image = "images/".$row['image']; 
          @endphp

          <div class="entervas-konko2">
            <img src="{{asset($image)}}" alt="" class="vasimg">
            <div class="overlay-light-black"></div>
            <div class="text-contain">
              <div class="row ">
                <div class="col-12 text-right">
                  <a href="offers/{{  $row->slug }}">
                   <h4 class="mb-0 wc">{{ ucwords($row->title) }}</h4>
                   <small class="wc">Expires {{ $row->end_date }}</small>
                 </a>
               </div>
             </div>
           </div>
         </div>
         <a href="offers/{{  $row->slug }}">
         <div class="card-body3">
            {{-- <p class="mb-0">Carbon Summer Splash</p> --}}
            <p>{{ ucfirst($row->details) }}</p>
        </div>
        </a>
      </div>

          @endif
      @endforeach
   @endforeach


    </div>

  </div>
</section>
<!-- all offers -->


<!-- load More -->
{{-- <section class="my-5">
  <div class="container pb-5">
    <div class="row">
      <div class="col-12 text-center">
        <a href="#">No More Favourite</a>
      </div>
    </div>
  </div>
</section> --}}
<!-- load More -->

@endsection