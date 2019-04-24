@extends('admin.layout.app')

@section('content')

 
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title m-subheader__title--separator">Add an Offer</h3>
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
                                                    Add an Offer
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="m-portlet__head-tools">

                                        {{-- FORM START --}}
  {!! Form::open(['action' =>  ['ListingsController@update', $list->id ], 'method' => 'POST','files' => true,'class'=> 'm-form m-form--fit m-form--label-align-right'] ) !!}
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
                                                            <h3 class="m-form__heading-title">Offer's Info</h3>
                                                        </div>

                                                        <div class="form-group m-form__group row">
                          {{ Form::label('name', '* Offer\'s Title:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('name',$list->name,['class'=>'form-control m-input','placeholder'=>" Please enter Offer's Title", 'required' => '']) }}
                                                    
                                                            </div>

                                                        </div>
                                               <div class="form-group m-form__group row">
                          {{ Form::label('slug', '* Slug:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('slug',$list->slug,['class'=>'form-control m-input','placeholder'=>" Please enter slug", 'required' => '']) }}
                                                    
                                                            </div>
                                                        </div>
                                                       
                                              <div class="form-group m-form__group row">
                          {{ Form::label('location', '* Location:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('location',$list->location,['class'=>'form-control m-input','placeholder'=>" Please enter Location", 'required' => '']) }}
                                                         </div>
                                                </div>

                                     	<div class="form-group m-form__group row">
				         {{ Form::label('type', 'Select Vendor', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                 <div class="col-xl-9 col-lg-9">
						 {{ Form::select('type', ['1' => '1', '1' => '1'], $list->vendor_id, ['class'=>'form-control m-input','placeholder' => 'Select a vendor...']) }}
						                       <span class="m-form__help">>Lorem Ipsum is dummy text which has</span>
                                                </div>
                        {{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						
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
                          {{ Form::label('price', '* Enter Price:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('price',$list->pricing,['class'=>'form-control m-input','placeholder'=>" Please enter Price", 'required' => '']) }}
                                                         </div>
                                                </div>
                                                      
                                                   <div class="form-group m-form__group row">
                          {{ Form::label('start_time', '* Start Time:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('start_time',$list->start_time,['class'=>'form-control m-input','placeholder'=>" Start Time", 'required' => '']) }}
                                                            </div>
                                                    </div>

                                                     <div class="form-group m-form__group row">
                          {{ Form::label('end_time', '* End Time:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::text('end_time',$list->end_time,['class'=>'form-control m-input','placeholder'=>"End Time", 'required' => '']) }}
                                                            </div>
                                                    </div>

                                                     <div class="form-group m-form__group row">
                          {{ Form::label('start_date', '* Start Date:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::date('start_date',$list->start_date,['class'=>'form-control m-input','placeholder'=>"Detail", 'required' => '']) }}
                                                            </div>
                                                    </div>

                                            <div class="form-group m-form__group row">
                          {{ Form::label('end_date', '* Start Date:', ['class' => 'col-xl-3 col-lg-3 col-form-label']) }}
                                                            <div class="col-xl-9 col-lg-9">
						  {{ Form::date('end_date',$list->end_date,['class'=>'form-control m-input','placeholder'=>"Detail", 'required' => '']) }}
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
						  {{ Form::textarea('details',$list->details,['class'=>'form-control m-input','placeholder'=>"Detail", 'required' => '']) }}
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
						  
						<span class="m-form__help">Add user profile picture.</span><br>
                         <img src="images/{{ $list->image }}" class='form-control m-input' style="width:50px; height:50px">
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