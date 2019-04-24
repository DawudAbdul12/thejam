<!doctype html>
<html lang="en">
<head>
  <title>The JAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- include navigation -->
  @include('inc.navigation')
  <?php //require_once("includes/navigation.php");?>
  <!-- include navigation -->

  {{ Form::hidden('member_id',auth()->user()->id,['id'=>'member_id']) }}

   <!-- CONTENT -->
    @yield('content')

    <!-- CONTENT -->



<!-- footer includes -->
@include('inc.footer')
<?php //require_once("includes/footer.php");?>
<!-- footer includes -->

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "80%";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>


<script>
  $(document).ready(function(){

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

   function load_unseen_notification(view = '')
   {
    
    $.ajax({
     url:"/fetch_notification",
     method:"POST",
     data:{view:view},
     dataType:"json",
     success:function(data)
     {
      $('#notification_count').html(data);
      $('#notification_count_mobile').html(data);
      
      // alert(data);
    //  $('.dropdown-menu').html(data.notification);
      // if(data.unseen_notification > 0)
      // {
      //  $('#notification_count').html(data.unseen_notification);
      // }


     }
    });
   }
   // For onload 
   load_unseen_notification();
  
  // To check for new notification
   setInterval(function(){ 
    load_unseen_notification();
   }, 5000);


   // VIEW NOTIFICATIONS
   function load_notification(view = '')
   {
    
   $.ajax({
     url:"/view_notifications",
     method:"POST",
     data:{view:view},
     //dataType:"json",
     success:function(data)
     {
      $('#view-notification').html(data);
     // $('#notification_count_mobile').html(data);

      //alert(data);
      // console.log(data);
      //  for (let index = 0; index < data.length; index++) {

      //   notifications +='<div class="row px-3"> <div class="col-12"> <h5 class="mb-0 wc">'+JAM+'</h5><p class="wc mb-0">'+Favourite offer expires soon+'</p><small class="wc2">"2mins ago</small> </div></div><hr>';

      //   // const element = data[index];
      // //   console.log(data[index]['id']);
      //  }

      // console.log();
      // console.log(data);
      // $('#view-notification').html(data);
      // $('#notification_count_mobile').html(data);
      
      // alert(data);
    //  $('.dropdown-menu').html(data.notification);
      // if(data.unseen_notification > 0)
      // {
      //  $('#notification_count').html(data.unseen_notification);
      // }


     }
    });
   }

   load_notification(view = '');

   
   
  
  });

  
  // Read notification
   //##########################

  function readNotification(id)
   {
    
    $.ajax({
     url:"/read_notification",
     method:"POST",
     data:{id:id},
     //dataType:"json",
     success:function(data)
     {
      
     }
    });
   }
    // Read notification
   //##########################
  
  </script>
</body>
</html>