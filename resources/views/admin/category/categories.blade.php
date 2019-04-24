@extends('admin.layout.app')

@section('content')
<div class="m-content">
 <div class="row">
   
   <div class="col-md-5">
	<!--begin::Portlet-->
		<div class="m-portlet m-portlet--tab">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							Add New Category
							@if (!empty($success))
							{{ $success }}
							
								
							@endif
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			{!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST','files' => true,'class'=> 'm-form m-form--fit m-form--label-align-right'] ) !!}
              
			  <div class="m-portlet__body">
			
				<div class="form-group m-form__group m--margin-top-10">
						<div class="alert m-alert m-alert--default" role="alert">
							Lorem Ipsum is dummy text which has no meaning however looks
						</div>
				</div>

				<div class="form-group m-form__group">
				         {{ Form::label('name', 'Enter Name', ['for' => 'exampleInput']) }}
						  {{ Form::text('name',"",['class'=>'form-control m-input m-input--solid','placeholder'=>" Enter Category Name", 'required' => 'Name']) }}
						{{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						{{-- <span class="m-form__help">We'll never share your email with anyone else.</span> --}}
				</div>

				<div class="form-group m-form__group">
				         {{ Form::label('slug', 'Slug', ['for' => 'exampleInput']) }}
						  {{ Form::text('slug','',['class'=>'form-control m-input m-input--solid','placeholder'=>" Slug"]) }}
						{{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						<span class="m-form__help">Lorem Ipsum is dummy text</span>
				</div>

			

				<div class="form-group m-form__group">
				         {{ Form::label('description', 'Category Description', ['for' => 'exampleInput']) }}
						  {{ Form::textarea('description','',['class'=>'form-control m-input m-input--solid','placeholder'=>" Enter Description"]) }}
						{{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						<span class="m-form__help">Lorem Ipsum is dummy text</span>
				</div>

					<div class="form-group m-form__group">
				         {{ Form::label('publish', 'Select ', ['for' => 'exampleInput']) }}
						 {{ Form::select('publish', ['Yes' => 'Yes', 'No' => 'No'], 'Yes', ['class'=>'form-control m-input m-input--solid','placeholder' => 'Select...']) }}
						{{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						<span class="m-form__help">Lorem Ipsum is dummy text</span>
				</div>

			
				<div class="form-group m-form__group">
				         {{ Form::label('image', 'Image', ['for' => 'exampleInput']) }}
						 {{ Form::file('image', array('class' => 'form-control m-input m-input--solid'))}}
						  
						{{-- echo Form::text('username');
						<input type="email" class="form-control m-input m-input--solid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
						<span class="m-form__help">Lorem Ipsum is dummy text</span>
				</div>
				

	
				 <div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">
                    {{ Form::submit('Submit',['class'=>'btn btn-success'] ) }}
						{{-- <button type="reset" class="btn btn-success">Submit</button> --}}
					<button type="reset" class="btn btn-secondary">Cancel</button>

					</div>
				</div>

				

			  </div>

            
            {!! Form::close() !!}
					
		</div>
		<!--end::Portlet-->
        

      </div>

    <div class="col-md-7">


      <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
	<div class="m-alert__icon">
		<i class="flaticon-exclamation m--font-brand"></i>
	</div>
	<div class="m-alert__text">
		Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual
	</div>
   </div>
  



   <div class="m-portlet m-portlet--mobile">

	<div class="m-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
								<thead>
			  						  <tr>
				  									<th> ID</th>
													<th>Image</th>
				  									<th>Name</th>
				  									<th>Slug</th>
				  									<th>Publish</th>
				  									<th>Date</th>
				  									<th>Actions</th>
				  						</tr>
						       </thead>
			
						<tbody>
				@foreach ($categories as $row )

				<tr>
								<td>{{ $row['id'] }}</td>
								<td><img src="images/{{ $row['image'] }}" style="height:50px;width:50px"> </td>
								<td>{{ $row['name'] }}</td>
								<td>{{ $row['slug'] }}</td>
								<td>{{ $row['publish'] }}</td>
								<td>{{ $row['created_at'] }}</td>
								<td><a href="category/{{ $row['id'] }}/edit">Edit</a></td>
								
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