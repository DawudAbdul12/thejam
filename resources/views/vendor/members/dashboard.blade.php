@extends('admin.layout.app')

@section('content')
 
								<div class="m-content">
													<!--Begin::Section--> 
								<div class="row">			
								
									
									<div class="col-xl-12">
										<!--begin:: Widgets/Blog-->
										<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
									<div class="m-portlet__head m-portlet__head--fit">
										<div class="m-portlet__head-caption">
											
										</div>
									</div>
								
									<div class="m-portlet__body">
										<div class="m-widget19">
											<div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">							 
												
												<div class="m-widget19__shadow"></div>
											</div>
											<div class="m-widget19__content">				
												<div class="m-widget19__header">
													<div class="m-widget19__user-img">	
													@php  $image = "profile_pic/".$member->profile_pic;  @endphp					 
														<img class="m-widget19__img" src="{{asset($image)}}" alt="">  
													</div>
													<div class="m-widget19__info">
														<span class="m-widget19__username">
														{{ $member->fname. " ".$member->lname }}
														</span><br> 
														<!-- <span class="m-widget19__time">
														UX/UI Designer, Google
														</span>		  -->
													</div>
													<div class="m-widget19__stats">
														<span class="m-widget19__number m--font-brand">
														{{ $member->points}}
														</span>
														<span class="m-widget19__comment">
														Points
														</span>								 
													</div>
												</div>
												<div class="m-widget19__body">
												{{ $member->details}} 
												</div>
											</div>
										
										</div>
									</div>
										</div>
									   <!--end:: Widgets/Blog-->
									</div>
								
								
								</div>
								<!--End::Section-->
								
								<!--Begin::Section--> 
								<div class="m-portlet">
									<div class="m-portlet__body  m-portlet__body--no-padding">
										<div class="row m-row--no-padding m-row--col-separator-xl">			
											<div class="col-xl-4">
												<!--begin:: Widgets/Stats2-1 -->
								<div class="m-widget1">
									<div class="m-widget1__item">
										<div class="row m-row--no-padding align-items-center">
											<div class="col">
												<h3 class="m-widget1__title">Facebook</h3>
												<span class="m-widget1__desc">Followers</span>
											</div>
											<div class="col m--align-right">
												<span class="m-widget1__number m--font-brand">{{ $member->facebook}}</span>
											</div>
										</div>
									</div>
									<div class="m-widget1__item">
										<div class="row m-row--no-padding align-items-center">
											<div class="col">
												<h3 class="m-widget1__title">Twitter</h3>
												<span class="m-widget1__desc">followers</span>
											</div>
											<div class="col m--align-right">
												<span class="m-widget1__number m--font-danger">{{ $member->twitter}}</span>
											</div>
										</div>
									</div>
									<div class="m-widget1__item">
										<div class="row m-row--no-padding align-items-center">
											<div class="col">
												<h3 class="m-widget1__title">Instagram</h3>
												<span class="m-widget1__desc">Followers</span>
											</div>
											<div class="col m--align-right">
												<span class="m-widget1__number m--font-success">{{ $member->instagram}}</span>
											</div>
										</div>
									</div>
								</div>
										</div>
											<div class="col-xl-6">
												<!--begin:: Widgets/Profit Share-->
								<div class="m-widget14">
									<!-- <div class="m-widget14__header">
										<h3 class="m-widget14__title">
											Profit Share            
										</h3>
										<span class="m-widget14__desc">
										Profit Share between customers
										</span>
									</div> -->
									@php 
									 $facebook = $member->facebook;  
									 $twitter = $member->twitter;
									 $instagram = $member->instagram;
									 $totalFollowers = $facebook + $twitter + $instagram;
									
									@endphp	
									<div class="row  align-items-center">
										<div class="col">
											<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
												<div class="m-widget14__stat">45</div>
											</div>
										</div>
										
										<div class="col">
											<div class="m-widget14__legends">
												<div class="m-widget14__legend">
													<span class="m-widget14__legend-bullet m--bg-accent"></span>
													<span class="m-widget14__legend-text">

														40% Sport Tickets
													
													</span>
												</div>
												<div class="m-widget14__legend">
													<span class="m-widget14__legend-bullet m--bg-warning"></span>
													<span class="m-widget14__legend-text">47% Business Events</span>
												</div>
												<div class="m-widget14__legend">
													<span class="m-widget14__legend-bullet m--bg-brand"></span>
													<span class="m-widget14__legend-text">5% Others</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end:: Widgets/Profit Share-->			</div>
										</div>
									</div>
								</div>
								<!--End::Section-->
								
								
								<!--Begin::Section-->
								<div class="row">
									<div class="col-xl-6 col-lg-12">
										<!--Begin::Portlet-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Login History
												</h3>
											</div>
										</div>
										
									</div>
									<div class="m-portlet__body">
										<div class="m-scrollable" data-scrollable="true" data-height="380" data-mobile-height="300">
											<!--Begin::Timeline 2 -->
											<div class="m-timeline-2">
												<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
													<div class="m-timeline-2__item">
														<span class="m-timeline-2__item-time">10:00</span>	
														<div class="m-timeline-2__item-cricle">									 
															<i class="fa fa-genderless m--font-danger"></i>									 
														</div>
														<div class="m-timeline-2__item-text  m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna                                           	                                	               
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">12:45</span>	
														<div class="m-timeline-2__item-cricle">																		 
															<i class="fa fa-genderless m--font-success"></i>									 
														</div>
														<div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
															AEOL Meeting With 
														</div>
														<div class="m-list-pics m-list-pics--sm m--padding-left-20">
															<a href="#"><img src="assets/app/media/img/users/100_4.jpg" title=""></a>
															<a href="#"><img src="assets/app/media/img/users/100_13.jpg" title=""></a>
															<a href="#"><img src="assets/app/media/img/users/100_11.jpg" title=""></a>
															<a href="#"><img src="assets/app/media/img/users/100_14.jpg" title=""></a>        
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">14:00</span>	
														<div class="m-timeline-2__item-cricle">																		 
															<i class="fa fa-genderless m--font-brand"></i>									 
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Make Deposit <a href="#" class="m-link m-link--brand m--font-bolder">USD 700</a> To ESL.
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">16:00</span>
														<div class="m-timeline-2__item-cricle">																		 
															<i class="fa fa-genderless m--font-warning"></i>									 
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud                                                            	                                
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">17:00</span>
														<div class="m-timeline-2__item-cricle">	
															<i class="fa fa-genderless m--font-info"></i>									 
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Placed a new order in <a href="#" class="m-link m-link--brand m--font-bolder">SIGNATURE MOBILE</a> marketplace.                       	               
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">16:00</span>
														<div class="m-timeline-2__item-cricle">	
															<i class="fa fa-genderless m--font-brand"></i>									 
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud                                                            	                                
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">17:00</span>
														<div class="m-timeline-2__item-cricle">	
															<i class="fa fa-genderless m--font-danger"></i>									 
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Received a new feedback on <a href="#" class="m-link m-link--brand m--font-bolder">FinancePro App</a> product.                       	               
														</div>
													</div>
												</div>
											</div>
											<!--End::Timeline 2 -->
										</div>
									</div>
								</div>
								<!--End::Portlet-->	</div>
									<div class="col-xl-6 col-lg-12">    
									
											<!--begin:: Widgets/Authors Profit-->
										<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
											<div class="m-portlet__head">
												<div class="m-portlet__head-caption">
													<div class="m-portlet__head-title">
														<h3 class="m-portlet__head-text">
															Redeem History
														</h3>
													</div>
												</div>
												<div class="m-portlet__head-tools">
												
												</div>
											</div>
											<div class="m-portlet__body">
												<div class="m-widget4">
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--logo">							 
															<img src="assets/app/media/img/client-logos/logo5.png" alt="">   
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
															Trump Themes  
															</span><br> 
															<span class="m-widget4__sub">
															Make Metronic Great Again
															</span>		 
														</div>
														<span class="m-widget4__ext">
															<span class="m-widget4__number m--font-brand"> 2hr ago</span>
														</span>	
													</div>	 
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--logo">						 
															<img src="assets/app/media/img/client-logos/logo4.png" alt="">  
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
															StarBucks 
															</span><br> 
															<span class="m-widget4__sub">
															Good Coffee & Snacks 
															</span>		 
														</div>
														<span class="m-widget4__ext">
															<span class="m-widget4__number m--font-brand">-$290</span>
														</span>	
													</div>		 
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--logo">						 
															<img src="assets/app/media/img/client-logos/logo3.png" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
															Phyton  
															</span><br> 
															<span class="m-widget4__sub">
															A Programming Language
															</span>		 
														</div>
														<span class="m-widget4__ext">
															<span class="m-widget4__number m--font-brand">+$17</span>
														</span>	
													</div>	 
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--logo">						 
															<img src="assets/app/media/img/client-logos/logo2.png" alt=""> 
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
															GreenMakers  
															</span><br> 
															<span class="m-widget4__sub">
															Make Green Great Again
															</span>		 
														</div>
														<span class="m-widget4__ext">
															<span class="m-widget4__number m--font-brand">-$2.50</span>
														</span>	
													</div>	 
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--logo">						 
															<img src="assets/app/media/img/client-logos/logo1.png" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
															FlyThemes  
															</span><br> 
															<span class="m-widget4__sub">
															A Let's Fly Fast Again Language
															</span>		 
														</div>
														<span class="m-widget4__ext">
															<span class="m-widget4__number m--font-brand">+$200</span>
														</span>	
													</div>
												</div>			 
											</div>
										
										<!--end:: Widgets/Authors Profit--> 
										 </div>
								<!--End::Portlet-->  	</div>
								</div>
								<!--End::Section-->
								
								 
								
											</div>


@endsection




