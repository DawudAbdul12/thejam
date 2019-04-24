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

                  @php  
                    $id = $offer[0]->id;
                    $checkFavourite = false;
                    $image = "images/".$offer[0]->image;
                   @endphp
				       	<img src="{{asset($image)}}" alt="" class="vasimg">

                <div class="overlay-light-black"></div>
                <div class="text-contain">
                  <ul class="list-inline ">
                   <!--  <li class="list-inline-item py-1  wc "> <img src="img/pizzahut.jpg" alt="" class="off_brand_logo"></li> -->
                    {{-- <li class="list-inline-item py-1  wc "><h4>Pizza Hut</h4></li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="row px-3">
            <div class="col-10">
              <h5 class="mb-0 wc">{{ ucwords($offer[0]->title) }}</h5>
              <small class="wc">Expires {{ $offer[0]->end_date }}</small>
            </div>
            <div class="col-2">
              <a onclick="myFavourite({{$id}})" id="{{$id}}">
                  @foreach ($favourites as $favourite)
    
                  @if($favourite['offer_id'] == $id &&  $favourite['member_id'] == auth()->user()->id )
                  @php $checkFavourite = true;  @endphp
                  <i class="fa fa-heart fa-2x wc" aria-hidden="true"></i>
                  @endif
    
                  @endforeach
                  @if($checkFavourite == false)
                  <i class="fa fa-heart-o fa-2x wc" aria-hidden="true"></i>  
                  @endif
                
              </a></div>
          </div>
          <hr>

  
          <div class="row px-3">
           <div class="col-12"> 
             <p class="wc">{{ ucfirst($offer[0]->details) }}</p>
           </div>
         </div>
         <hr>


         <!-- <div class="row px-3 mb-5">
           <div class="col-12">
            <p class="wc">imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
           </div>
         </div> -->
       </div>
       <!-- right side content -->

       <!-- left side content -->
       <div class="col-12 col-md-5">
        <div class="row">
            @php 
            foreach ($locations as $key => $row) {
              if($row['id'] == $offer[0]->location){
                 $latitude = $row['latitude'];
                 $longitude = $row['long'];
                 $q=  $latitude.",".$longitude;
              }
             
            }
    
            @endphp
    
      <div class="col-12 px-0 pl-md-4" >
       
      <iframe src="http://maps.google.com/maps?q={{ $q }}&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe>
     
    
      {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.5247523383287!2d-0.16072678528623885!3d5.6369282959137275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b0cf34200b3%3A0xeb1115bb4e9b0a53!2sEffect+Studios!5e0!3m2!1sen!2sgh!4v1549589116763" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
       --}}
    </div>
    <input type="hidden"  id="latitude" value="{{$latitude}}">
     <input type ="hidden" id="longititude" value="{{$longitude}}">
        </div>

      <div class="row mb-5">
       <div class="col-12 text-center px-0 pl-md-4 my-5">
        <button type="button" onclick="redeemOffer()" class="btn btn-jam btn-lg btn-block">Redeem</button>
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
        @foreach ($related as $row)
          @php 
          $image = "images/".$row['image']; 
          @endphp
        <div class="item">
            <div class="entervas-konko2">

           <img src="{{asset($image)}}" alt="" class="vasimg">

          <div class="overlay-light-black"></div>
          <div class="text-contain">
            <div class="row ">
              <div class="col-10">
                <a href="/offers/{{  $row->slug }}">
                 <h5 class="mb-0 wc">{{ ucwords($row->title) }}</h5>
                 <small class="wc">Expires {{ $row->end_date }}</small>
               </a>
             </div>
             <div class="col-2">
                <a onclick="myFavourite({{$row->id}})" id="{{$row->id}}">
                    @foreach ($favourites as $favourite)
      
                    @if($favourite['offer_id'] == $row->id &&  $favourite['member_id'] == auth()->user()->id )
                    @php $checkFavourite = true;  @endphp
                    <i class="fa fa-heart fa-2x wc" aria-hidden="true"></i>
                    @endif
      
                    @endforeach
                    @if($checkFavourite == false)
                    <i class="fa fa-heart-o fa-2x wc" aria-hidden="true"></i>  
                    @endif
                  
                </a>
               
            </div>
           </div>
         </div>
       </div>
       <a href="/offers/{{  $row->slug }}">
       <div class="card-body2">
        <p>{{ ucfirst($row->details) }}</p>
      </div>
      </a>
     </div>

     @endforeach

    </div>
      </div>
    </div>
  </div>
</section>
<!-- related offers  visible on pc only -->

<script src="{{asset('js/fence.js')}}"></script>
@endsection