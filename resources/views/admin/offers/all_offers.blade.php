@extends('admin.layout.app')

@section('content')
<div class="m-content">
 <div class="row">
   


    <div class="col-md-12">


      <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
	<div class="m-alert__icon">
		<i class="flaticon-exclamation m--font-brand"></i>
	</div>
	<div class="m-alert__text">
		Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups
	</div>
   </div>
  



   <div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					All offers
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="offer/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Add New Offer</span>
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
				  									<th> Info</th>
				  									<th>Offer Usage</th>
				  									<th>Rate</th>
				  									<th>Status</th>
				  									<th>Date</th>
				  									<th>Actions</th>
				  						</tr>
						       </thead>
			
						<tbody>
				@foreach ($offers as $row )

				<tr>
								<td>{{ $row['id'] }}</td>
								<td><img src="images/{{ $row['image'] }}" style="height:50px;width:50px"> </td>
								<td>
								Title :{{ $row['title'] }} <br>
								Slug :{{ $row['slug'] }} <br>
								Vendor :{{ $row['vendor_id'] }} <br/>
								Category :{{ $row['category_id'] }}
								</td>
								<td>
								Maximum Usage :{{ $row['maximum_use'] }} <br>
								Start Time :{{ $row['start_time'] }} <br>
							    End Time :{{ $row['end_time'] }} <br>
								Start Date :{{ $row['start_date'] }} <br>
								End Date :{{ $row['end_date'] }}
								</td>
								<td>{{ $row['rate'] }}</td>
								<td>{{ $row['status'] }}</td>
								<td>{{ $row['created_at'] }}</td>
								<td><a href="offer/{{ $row['id'] }}/edit">Edit</a></td>
								
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