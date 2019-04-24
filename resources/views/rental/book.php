<!doctype html>
<html lang="en">
<head>
  <title>The JAMJAR| Single Venue Booking Page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">



  <!-- include navigation -->
  <?php require_once("includes/navigation.php");?>
  <!-- include navigation -->


  <!-- image slider  -->
  <section class="mt-5">
   <div class="container-fluid">
     <div class="row">
      <div class="col-12 px-0">
       <div class="owl-carousel owl-book owl-theme">
         <div class="item">
          <div class="card">
            <img src="img/bg-home.jpg" alt="" class=" rjamimg2 ">
          </div>
        </div>

        <div class="item">
          <div class="card">
            <img src="img/bg-home.jpg" alt="" class=" rjamimg2 ">
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
</section>
<!-- image slider  -->



<!--  booking details from vender -->
<section>
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-12">
        <h5 class="card-title">Location Title Here</h5>
        <span class="text-right bc">GHC 100</span>
        <hr>

        <div>
          <ul class="list-inline ">
            <li class="list-inline-item text-muted"><i aria-hidden="true" class="fa fa-map-marker"></i> East Legon</li>
            <li class="list-inline-item text-muted"><i aria-hidden="true" class="fa fa-sliders"></i> Category</li> 
          </ul>
           <p class="card-text">LocatiLorem ipsum dolor sit amet adipisi cing elit, sed do eiusmodon dolor sit amet adipisi cing elit, sed do</p>
      </div>
        </div>
    </div>

    <div class="row">
          <div class="col-12 text-center px-0">
        <button onclick="openNavbook()" type="button" class="btn btn-jam btn-lg btn-block">Book Now</button>
    </div>
        </div>
  </div>
</section>
<!--  booking details from vender -->



 <!--  Related venues -->
 <section class="my-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h4 class=" mb-4">Otther related Venues</h4>
      </div>
    </div>

    <div class="row sixdown">
      <div class="col-12 px-0">
        <div class="owl-carousel owl-hit owl-theme">

         <div class="item">
           <div class="card">
            <a href="book.php">
            <img src="img/bg-home.jpg" alt="" class="card-img-top rjamimg ">
            </a>
            <div class="card-body">
              <a href="book.php">
              <h5 class="card-title bc">Location Title Here</h5>
              <span class="text-right bc">GHC 100</span>
              </a>
              <hr>

              <div>
                <ul class="list-inline ">
                  <li class="list-inline-item text-muted"><i aria-hidden="true" class="fa fa-map-marker"></i> East Legon</li>
                  <li class="list-inline-item text-muted"><i aria-hidden="true" class="fa fa-sliders"></i> Category</li> 

                </ul>
              </div>
             <a href="book.php">
              <p class="card-text bc">LocatiLorem ipsum dolor sit amet adipisi cing elit, sed do eiusmodon</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</section>
<!--  FRelated Venues -->




<!-- content from booking  -->
<div id="myNavbook" class="overlaybook">
  <a href="javascript:void(0)" class="closebtnbook" onclick="closeNavbook()">&times;</a>
  <div class="overlay-contentbook">
    <div class="container">
    <div class="row">
      <div class="col-12 ">

        <div class="mb-5">
          <h5>Complete the booking from</h5>
        <hr>
        </div>
        

        <!-- from -->
          <form>
  <div class="form-row">
    <div class=" col-12">
   <label>Select Date Range</label>
  </div>
    <div class="form-group col-6">
      <label for="inputfromdate">From</label>
      <input type="date" class="form-control form-control-3" id="inputfromdate" placeholder="">
    </div>
    <div class="form-group col-6">
      <label for="iinputtoate">To</label>
      <input type="date" class="form-control form-control-3" id="iinputtoate" placeholder="Password">
    </div>

    <div class="form-group col-6">
      <label for="inputfromdate">Start Time</label>
      <input type="time" class="form-control form-control-3" id="inputfromdate" placeholder="">
    </div>
    <div class="form-group col-6">
      <label for="iinputtoate">End Time</label>
      <input type="time" class="form-control form-control-3" id="iinputtoate" placeholder="">
    </div>
  </div>

</form>
        <!-- form -->

        <button  type="button" class="btn btn-jam2 btn-lg btn-block">Submit</button>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- content from booking  -->

<!-- footer includes -->
<?php require_once("includes/footer.php");?>
<!-- footer includes -->

<script>
function openNavbook() {
  document.getElementById("myNavbook").style.height = "100%";
}

function closeNavbook() {
  document.getElementById("myNavbook").style.height = "0%";
}
</script>


<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "80%";
     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
  }
</script>

</body>
</html>