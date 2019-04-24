<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>JamJar | Dashboard</title>
    <meta name="description" content="Sticky form action bar example">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="{{asset('assets/webfont/1.6.16/webfont.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
    </script>
    <!--end::Web font -->
    <!--begin::Global Theme Styles -->
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Vendors Styles -->
   <link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="{{asset('assets/demo/default/media/img/logo/favicon.ico')}}" />
    

</head>
<!-- end::Head -->


<!-- begin::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

        <!-- BEGIN: Header -->
      @include('admin.inc.top')

        <!-- END: Header -->

        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <!-- BEGIN: Left Aside -->
            
            @include('admin.inc.side')
            
            <!-- END: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">

               @yield('content')
             
            </div>

            
        </div>
        <!-- end:: Body -->

        <!-- begin::Footer -->

        @include('admin.inc.footer')

        <!-- end::Footer -->

    </div>
    <!-- end:: Page -->

   
    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->
    <!-- begin::Quick Nav -->
    {{-- <ul class="m-nav-sticky" style="margin-top: 30px;">
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Setting" data-placement="left">
            <a href=""><i class="la la-cog"></i></a>
        </li>
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Rental Orders" data-placement="left">
            <a href="#"
                target="_blank"><i class="la la-cart-arrow-down"></i></a>
        </li>
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Membership" data-placement="left">
            <a href="#" target="_blank"><i class="la la-code-fork"></i></a>
        </li>
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
            <a href="" target="_blank"><i class="la la-life-ring"></i></a>
        </li>
    </ul> --}}
    <!-- begin::Quick Nav -->
    <!--begin::Global Theme Bundle -->
    <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!-- begin::Quick Nav -->	
        <!--begin::Global Theme Bundle -->
                    <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->
                <script src="{{asset('assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>


            <!--begin::Page Vendors -->
                    <script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
                <!--end::Page Vendors -->

            <!--begin::Page Scripts -->
                    <script src="{{asset('assets/demo/default/custom/crud/datatables/extensions/buttons.js')}}" type="text/javascript"></script>
                <!--end::Page Scripts -->

                 <!--begin::Page Scripts -->
                  <script src="{{asset('assets/demo/default/custom/crud/wizard/wizard.js')}}"></script>
                <!--end::Page Scripts -->



                 <!--begin::Page Scripts -->
                 <script src="{{asset('assets/app/js/dashboard.js')}}"></script>
                        <!--end::Page Scripts -->
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--end::Global Theme Bundle -->
    <script>
          // pull default value
          var x = $("input[name='rows']").val(); 
          var checker = $("input[name='checker']").val(); 

            $(document).ready(function() {

              

                var max_fields      = 100;
                // for ingredients
                var wrapper         = $(".location"); 
                var add_button      = $(".add_form_field"); 
               // var x = 1; 
              //  var x = $(".rows"); 
            
                //var y = $("#steps").val(); 
            
                // LOCATION
                $(add_button).click(function(e){ 
                    e.preventDefault();
                    if(x < max_fields){ 
                        x++; 
    
                        $(wrapper).append('<div id="'+ x +'" ><div class="form-group m-form__group row"><label for="bus_address" class="form-control-label">*Business Address :</label><div class="col-xl-9 col-lg-9"><input class="form-control m-input" id="bus_address" placeholder=" Please enter your Business Location" required="" name="bus_address[]" type="text" value=""></div></div><div class="form-group m-form__group row"><div class="col-lg-6 m-form__group-sub"><label for="latitute" class="form-control-label">*Latitute :</label><input class="form-control m-input" id="latitude" placeholder=" Latitude" required="" name="latitude[]" type="text" value=""></div> <div class="col-lg-6 m-form__group-sub"><label for="longitude" class="form-control-label">*Longitude :</label> <input class="form-control m-input" id="longitude" placeholder=" longitude" required="" name="longitude[]" type="text" value=""></div></div><div class="float-right"><a  href="javascript:void(0);" class="delete" onclick="deletes('+x+')"><i class="fa fa-remove" style="font-size:20px;color:red"></i>Remove</a></div> <hr class="my-4"> </div>');
                        // $(wrapper).append('<div class="form-group"><label class="col-xs-12" for="example-tags1">Enter Ingredients</label>  <div class="col-xs-11"><textarea class="form-control"   rows="1" placeholder="" required="" name="ingredients[]"></textarea></div><a href="javascript:void(0);" class="delete"><i class="fa fa-remove" style="font-size:20px;color:red"></i></a></div>'); //add input box
                    }
                    else
                    {
                    alert('You Reached the limits')
                    }
                });

            
                // LOCATION
                // $(wrapper).on("click",".delete", function(e){ 
                //     e.preventDefault(); 
                //     $(this).parent('div').remove(); x--;
                // })
               
            
            });

           
            function deletes(z){

            if(x > 1){
                // take ID
                $('#'+z).remove();
                // decrease
                x--;
                // check whether is an update or add
                if(checker == "update"){
                    var formData = new FormData();
					formData.append('id',z);
                    $.ajaxSetup({
					 headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
				     });


					 $.ajax({
						method: 'POST',
						url: '/delete_location',
						data:formData,
						cache:false,
						contentType: false,
						processData: false,
						success: function(data) {
						   alert(data);
                        },
						error: console.error
					});
                 //alert('Yess');
                } 

               } else {

                alert('It cannot be remove');
            }
                  
        }
           
      </script>

<script>
        function loadLocation(){

         var vendor_id = $('#vendor').val();

          var formData = new FormData();
                 formData.append('vendor_id',vendor_id);
                 $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
                  });


                  $.ajax({
                     method: 'POST',
                     url: '/searchlocation',
                     data:formData,
                     cache:false,
                     contentType: false,
                     processData: false,
                     success: function(data) {
                        
                         var ddl = $("#location");  
                         ddl.html("<option> Select Location </option>");
                        //  if(document.getElementById("current_location")){
                            for (k = 0; k < data.length; k++){
                            ddl.append("<option value='" + data[k]['id']+ "'>" + data[k]['bus_location'] + "</option>");

                          }

                        //  }else{
                        //     currentLoc = document.getElementById("current_location").value 
                        //     for (k = 0; k < data.length; k++){
                        //         if(currentLoc == data[k]['id']){
                        //     ddl.append("<option value='" + data[k]['id']+ "' selected='selected' >" + data[k]['bus_location'] + "</option>");
                        //         }else{
                        //     ddl.append("<option value='" + data[k]['id']+ "'>" + data[k]['bus_location'] + "</option>");

                        //         }
                        //   }

                        //  }

                         
                         
                     //  for (k = 0; k < data.length; k++){
                     //    console.log(data[k]['id']);
                     //  }

                     },
                     error: console.error
                 });
        }

       </script>
      


</body>
<!-- end::Body -->
</html>
