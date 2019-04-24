<!doctype html>
<html lang="en">
<head>
  <title>The JAM | Edit Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">



  <!-- include navigation -->
  <?php require_once("includes/navigation.php");?>
  <!-- include navigation -->





  <!-- all offers -->
  <section class="jambacks">
    <div class="container-fluid profileback3">
      <div class="row">
        <div class="col-12 text-center ">
          <img src="img/user.png" alt="buy orders" width="100" class="rounded-circle border">
        </div>
      </div>
    </div>



    <div class="container">
      <div class="row text-center pt-4">
        
        <div class="col-12">
          <form action="" method="POST" id="send_mail">
         <div class="form-row">
         <div class="form-group col-12 col-md-6">
          <input type="text" class=" form-control-3" id="sender_name" placeholder="Your Name">
        </div>


        <div class="form-group col-12 col-md-6">
          <input type="email" class="form-control-3" id="mail" placeholder="Your Email">
        </div>



        <div class="form-group col-12">
          <input type="text" class="form-control-3" id="subject" placeholder="Number">
        </div>


        <div class="form-group col-12">
          <textarea class="form-control-3 input-lg" rows="4" placeholder="Bio " id="message" ></textarea>
        </div>
      </div>
    </form>
        </div>
      </div>



        <div class="row py-4">
          <div class="col-6">
            <p class="">Account Type</p>
          </div>
          <div class="col-6 text-right">
            <p class="wc2">Basic</p>
          </div>
        </div>


        <div class="row">
          <div class="col-12 text-center px-0">
        <button type="button" class="btn btn-jam btn-lg btn-block">Update Profile</button>
    </div>
        </div>

    </div>


  </section>
  <!-- all offers -->




  <!-- footer includes -->
  <?php require_once("includes/footer.php");?>
  <!-- footer includes -->




  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "80%";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

</body>
</html>