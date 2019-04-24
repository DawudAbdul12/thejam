@extends('admin.layout.app')

@section('content')
       
			    			    
                              	        <div class="m-content">
                                                    <div class="row">
                                    <div class="col-xl-3 col-lg-4">
                                        <div class="m-portlet m-portlet--full-height  ">
                                            <div class="m-portlet__body">
                                                <div class="m-card-profile">
                                                    <div class="m-card-profile__title m--hide">
                                                        Your Profile
                                                    </div>
                                                    <div class="m-card-profile__pic">
                                                        <div class="m-card-profile__pic-wrapper">	
                                                        @php  $image = "images/".$vendor->image;  @endphp
						                              
                                                            <img src="{{ $image}}" alt=""/>


                                                        </div>
                                                    </div>
                                                    <div class="m-card-profile__details">
                                                        <span class="m-card-profile__name">{{$vendor->fname."  ".$vendor->lname}}</span>
                                                        <a href="#" class="m-card-profile__email m-link">{{$vendor->business_email}}</a>
                                                    </div>
                                                </div>	
                                          
                                
                                                <div class="m-portlet__body-separator"></div>
                                
                                                <div class="m-widget1 m-widget1--paddingless">
                                                    <div class="m-widget1__item">
                                                        <div class="row m-row--no-padding align-items-center">
                                                            <div class="col">
                                                                <h3 class="m-widget1__title">Total Offers</h3>
                                                                <span class="m-widget1__desc">Total Offers</span>
                                                            </div>
                                                            <div class="col m--align-right">
                                                                <span class="m-widget1__number m--font-brand">17,800</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget1__item">
                                                        <div class="row m-row--no-padding align-items-center">
                                                            <div class="col">
                                                                <h3 class="m-widget1__title">Total Redeem</h3>
                                                                <span class="m-widget1__desc">Total Redeems</span>
                                                            </div>
                                                            <div class="col m--align-right">
                                                                <span class="m-widget1__number m--font-danger">1,800</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="m-widget1__item">
                                                        <div class="row m-row--no-padding align-items-center">
                                                            <div class="col">
                                                                <h3 class="m-widget1__title">Issue Reports</h3>
                                                                <span class="m-widget1__desc">System bugs and issues</span>
                                                            </div>
                                                            <div class="col m--align-right">
                                                                <span class="m-widget1__number m--font-success">-27,49%</span>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>			
                                        </div>	
                                    </div>
                                    <div class="col-xl-9 col-lg-8">
                                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-tools">
                                                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                                                <i class="flaticon-share m--hide"></i>
                                                                Offer(s)
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
                                                                Redeem's History
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
                                                                Login History
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="m-portlet__head-tools">
                                                    <ul class="m-portlet__nav">
                                                        <li class="m-portlet__nav-item m-portlet__nav-item--last">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-gear"></i>
                                    </a>
                                             </ul>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                                  
                                                   <div class="col-xl-12">	
                                                       
                                                   <div class="m-widget11">
					<div class="table-responsive">
						<!--begin::Table-->								 
						<table class="table">
							<!--begin::Thead-->
							<thead>
								<tr>
									<td class="m-widget11__label">#</td>
									<td class="m-widget11__app">Application</td>
									<td class="m-widget11__sales">Sales</td>
									<td class="m-widget11__price">Avg Price</td>
									<td class="m-widget11__total m--align-right">Total</td>
								</tr>
							</thead>
							<!--end::Thead-->
							<!--begin::Tbody-->
							<tbody>
								<tr>
									<td>
										<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox"><span></span>
										</label>
									</td>
									<td>
										<span class="m-widget11__title">Vertex 2.0</span>
										<span class="m-widget11__sub">Vertex To By Again</span>
									</td>
									<td>19,200</td>
									<td>$63</td>
									<td class="m--align-right m--font-brand">$14,740</td>
								</tr>
								<tr>
									<td>
										<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="m-widget11__title">Metronic</span>
										<span class="m-widget11__sub">Powerful Admin Theme</span>
									</td>
									<td>24,310</td>
									<td>$39</td>
									<td class="m--align-right m--font-brand">$16,010</td>
								</tr>
								<tr>
									<td>
										<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="m-widget11__title">Apex</span>
										<span class="m-widget11__sub">The Best Selling App</span>
									</td>
									<td>9,076</td>
									<td>$105</td>
									<td class="m--align-right m--font-brand">$37,200</td>
								</tr>
								<tr>
									<td>
										<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="m-widget11__title">Cascades</span>
										<span class="m-widget11__sub">Design Tool</span>
									</td>
									<td>11,094</td>
									<td>$16</td>
									<td class="m--align-right m--font-brand">$8,520</td>
								</tr>
							</tbody>
							<!--end::Tbody-->										     
						</table>
						<!--end::Table-->
					</div>
				

			
				<!--end::Widget 11--> 						             
		

     </div>
                                                     
                                                   </div>
		

                                                 </div>
                                                <div class="tab-pane " id="m_user_profile_tab_2">

                                                              <div class="col-xl-12">	
                                                       
                                                       <div class="m-widget11">
                        <div class="table-responsive">
                            <!--begin::Table-->								 
                            <table class="table">
                                <!--begin::Thead-->
                                <thead>
                                    <tr>
                                        <td class="m-widget11__label">#</td>
                                        <td class="m-widget11__app">Application</td>
                                        <td class="m-widget11__sales">Sales</td>
                                        <td class="m-widget11__price">Avg Price</td>
                                        <td class="m-widget11__total m--align-right">Total</td>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                            <input type="checkbox"><span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <span class="m-widget11__title">Vertex 2.0</span>
                                            <span class="m-widget11__sub">Vertex To By Again</span>
                                        </td>
                                        <td>19,200</td>
                                        <td>$63</td>
                                        <td class="m--align-right m--font-brand">$14,740</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                        </td>
                                        <td>
                                            <span class="m-widget11__title">Metronic</span>
                                            <span class="m-widget11__sub">Powerful Admin Theme</span>
                                        </td>
                                        <td>24,310</td>
                                        <td>$39</td>
                                        <td class="m--align-right m--font-brand">$16,010</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                        </td>
                                        <td>
                                            <span class="m-widget11__title">Apex</span>
                                            <span class="m-widget11__sub">The Best Selling App</span>
                                        </td>
                                        <td>9,076</td>
                                        <td>$105</td>
                                        <td class="m--align-right m--font-brand">$37,200</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                        </td>
                                        <td>
                                            <span class="m-widget11__title">Cascades</span>
                                            <span class="m-widget11__sub">Design Tool</span>
                                        </td>
                                        <td>11,094</td>
                                        <td>$16</td>
                                        <td class="m--align-right m--font-brand">$8,520</td>
                                    </tr>
                                </tbody>
                                <!--end::Tbody-->										     
                            </table>
                            <!--end::Table-->
                        </div>
                    
    
                
                    <!--end::Widget 11--> 						             
            
    
         </div>
                                                         
                                                       </div>
                                                    
                                                </div>
                                                <div class="tab-pane " id="m_user_profile_tab_3">

                                                     
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>		        </div>
                                                           
                                
                                                
                                    


@endsection