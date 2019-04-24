@extends('front_layout.app')
@section('content')

  <!--  Your Favourite -->
  <section class="mt-7">
    <div class="container-fluid webmag2">
      <div class="row">
        <div class="col-9">
          <h4 class="wc mb-3">Your Favourite</h4>
        </div>

        <div class="col-3 text-right">
          <a href="/favourite">View All</a></div>
      </div>

      <div class="row mb-3">
        <div class="col-12 px-0">
          <div class="owl-carousel owl-hit owl-theme">

              @foreach ($all as $row)
               {{-- FAVOURITE --}}
              @foreach ($favourites as $favourite)
    
              @if($favourite['offer_id'] == $row->id &&  $favourite['member_id'] == auth()->user()->id )
             
              <div class="item">
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
                            <h5 class="mb-0 wc">{{ ucwords($row->title) }}</h5>
                            <small class="wc">Expires {{ $row->end_date }}</small>
                         </a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <a href="offers/{{  $row->slug }}">
                 <div class="card-body3">
                    {{-- <p class="mb-0">Carbon Summer Splash</p> --}}
                    <p> {{ ucfirst($row->details) }}</p>
                </div>
                </a>
              </div>
      
              @endif

            @endforeach
        @endforeach
      
    </div>

  </div>
</div>

</div>

</section>
<!--  Your Favourite -->


<!-- Featured Offers -->
<section class="my-md-5">
  <div class="container-fluid container-fluid2">
    <div class="row">
      <div class="col-12">
        <h4 class="wc mb-3">Featured Offers</h4>
      </div>
    </div>

  <div class="row mb-3">

     @foreach ($featured as $row )

      <div class="col-12 col-md-4 px-0  px-md-2 mb-3">

        <div class="entervas-konko">
           <a href="/offers/{{  $row->slug }}">
             @php 
              $checkFavourite = false;
              $id =  $row->id;
             $image = "images/".$row['image']; 
             @endphp
					<img src="{{asset($image)}}" alt="" class="vasimg">
        </a>
          <div class="overlay-light-black"></div>
          <div class="text-contain">
           <a href="/offers/{{  $row->slug }}">
            <h5 class="mb-0 wc">{{ ucwords($row->title) }}</h5>
            <small class="wc">Expires {{ $row->end_date }}</small>
          </a>

          <!--  <div class="container-fluid"> -->
            <div class="row fivet">
              <div class="col-10">
              <a href="/offers/{{  $row->slug }}">
                  <p>{{ ucfirst($row->details) }}</p>
                </a>
              </div>

              <div class="col-2"> <a  onclick="myFavourite({{$id}})" id="{{$id}}">  
                  @foreach ($favourites as $favourite)
    
                  @if($favourite['offer_id'] == $row->id &&  $favourite['member_id'] == auth()->user()->id )
                  @php $checkFavourite = true;  @endphp
                  <i class="fa fa-heart fa-2x wc" aria-hidden="true"></i>
                  @endif
    
                  @endforeach
                  @if($checkFavourite == false)
                  <i class="fa fa-heart-o fa-2x wc" aria-hidden="true"></i>  
                  @endif
                
                </a></div>
              <!--  </div> -->
            </div>
          </div>


        </div>


      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- Featured Offers -->


<!-- all offers -->
<section>
  <div class="container-fluid2">

    <div class="row mb-3">
      <div class="col-12">
<h4 class="wc mb-3">See All Offers    </h4>
      </div>


       @foreach ($approved as $row )
       
       <div class="col-12 col-md-4 px-0 px-md-3 mb-4">
        <div class="entervas-konko2">
        @php  
          $checkFavourite = false;
          $id =  $row->id;
          $image = "images/".$row['image'];  
        @endphp
					<img src="{{asset($image)}}" alt="" class="vasimg">
          <div class="overlay-light-black"></div>
          <div class="text-contain">
            <div class="row ">
              <div class="col-10">
              <a href="offers/{{  $row->slug }}">
                 <h5 class="mb-0 wc">{{ ucwords($row->title) }}</h5>
                 <small class="wc">Expires {{ $row->end_date }}</small>
               </a>
             </div>
             <div class="col-2"> <a  onclick="myFavourite({{$id}})" id="{{$id}}">  
              @foreach ($favourites as $favourite)

              @if($favourite['offer_id'] == $row->id &&  $favourite['member_id'] == auth()->user()->id )
              @php $checkFavourite = true;  @endphp
              <i class="fa fa-heart fa-2x wc" aria-hidden="true"></i>
              @endif

              @endforeach
              @if($checkFavourite == false)
              <i class="fa fa-heart-o fa-2x wc" aria-hidden="true"></i>  
             @endif
            
            </a></div>
           </div>
         </div>
       </div>
       <a href="offers/{{$row->slug }}">
       <div class="card-body2">
        <p>{{ ucfirst($row->details) }}</p>
      </div>
      </a>
    </div>
    @endforeach

     
  </div>



</div>
</section>
<!-- all offers -->


<!-- load More -->
<section class="my-5">
  {{-- <div class="container pb-5">
    <div class="row">
      <div class="col-12 text-center">
        <a href="all_offers.php">Load More</a>
      </div>
    </div>

  </div> --}}
</section>
<!-- load More -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
          <hr>
      </div>
    </div>
  </div>
</section>

@endsection