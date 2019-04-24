@extends('admin.layout.app')

@section('content')


<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="d-flex align-items-center">
 		<div class="mr-auto">
 			<h3 class="m-subheader__title m-subheader__title--separator">Update a Vendor</h3>			
							<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
						   <i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<span class="m-nav__link-text"> Vendor</span>
							</a>
						</li>
										
									</ul>
			 		</div>
  		<div>
  							<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
					<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
						<i class="la la-plus m--hide"></i>
						<i class="la la-ellipsis-h"></i>
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
										<li class="m-nav__section m-nav__section--first m--hide">
											<span class="m-nav__section-text">Quick Actions</span>
										</li>

										<li class="m-nav__item">
											<a href="#" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-share"></i>
											<span class="m-nav__link-text">All Vendor</span>
											</a>
										</li>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			  		</div>
	</div>
</div>
<!-- END: Subheader -->		

<div class="m-content">
	<!--Begin::Main Portlet-->
<div class="m-portlet m-portlet--full-height">
	<!--begin: Portlet Head-->
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Form Wizard
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
                        <i class="flaticon-info m--icon-font-size-lg3"></i>
                    </a>    
                </li>   
            </ul>
        </div> 
	</div>
	<!--end: Portlet Head-->

	<!--begin: Portlet Body-->
	<div class="m-portlet__body m-portlet__body--no-padding">

		<!--begin: Form Wizard-->
		<div class="m-wizard m-wizard--4 m-wizard--brand" id="m_wizard">
			<div class="row m-row--no-padding">
				<div class="col-xl-3 col-lg-12 m--padding-top-20 m--padding-bottom-15">
					<!--begin: Form Wizard Head -->
					<div class="m-wizard__head">	 

			            <!--begin: Form Wizard Nav -->
						<div class="m-wizard__nav">
							<div class="m-wizard__steps">
								<div class="m-wizard__step m-wizard__step--done" m-wizard-target="m_wizard_form_step_1">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">							 
											<span><span>1</span></span>							 
										</a>										 
										<div class="m-wizard__step-label">
											Account Details										
										</div>
										<div class="m-wizard__step-icon"><i class="la la-check"></i></div>
									</div>
								</div>
								<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">							 
											<span><span>2</span></span>							 
										</a>										
										<div class="m-wizard__step-label">
											About Your Business
										</div>
										<div class="m-wizard__step-icon"><i class="la la-check"></i></div>
									</div>
								</div>
								<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_3">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">							 
											<span><span>3</span></span>							 
										</a>										
										<div class="m-wizard__step-label">
											Location Setup
										</div>
										<div class="m-wizard__step-icon"><i class="la la-check"></i></div>
									</div>
								</div>
								<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
									<div class="m-wizard__step-info">
										<a href="#" class="m-wizard__step-number">							 
											<span><span>4</span></span>							 
										</a>										
										<div class="m-wizard__step-label">
											Accout Setup
										</div>
										<div class="m-wizard__step-icon"><i class="la la-check"></i></div>
									</div>
								</div>								 
							</div>
						</div>	
						<!--end: Form Wizard Nav -->
					</div>
					<!--end: Form Wizard Head -->					
				</div>
				<div class="col-xl-9 col-lg-12">
					<!--begin: Form Wizard Form-->
					<div class="m-wizard__form">
						
						{{-- <form class="m-form m-form--label-align-left- m-form--state-" id="m_form"> --}}
                	{!! Form::open(['action' => 'VendorController@create', 'method' => 'POST','files' => true,'class'=> 'm-form m-form--label-align-left- m-form--state','id'=>'m_form']) !!}
							<!--begin: Form Body -->
							<div class="m-portlet__body m-portlet__body--no-padding">
								<!--begin: Form Wizard Step 1-->
								<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">

									<div class="m-form__section m-form__section--first">
										<div class="m-form__heading">
											<h3 class="m-form__heading-title">Account Details</h3>
										</div>
                                      


										<div class="form-group m-form__group row">
                                     {{ Form::label('name', '*First Name:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                     {{ Form::text('fname',$vendor->fname,['class'=>'form-control m-input','id'=>'fname','placeholder'=>" Please enter first name", 'required' => '']) }}

									  {{ Form::hidden('vendor_id',$vendor->id,['class'=>'form-control m-input','id'=>'vendor_id' ]) }}

												<span class="m-form__help">Please enter your first name</span>
											</div>
										</div>


                                        	<div class="form-group m-form__group row">
                                     {{ Form::label('name', '*Last Name:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                     {{ Form::text('lname',$vendor->lname,['class'=>'form-control m-input', 'id'=>'lname','placeholder'=>" Please enter Last name", 'required' => '']) }}
												{{-- <input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone"> --}}
												<span class="m-form__help">Please enter your Last name</span>
											</div>
										</div>

                                    
                                        	<div class="form-group m-form__group row">
                                     {{ Form::label('name', '*Personal Email:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                     {{ Form::email('pemail',$vendor->p_email,['class'=>'form-control m-input','id'=>'pemail','placeholder'=>" Please enter Personal Email", 'required' => '']) }}
												{{-- <input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone"> --}}
												<span class="m-form__help">Please enter your Personal Email</span>
											</div>
										</div>

                                        <div class="form-group m-form__group row">
                                     {{ Form::label('name', '*PhoneNumber:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                            <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                     {{ Form::text('phone',$vendor->p_phone,['class'=>'form-control m-input','id'=>'p_phone','placeholder'=>"Enter your valid phonenumber", 'required' => '']) }}
												{{-- <input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone"> --}}
                                            </div>
												<span class="m-form__help">Enter your valid phonenumber</span>
											</div>
										</div>

									</div>


								</div>
								<!--end: Form Wizard Step 1-->

								<!--begin: Form Wizard Step 2-->
								<div class="m-wizard__form-step" id="m_wizard_form_step_2">

									 <div class="m-form__section m-form__section--first">
										<div class="m-form__heading">
											<h3 class="m-form__heading-title">About Your Business</h3>
										</div>
                                    
										<div class="form-group m-form__group row">
                                     {{ Form::label('name_business', '* Name of Business:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                     {{ Form::text('name_business',$vendor->name_business,['class'=>'form-control m-input','id'=>'name_business','placeholder'=>" Please enter Your Business Name", 'required' => '']) }}
												<span class="m-form__help">Please enter your Business name</span>
											</div>
										</div>


                                        	<div class="form-group m-form__group row">
                                     {{ Form::label('registered_company_entitie', '*Registered Company Entity:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                     {{ Form::text('registered_company_entitie',$vendor->registered_company_entitie,['class'=>'form-control m-input','id'=>'registered_company_entitie','placeholder'=>" Please entRegistered Company Entity", 'required' => '']) }}
												{{-- <input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone"> --}}
												<span class="m-form__help">Please enter your Registered Company Entity</span>
											</div>
										</div>

                                    
                                        	<div class="form-group m-form__group row">
                                     {{ Form::label('name', '*Business Email:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                     {{ Form::email('business_email',$vendor->business_email,['class'=>'form-control m-input','id'=>'business_email','placeholder'=>" Please enter Business_email", 'required' => '']) }}
												{{-- <input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone"> --}}
												<span class="m-form__help">Please enter your Business Email</span>
											</div>
										</div>

                                        <div class="form-group m-form__group row">
                                     {{ Form::label('registered_address', '*Registered Company Address:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
											<div class="col-xl-9 col-lg-9">
                                            <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                     {{ Form::text('registered_address',$vendor->registered_address,['class'=>'form-control m-input','id'=>'registered_address','placeholder'=>"Enter your Registered Address ", 'required' => '']) }}
												{{-- <input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone"> --}}
                                            </div>
												<span class="m-form__help">Enter your Registered Address</span>
											</div>
										</div>
                                      <div class="form-group m-form__group row">
                          {{ Form::label('details', '* Details:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::textarea('details',$vendor->details,['class'=>'form-control m-input','id'=>'details','placeholder'=>"Detail", 'required' => '']) }}
                                                            </div>
                                                    </div>
									</div>


								</div>
								<!--end: Form Wizard Step 2-->

								<!--begin: Form Wizard Step 3-->
									<div class="m-wizard__form-step" id="m_wizard_form_step_3">
                                    	<div class="m-form__heading">
											<h3 class="m-form__heading-title">Location Setup</h3>
										</div>
									<div class="m-separator m-separator--dashed m-separator--lg"></div>
									<div class="m-form__section location">
										<div class="float-right"><a href="javascrip:void(0);" class="add_form_field"><i class="fa fa-plus" aria-hidden="true"></i> Add New </a></div><br>
										{{-- DEFAULT VALUES --}}
										<input required="" name="rows" type="hidden" value="{{count($locations)}}">
										<input required="" name="checker" type="hidden" value="update">

										@php 
										foreach($locations as $key => $location):
										@endphp
								<div id="{{$location->id}}" >
                                        <div class="form-group m-form__group row">
                                     {{ Form::label('bus_address', '*Business Address :', ['class' => 'form-control-label']) }}
											<div class="col-xl-9 col-lg-9">
                                     {{ Form::text('bus_address',$location->bus_location,['class'=>'form-control m-input','id'=>''.$location->id.'bus_address','placeholder'=>" Please enter your Business Location", 'onkeydown'=>'editLocation('.$location->id.')']) }}
											</div>
										</div>
										
										<div class="form-group m-form__group row">
											<div class="col-lg-6 m-form__group-sub">
                                            {{ Form::label('latitute', '*Latitute :', ['class' => 'form-control-label']) }}
                                            {{ Form::text('latitude',$location->latitude,['class'=>'form-control m-input','id'=>''.$location->id.'latitude','placeholder'=>" Latitude", 'onkeydown'=>'editLocation('.$location->id.')']) }}
											</div>
                                            <div class="col-lg-6 m-form__group-sub">
                                            {{ Form::label('longitude', '*Longitude :', ['class' => 'form-control-label']) }}
											{{ Form::text('longitude',$location->long,['class'=>'form-control m-input','id'=>''.$location->id.'longitude','placeholder'=>" longitude", 'onkeydown'=>'editLocation('.$location->id.')']) }}
											<div class="float-right"><br/><a  href="javascript:void(0);" class="delete" onclick="deletes({{$location->id}})"><i class="fa fa-remove" style="font-size:20px;color:red"></i>Remove</a></div>
											</div>

											<hr class="my-4">
										</div>
									</div>

										@php 
									endforeach;
										@endphp
										
									</div>
								
								  </div>
								<!--end: Form Wizard Step 3-->



								<!--begin: Form Wizard Step 4-->
								<div class="m-wizard__form-step" id="m_wizard_form_step_4">
									<!--begin::Section-->    
                                 <div class="m-form__heading">
	                                <h3 class="m-form__heading-title">Account Setup</h3>
	                            </div>
                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
	                                <div class="m-form__section">

									  @php 
										$approved = "";
										$pending ="";
										$blocked = "";
										if($vendor->status =="approved"){
											$approved = "true";
										}elseif($vendor->status =="pending"){
											$pending = "true";
										}elseif($vendor->status =="blocked"){
											$blocked = "true";
										}

									@endphp
	                                   
	                                    <div class="form-group m-form__group">
	                                        <div class="row">
	                                            <div class="col-lg-4">
	                                                <label class="m-option">
	                                                <span class="m-option__control">
	                                                <span class="m-radio m-radio--state-brand">
	                                                 {{ Form::radio('status', 'pending',$pending) }} 
	                                                <span></span>
	                                                </span>
	                                                </span>
	                                                <span class="m-option__label">
	                                                <span class="m-option__head">                                                
	                                                <span class="m-option__title">
	                                                Pending            
	                                                </span>
	                                                <!-- <span class="m-option__focus">
	                                                Free                    
	                                                </span>                                               -->
	                                                </span>
	                                                <!-- <span class="m-option__body">
	                                                Estimated 14-20 Day Shipping 
	                                                (&nbsp;Duties end taxes may be due 
	                                                upon delivery&nbsp;)
	                                                </span> -->
	                                                </span>     
	                                                </label> 
	                                            </div>
	                                            <div class="col-lg-4">
	                                                <label class="m-option">
	                                                <span class="m-option__control">
	                                                <span class="m-radio m-radio--state-brand">
	                                                  {{ Form::radio('status', 'approved', $approved) }} 
	                                                <span></span>
	                                                </span>
	                                                </span>
	                                                <span class="m-option__label">
	                                                <span class="m-option__head">                                                
	                                                <span class="m-option__title">
	                                                 Approve A Vendor              
	                                                </span>
	                                                <!-- <span class="m-option__focus">
	                                                $&nbsp;8.00                 
	                                                </span>                                               -->
	                                                </span>
	                                                <!-- <span class="m-option__body">
	                                                Estimated 2-5 Day Shipping
	                                                (&nbsp;Duties end taxes may be due
	                                                upon delivery&nbsp;)
	                                                </span> -->
	                                                </span>     
	                                                </label> 
	                                            </div>
                                                 <div class="col-lg-4">
	                                                <label class="m-option">
	                                                <span class="m-option__control">
	                                                <span class="m-radio m-radio--state-brand">
	                                                  {{ Form::radio('status', 'blocked', $blocked) }} 
	                                                <span></span>
	                                                </span>
	                                                </span>
	                                                <span class="m-option__label">
	                                                <span class="m-option__head">                                                
	                                                <span class="m-option__title">
	                                                Block a vendor             
	                                                </span>
	                                                <!-- <span class="m-option__focus">
	                                                $&nbsp;8.00                 
	                                                </span>                                               -->
	                                                </span>
	                                                <!-- <span class="m-option__body">
	                                                Estimated 2-5 Day Shipping
	                                                (&nbsp;Duties end taxes may be due
	                                                upon delivery&nbsp;)
	                                                </span> -->
	                                                </span>     
	                                                </label> 
	                                            </div>
	                                        </div>
	                                        <div class="m-form__help">
	                                            <!--must use this helper element to display error message for the options-->
	                                        </div>
	                                    </div>
	                                </div>

                                      


                                   
									<!--end::Section-->

									<!--end::Section-->	                
									<div class="m-separator m-separator--dashed m-separator--lg"></div>
									<div class="form-group m-form__group m-form__group--sm row">
										<div class="col-xl-12">
											<div class="m-checkbox-inline">
												<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
												@php 
                                                 if($vendor->accept == 1){
													$copyright = "true";
												 }else{
													$copyright = "";
												 }
												
												@endphp
                                                  {{ Form::checkbox('accept', '1',$copyright) }} 
													{{-- <input type="checkbox" name="accept" value="1">  --}}
														Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement 
													<span></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<!--end: Form Wizard Step 4-->									 
							</div>
							<!--end: Form Body -->

							<!--begin: Form Actions -->
							<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">								
								<div class="m-form__actions">
									<div class="row">
										<div class="col-lg-6 m--align-left">
											<a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
												<span>
													<i class="la la-arrow-left"></i>&nbsp;&nbsp;
													<span>Back</span>
												</span>
											</a>
										</div>
										<div class="col-lg-6 m--align-right">

											<button onclick="myFunction()" class='btn btn-primary m-btn m-btn--custom m-btn--icon' data-wizard-action='submit' id="btn_sub">
												<span>
													<i class="la la-check"></i>&nbsp;&nbsp;
													<span>Submit</span>
												</span>
											</button>

											<a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
												<span>
													<span>Save &amp; Continue</span>&nbsp;&nbsp;
													<i class="la la-arrow-right"></i>
												</span>
											</a>
										</div>
									</div>
								</div>								
							</div>
							<!--end: Form Actions -->
						  {!! Form::close() !!}
					</div> 
					<!--end: Form Wizard Form-->
				</div>
			</div>
		</div>
		<!--end: Form Wizard-->

	</div>
	<!--end: Portlet Body-->
</div>
<!--End::Main Portlet--> 

  </div>
  <script> 
   function editLocation(id){

    var location =  $("input[id='"+id+"bus_address']").val();
	var latitude = $("input[id='"+id+"latitude']").val();
	var longitude =  $("input[id='"+id+"longitude']").val();

	var formData = new FormData();
	formData.append('id',id);
	formData.append('location',location);
	formData.append('latitude',latitude);
	formData.append('longitude',longitude);
	
	$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});


	$.ajax({
		method: 'POST',
		url: '/edit_location',
		data:formData,
		cache:false,
		contentType: false,
		processData: false,
		success: function(data) {

		console.log(data);
		
	},
		error: console.error
	});

   }

  </script>

  <script>

          function myFunction(){
          
				    // document.getElementById("sub_btn").innerHTML = "Loading...";
					//var ingredients = $("textarea[name='ingredients[]']").map(function(){return $(this).val()+"&";}).get();
					
					var id =  $("input[id='vendor_id']").val();
					var fname =  $("input[id='fname']").val();
					var lname =  $("input[id='lname']").val();
					var pemail =  $("input[id='pemail']").val();
					var p_phone =  $("input[id='p_phone']").val();
					var name_business =  $("input[id='name_business']").val();
					var registered_company_entitie =  $("input[id='registered_company_entitie']").val();
					var business_email =  $("input[id='business_email']").val();
					var registered_address =  $("input[id='registered_address']").val();
					var details =  $("textarea[id='details']").val();

					if($("input[name='bus_address[]']").length == 0) {

					}else {
					
					var bus_address = $("input[name='bus_address[]']").map(function(){return $(this).val();}).get();
					var latitude = $("input[name='latitude[]']").map(function(){return $(this).val();}).get();
					var longitude = $("input[name='longitude[]']").map(function(){return $(this).val();}).get();

					}
				

					var status =  $("input[name='status']:checked").val();
					var accept =  $("input[name='accept']").val();

					 // BINDING DATA TO DATA FORM 
					var formData = new FormData();
					formData.append('id',id);
					formData.append('fname',fname);
					formData.append('lname',lname);
					formData.append('pemail',pemail);
					formData.append('p_phone',p_phone);
					formData.append('name_business',name_business);
					formData.append('registered_company_entitie',registered_company_entitie);
					formData.append('business_email',business_email);
					formData.append('registered_address',registered_address);
					formData.append('details',details);
					formData.append('status',status);
					formData.append('accept',accept);
					
                    if($("input[name='bus_address[]']").length == 0) {

                    } else {
					formData.append('bus_address',bus_address);
					formData.append('latitude',latitude);
					formData.append('longitudes',longitude);
					}

					 $.ajaxSetup({
					 headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
				     });


					 $.ajax({
						method: 'POST',
						url: '/edit_vendor',
						data:formData,
						cache:false,
						contentType: false,
						processData: false,
						success: function(data) {
				
							      swal( data, "", "success").then((value) => {
                                 $("#btn_sub").removeClass("m-loader m-loader--light m-loader--right m-loader--");
							    });
					    	 //  location.reload();
						    //  event.target.reset()

						},
						error: console.error
					});
		  }
	    </script>
                

@endsection
