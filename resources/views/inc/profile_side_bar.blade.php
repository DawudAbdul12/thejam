  
        <div class="col-12 col-md-3">
                <div class="">
                    @php  $image = "profile_pic/".auth()->user()->profile_pic;  @endphp
                <img src="{{asset($image)}}" alt="{{ auth()->user()->fname }}" width="120" class="rounded-circle border ">
                 <h3 class="wc">{{ auth()->user()->fname." " .auth()->user()->sname}} </h3>
               </div>
               <div class="pt-5">
                 <div class="list-group">

                   <a href="/profile" class="list-group-item list-group-item-action {{ Request::is('profile') ? 'active' : null }}">MY PROFILE</a>
                   <a href="/redeem-history" class="list-group-item list-group-item-action {{ Request::is('redeem-history') ? 'active' : null }}">OFFER HISTORY</a>
                   <a href="/social-media" class="list-group-item list-group-item-action {{ Request::is('social-media') ? 'active' : null }}">SOCIAL MEDIA</a>
                   <a href="/change-password" class="list-group-item list-group-item-action {{ Request::is('change-password') ? 'active' : null }} ">CHANGE PASSWORD</a>
       

                 </div>
               </div>
             </div>