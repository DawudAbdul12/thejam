@extends('admin.layout.app')

@section('content')

                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title m-subheader__title--separator">Add a Vendor</h3>
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home">
                                    <a href="#" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                    </a>
                                </li>
                                <li class="m-nav__separator">-</li>
                                <li class="m-nav__item">
                                    <a href="#" class="m-nav__link">
                                        <span class="m-nav__link-text">Vendor</span>
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
                                                        <a href="#" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">All Vendors</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="m-nav__link">
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
                                                    Add a Vendor
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="m-portlet__head-tools">

                                        {{-- FORM START --}}

  {!! Form::open(['action' => 'VendorController@store', 'method' => 'POST','files' => true,'class'=> 'm-form m-form--fit m-form--label-align-right'] ) !!}
              

                                        {{-- FORM START --}}
                                            <div class="btn-group">
                                              
                                                {{-- <button type="submit" class="btn btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md"> --}}
                                                    <span>
                                                        {{-- <i class="la la-check"></i> --}}
                                                         {{ Form::submit('Submit',['class'=>'btn  btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md'] ) }}
                                                        
                                                    </span>
                                                </button>


                                                <button type="button" class="btn btn-accent  dropdown-toggle dropdown-toggle-split m-btn m-btn--md"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="la la-plus"></i> Save &
                                                        New</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-copy"></i> Save &
                                                        Duplicate</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-undo"></i> Save &
                                                        Close</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-close"></i>
                                                        Cancel</a>
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
                                                            <h3 class="m-form__heading-title">Basic Info</h3>
                                                        </div>

                                                        <div class="form-group m-form__group row">
                          {{ Form::label('name', '* Vendor\'s Name:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('name',"",['class'=>'form-control m-input','placeholder'=>" Please enter Vendor's name", 'required' => '']) }}
                                                    
                                                            </div>

                                                        </div>
                                               <div class="form-group m-form__group row">
                          {{ Form::label('location', '* Vendor\'s Location:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('location',"",['class'=>'form-control m-input','placeholder'=>" Please enter Vendor's Location", 'required' => '']) }}
                                                    
                                                            </div>
                                                        </div>
                                 
                                                     <div class="form-group m-form__group row">
                          {{ Form::label('pnumber', '* Phone Number:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
                                                               <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
						  {{ Form::text('pnumber',"",['class'=>'form-control m-input','placeholder'=>" Please enter Vendor's  Phone", 'required' => '']) }}
                                                               </div>
                                                            </div>
                                                        </div>

                                                       
                                                        
                                                      

                                                    </div>
                                                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                    <div class="m-form__section">

                                                        <div class="m-form__heading">
                                                            <h3 class="m-form__heading-title">
                                                                Details
                                                                <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info"
                                                                    title="Some help text goes here"></i>
                                                            </h3>
                                                        </div>
                                                  

                                                     <div class="form-group m-form__group row">
                          {{ Form::label('details', '* Details:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::textarea('details',"",['class'=>'form-control m-input','placeholder'=>"Detail", 'required' => '']) }}
                                                            </div>
                                                    </div>

                                                    
                                                    </div>
                                                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                    <div class="m-form__section m-form__section--first">
                                                        <div class="m-form__heading">
                                                            <h3 class="m-form__heading-title">Account Details</h3>
                                                        </div>
                                                        
                                                        <div class="form-group m-form__group row">
                                                            
                                                            <div class="col-lg-6 m-form__group-sub">
                          {{ Form::label('email', '* Email:', ['class' => 'form-control-label']) }}
						  {{ Form::text('email',"",['class'=>'form-control m-input','placeholder'=>"Vendor's Email", 'required' => '']) }}
                          <span class="m-form__help">Your Email to login to your dashboard</span>
                                                           </div>

                                                            <div class="col-lg-6 m-form__group-sub">
                          {{ Form::label('pass', '* Password:', ['class' => 'form-control-label']) }}
						  {{ Form::password('pass',['class'=>'form-control m-input','placeholder'=>"Your Password", 'required' => '']) }}
                          <span class="m-form__help">Please use letters and at least one number and symbol</span>
                                                           </div>

                                                        </div>
                                                    </div>
                                                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                    <div class="m-form__section">
                                                        <div class="m-form__heading">
                                                            <h3 class="m-form__heading-title">Account Settings</h3>
                                                        </div>
                                                        <div class="form-group m-form__group row">
                                                            <div class="col-lg-6 m-form__group-sub">
                                                                
                                                                <div class="m-radio-inline">

                                                                    <label class="m-radio m-radio--solid m-radio--brand">
                                                                        {{ Form::radio('status', 'Pending', true) }} 
                                                                         Pending
                                                                       

                                                                        <span></span>

                                                                    </label>


                                                                    <label class="m-radio m-radio--solid m-radio--brand">
                                                                       {{ Form::radio('status', 'Blocked') }} 
                                                                         Approved
                                                                       
                                                                        <span></span>
                                                                    </label>
                                                                     <label class="m-radio m-radio--solid m-radio--brand">
                                                                         {{ Form::radio('status', 'Blocked') }} 
                                                                         Blocked
                    
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <span class="m-form__help">Please select user Status</span>
                                                            </div>


                                                          <div class="col-lg-6 m-form__group-sub">
                             <div class="form-group m-form__group">
				         
						 {{ Form::file('image', array('class' => 'form-control m-input'))}}
						  
						<span class="m-form__help">Add user profile picture.</span>
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