@extends('vendor.layout.app')

@section('content')

 
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title m-subheader__title--separator">Update an Offer</h3>
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home">
                                    <a href="#" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                    </a>
                                </li>
                                <li class="m-nav__separator">-</li>
                                <li class="m-nav__item">
                                    <a href="#" class="m-nav__link">
                                        <span class="m-nav__link-text">Offers</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div>


                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                m-dropdown-toggle="hover" aria-expanded="true">
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
                                                        <a href="/offer" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">All offers</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="/offer/create" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Add New</span>
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
                    <div class="row">
                        <div class="col-lg-12">
                        @if(isset($success))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                            <strong>{{$success}}</strong> 
                        </div>
                        @elseif(isset($error))
                          <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                            <strong>{{$error}}</strong> 
                        </div>
                        @endif
                            <!--begin::Portlet-->
                            <div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile" id="main_portlet">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-progress">
                                        <!-- here can place a progress bar-->
                                    </div>
                                    <div class="m-portlet__head-wrapper">

                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Update an Offer
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="m-portlet__head-tools">

                                        {{-- FORM START --}}

  {!! Form::open(['action' =>  ['vendorDashController@update', $offer->id ], 'method' => 'POST','files' => true,'class'=> 'm-form m-form--fit m-form--label-align-right'] ) !!}
              

                                        {{-- FORM START --}}
                                            <div class="btn-group">
                                              
                                                {{-- <button type="submit" class="btn btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md"> --}}
                                                    <span>
                                                        {{-- <i class="la la-check"></i> --}}
                                                        
                                                         {{ Form::submit('Submit',['class'=>'btn  btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md'] ) }}
                                                         {{ Form::hidden('_method','PUT')}}
                                                    </span>
                                                </button>


                                                <button type="button" class="btn btn-accent  dropdown-toggle dropdown-toggle-split m-btn m-btn--md"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    
                                        <!--begin: Form Body -->
                                        <div class="m-portlet__body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2">
                                                    <div class="m-form__section m-form__section--first">
                                                        <div class="m-form__heading">
                                                            <h3 class="m-form__heading-title">Offer's Info</h3>
                                                        </div>

                                                        <div class="form-group m-form__group row">
                          {{ Form::label('name', '* Offer\'s Title:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('name',$offer->title,['class'=>'form-control m-input','placeholder'=>" Please enter Offer's Title", 'required' => '']) }}
                                                    
                                                            </div>

                                                        </div>
                                               <div class="form-group m-form__group row">
                          {{ Form::label('slug', '* Slug:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('slug',$offer->slug,['class'=>'form-control m-input','placeholder'=>" Please enter slug", 'required' => '']) }}
                                                    
                                                            </div>
                                                        </div>

                    <div class="form-group m-form__group row">
				       
                        {{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						
				                                     </div>
                                       <div class="form-group m-form__group row">
				         {{ Form::label('category', 'Select Vendor ', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                              <div class="col-xl-9 col-lg-9">

                                                    <select class="form-control m-input" id="category" name="category">
                                                            <option>Select a Category...</option>
                                                                    @php
                                                                    foreach ($categories as $key => $category) {
                                                          if($category['id'] == $offer->category_id){
                                                 echo  '<option value="'.$category['id'].'" selected>'.$category['name'].'</option>';
                                                          }else{
                                                  echo  '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                                          }
                                                                            }
                                                                           @endphp
                                                    </select>
                                        
				                                </div>
                                      </div>


                                        
                                                    </div>
                                                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                    <div class="m-form__section">

                                                        <div class="m-form__heading">
                                                            <h3 class="m-form__heading-title">
                                                                Offer's Usage
                                                                <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info"
                                                                    title="Some help text goes here"></i>
                                                            </h3>
                                                        </div>
                                                        <div class="form-group m-form__group row">
                                                                {{ Form::label('location', 'Select Location ', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                                 <div class="col-xl-9 col-lg-9">
                                                                    <select class="form-control m-input m-input--solid" id="location" name="location"  required>
                                                                        <option>Select Location</option>
                                                                                @php
                                                                             foreach ($locations as $key => $loc) {
                                                                      if($loc['id'] == $offer->location){
                                                             echo  '<option value="'.$loc['id'].'" selected >'.$loc['bus_location'].'</option>';
                                                                      }else{
                                                              echo  '<option value="'.$loc['id'].'">'.$loc['bus_location'].'</option>';
                                                                      }
                                                                                     }
                                                                                 @endphp
                                                                          

                                                                        
                                                                     </select>
                                                                 </div>
                                                         </div>
                                                    
                                                         <div class="form-group m-form__group row">
                                                                {{ Form::label('type', 'Select Offer Type ', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                                  <div class="col-xl-9 col-lg-9">
                                                                {{ Form::select('featured', ['No' => 'No', 'Yes' => 'Yes'], $offer->featured, ['class'=>'form-control m-input m-input--solid','placeholder' => 'Select Offer Type...']) }}
                                                              
                                                                 </div>
                                                          </div>

                                             <div class="form-group m-form__group row">
				         {{ Form::label('max_use', 'Select Maximum usage ', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                  <div class="col-xl-9 col-lg-9">
						 {{ Form::selectRange('max_use',1, 20,$offer->maximum_use,array('class' => 'form-control m-input')) }}
						<!-- <span class="m-form__help">>Lorem Ipsum is dummy text which has</span> -->
				                                </div>
                                             </div>
                                                      
                                                   <div class="form-group m-form__group row">
                          {{ Form::label('start_time', '* Start Time:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('start_time',$offer->start_time,['class'=>'form-control m-input','placeholder'=>" Start Time", 'required' => '']) }}
                                                            </div>
                                                    </div>

                                                     <div class="form-group m-form__group row">
                          {{ Form::label('end_time', '* End Time:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('end_time',$offer->end_time,['class'=>'form-control m-input','placeholder'=>"End Time", 'required' => '']) }}
                                                            </div>
                                                    </div>

                                                     <div class="form-group m-form__group row">
                          {{ Form::label('start_date', '* Start Date:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::date('start_date',$offer->start_date,['class'=>'form-control m-input','placeholder'=>"Detail", 'required' => '']) }}
                                                            </div>
                                                    </div>

                                            <div class="form-group m-form__group row">
                          {{ Form::label('end_date', '* End Date:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::date('end_date',$offer->end_date,['class'=>'form-control m-input','placeholder'=>"Detail", 'required' => '']) }}
                                                            </div>
                                                    </div>

                        <div class="form-group m-form__group row">
				         {{ Form::label('type', 'Select Offer Type ', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                        <div class="col-xl-9 col-lg-9">
						 {{ Form::select('type', ['1' => 'Single', '2' => 'Multiple'], $offer->type, ['class'=>'form-control m-input m-input--solid','placeholder' => 'Select Offer Type...']) }}
						{{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						<!-- <span class="m-form__help">Lorem Ipsum is dummy text which has</span> -->
				                          </div>
                                        </div>

                                        
                                                    </div>
                                                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                    <div class="m-form__section m-form__section--first">
                                                        <div class="m-form__heading">
                                                            <h3 class="m-form__heading-title"> Details</h3>
                                                        </div>
                                                        
                                                        <div class="form-group m-form__group row">
                                              
                             
                          {{ Form::label('details', '', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::textarea('details',$offer->details,['class'=>'form-control m-input','placeholder'=>"Detail", 'required' => '']) }}
                                                            </div>
                                                
                            

                                                        </div>
                                                    </div>
                                                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                    <div class="m-form__section">
                                                        <div class="m-form__heading">
                                                            <h3 class="m-form__heading-title">Offer's Settings</h3>
                                                        </div>
                                                        <div class="form-group m-form__group row">
                                                            <div class="col-lg-6 m-form__group-sub">
                                                                
                                                                <div class="m-radio-inline">
                                                                        @php 
                                                                        $approved = "";
                                                                        $pending ="";
                                                                        $blocked = "";
                                                                        if($offer->status =="approved"){
                                                                           $approved = "true";
                                                                        }elseif($offer->status =="pending"){
                                                                           $pending = "true";
                                                                        }elseif($offer->status =="blocked"){
                                                                           $blocked = "true";
                                                                        }
          
                                                                      @endphp

                                                                    <label class="m-radio m-radio--solid m-radio--brand">
                                                                        {{ Form::radio('status', 'pending',  $pending) }} 
                                                                         Pending

                                                                        <span></span>

                                                                    </label>


                                                                    <label class="m-radio m-radio--solid m-radio--brand">
                                                                       {{ Form::radio('status', 'approved',$approved) }} 
                                                                         Approved
                                                                       
                                                                        <span></span>
                                                                    </label>
                                                                     <label class="m-radio m-radio--solid m-radio--brand">
                                                                         {{ Form::radio('status', 'blocked', $blocked) }} 
                                                                         Blocked
                    
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <span class="m-form__help">Please select offer Status</span>
                                                            </div>


                                                          <div class="col-lg-6 m-form__group-sub">
                             <div class="form-group m-form__group">
				         
						 {{ Form::file('image', array('class' => 'form-control m-input'))}}
						  
						<span class="m-form__help">Add  a picture.</span><br>
                        @php  $image = "images/".$offer->image;  @endphp
                             <img src="{{asset($image)}}" class='form-control m-input' style="width:80px; height:80px">
                         <!-- <img src="images/{{ $offer->image }}" class='form-control m-input' style="width:50px; height:50px"> -->
				</div>
                                                                
                                                            </div> 

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                     {!! Form::close() !!}


                                </div>
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>
                </div>
                
              

@endsection