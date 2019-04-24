@extends('vendor.layout.app')

@section('content')
<div class="m-content">
		@php 
		$totalVendors = count($vendors); 
		@endphp

 <div class="row">
  <div class="col-md-12">
	    <!--begin:: Widgets/Product Sales-->
<div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height ">
	
	<div class="m-portlet__body">
		<div class="m-widget25">
			<span class="m-widget25__price m--font-brand">{{ $totalVendors }} Vendors</span>
			
		<div class="row">
            <div class="col-md-4">
				<a href="vendors/status/approved" class="m-widget25__progress">
					<span class="m-widget25__progress-number">
					{{ number_format((count($approved)/$totalVendors)*100,2) }}%
				    </span>				         
					<div class="m--space-10"></div>
					<div class="progress m-progress--sm">
						<div class="progress-bar m--bg-success" role="progressbar" style="width: {{ number_format((count($approved)/$totalVendors)*100,2) }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>						 
					<span class="m-widget25__progress-sub">
						Approved Vendor(s)
					</span>
               </a>
			</div>
	
			<div class="col-md-4">
			<a href="vendors/status/pending" class="m-widget25__progress">
					<span class="m-widget25__progress-number">
					{{ number_format((count($pending)/$totalVendors)*100,2) }}%
				    </span>				         
					<div class="m--space-10"></div>
					<div class="progress m-progress--sm">
						<div class="progress-bar m--bg-warning" role="progressbar" style="width: {{ number_format((count($pending)/$totalVendors)*100,2) }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>						 
					<span class="m-widget25__progress-sub">
						Pending Vendor(s)
					</span>
           </a>
			</div>	

			<div class="col-md-4">
			<a href="vendors/status/blocked" class="m-widget25__progress" >
					<span class="m-widget25__progress-number">
					{{ number_format((count($blocked)/$totalVendors)*100,2) }}%
				    </span>				         
					<div class="m--space-10"></div>
					<div class="progress m-progress--sm">
						<div class="progress-bar m--bg-danger" role="progressbar" style="width: {{ number_format((count($blocked)/$totalVendors)*100,2) }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>						 
					<span class="m-widget25__progress-sub">
						Blocked Vendor(s)
					</span>
             </a>
			</div>
		</div>	
					
		</div>			 
	</div>
</div>
<!--end:: Widgets/Product Sales-->
</div>

    <div class="col-md-12">

   <div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					All Vendors
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="/vendor/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Add New Vendor</span>
						</span>
					</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
								<thead>
			  						  <tr>
				  									<th> ID</th>
													<th>Image</th>
				  									<th>Account Details</th>
				  									<th>About Your Business</th>
				  									<th>Accout Setup</th>
				  									<th>Date</th>
				  									<th>Actions</th>
				  						</tr>
						       </thead>
			
						<tbody>
				@foreach ($vendors as $row )

				<tr>
								<td>{{ $row['id'] }}</td>
								@php  $image = "images/".$row['image'];  @endphp
						       <td><img src="{{asset($image)}}" style="height:50px;width:50px"> </td>
								<!-- <td><img src="images/{{ $row['image'] }}" style="height:50px;width:50px"> </td> -->

								<td>
									Fullname :{{ $row['fname']." ".$row['lname'] }} <br>
									Email :{{ $row['p_email'] }} <br>
									Phone number :{{ $row['p_phone'] }} <br>
								</td>
								
								<td>
									Name of business:{{ $row['name_business'] }}<br/>
									Registered company entitie:{{ $row['registered_company_entitie'] }}<br/>
									Business email:{{ $row['business_email'] }}<br/>
									Registered address:{{ $row['registered_address'] }}
								</td>


								<td>

								{{ $row['status'] }}


								</td>
								
								<td>{{ $row['created_at'] }}</td>
								<td><a href="/vendor/{{ $row['id'] }}/edit">Edit</a><br/>
								<a href="/vendorinfo/{{ $row['id'] }}">View</a>

							    </td>
								
				</tr>

				@endforeach
								
					</tbody>
			
					</table>
	</div>
</div>


      </div>   <!-- End of md 7 -->


   </div>
</div>


@endsection