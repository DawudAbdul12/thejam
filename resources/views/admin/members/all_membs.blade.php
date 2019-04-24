@extends('admin.layout.app')

@section('content')
<div class="m-content">
      <!--begin:: Widgets/Stats-->
	  <div class="m-portlet ">
	<div class="m-portlet__body  m-portlet__body--no-padding">
		<div class="row m-row--no-padding m-row--col-separator-xl">
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::Total Profit-->
				<a href="/member" class="m-widget24">					 
				    <div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            Total Members
				        </h4><br>
				        <span class="m-widget24__desc">
				            All Members
				        </span>
				        <span class="m-widget24__stats m--font-brand">
						@php 
						 $totalMembers = count($members); 
						 echo  $totalMembers;
						 @endphp
				        </span>		
				        <div class="m--space-10"></div>
						<div class="progress m-progress--sm">
							<div class="progress-bar m--bg-brand" role="progressbar" style="width: {{ number_format((count($members)/$totalMembers)*100,2) }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							Percentage
						</span>
						<span class="m-widget24__number">
						{{ number_format((count($members)/$totalMembers)*100,2) }}%
					    </span>
				    </div>				      
				</a>
				<!--end::Total Profit-->
			</div>
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Feedbacks-->
				<a href="member/status/pending" class="m-widget24">
					 <div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            Total Pending
				        </h4><br>
				        <span class="m-widget24__desc">
				            Pending Members
							
				        </span>
				        <span class="m-widget24__stats m--font-info">
						 {{ count($pending) }} 
				        </span>		
				        <div class="m--space-10"></div>
						<div class="progress m-progress--sm">
							<div class="progress-bar m--bg-info" role="progressbar" style="width: {{ (count($pending)/$totalMembers)*100 }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							Percentange
						</span>
						<span class="m-widget24__number">
						{{ number_format((count($pending)/$totalMembers)*100,2) }}%
					    </span>
				    </div>		
				</a>
				<!--end::New Feedbacks--> 
			</div>
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Orders-->
				<a href="member/status/blocked" class="m-widget24">
					<div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            Total Blocked
				        </h4><br>
				        <span class="m-widget24__desc">
				            Blocked Members
				        </span>
				        <span class="m-widget24__stats m--font-danger">
						{{ count($blocked) }} 
				        </span>		
				        <div class="m--space-10"></div>
						<div class="progress m-progress--sm">
							<div class="progress-bar m--bg-danger" role="progressbar" style="width: {{ number_format((count($blocked)/$totalMembers)*100,2) }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							percentange
						</span>
						<span class="m-widget24__number">
						{{ number_format((count($blocked)/$totalMembers)*100,2) }}%
			            </span>
				    </div>		
				</a>
				<!--end::New Orders--> 
			</div>
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Users-->
				<a href="member/status/approved" class="m-widget24">
					 <div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            Total Approved
				        </h4><br>
				        <span class="m-widget24__desc">
				            Approved Members
				        </span>
				        <span class="m-widget24__stats m--font-success">
						{{ count($approved) }} 
				        </span>		
				        <div class="m--space-10"></div>
				        <div class="progress m-progress--sm">
							<div class="progress-bar m--bg-success" role="progressbar" style="width: {{ number_format((count($approved)/$totalMembers)*100,2) }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							Percentange
						</span>
						<span class="m-widget24__number">
						{{ number_format((count($approved)/$totalMembers)*100,2) }}%
						</span>
				    </div>		
				</a>
				<!--end::New Users--> 
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Stats--> 
 <div class="row">
    <div class="col-md-12">

   <div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					All Members
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="/member/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Add New</span>
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
				  									<th>Personal Info</th>
				  									<th>Account Level</th>
				  									<th>Email</th>
				  									<th>Status</th>
				  									<th>Date</th>
				  									<th>Actions</th>
				  						</tr>
						       </thead>
			
						<tbody>
				@foreach ($members as $row )

				<tr>
						<td>{{ $row['id'] }}</td>
						@php  $image = "profile_pic/".$row['profile_pic'];  @endphp
						<td><img src="{{asset($image)}}" style="height:50px;width:50px"> </td>
						<td>
						Fullname :{{ $row['fname']." ".$row['sname'] }} <br>
						Phone number :{{ $row['phone_number'] }} <br>
						DOB :{{ $row['dob'] }}
						</td>
						<td>
						Points :{{ $row['points'] }} <br>
						Level :{{ $row['level'] }}
						
						</td>
						<td>{{ $row['email'] }}</td>
						<td>{{ $row['status'] }}</td>
						<td>{{ $row['created_at'] }}</td>
						<td>
						<a href="member/{{ $row['id'] }}/edit">Edit</a><br>
						<a href="memberinfo/{{ $row['id'] }}">View</a>
						
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