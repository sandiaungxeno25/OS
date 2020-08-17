@extends('backendtemplate')
@section('content')
<div class="container-fluid mb-3">

 	<!-- Page Heading -->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
 		<h1 class="h3 mb-0 text-gray-800">Subcategories Edit</h1>
 		@if ($errors->any())
 		<div class="alert alert-danger">
 			<ul>
 				@foreach ($errors->all() as $error)
 				<li>{{ $error }}</li>
 				@endforeach
 			</ul>
 		</div>
 		@endif


 		<a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
 	</div>
 	<div class="row">
 		<div class="offset-md-2 col-md-8">
 			<form method="POST" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
 				@csrf
 				@method('PUT')
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="isubcategory_name" class="form-control" value="{{$subcategory->name}}">
 				</div>
 				
 				<div class="form-group">
 					<label>Category</label>
 					<select name="category_id" class="form-control" >
 						<optgroup label="Choose Category">
 							@foreach($categories as $category)
 							<option value="{{$category->id}}"
 								@if($category->id==$subcategory->category_id)
 								{{'selected'}}
 								@endif
 								>{{$category->name}}</option>
 								@endforeach
 							</optgroup>
 						</select>
 					</div>
 				<input type="submit" name="btnsubmit" value=" + Update" class="btn btn-outline-primary">
 			</form>
 		</div>
 	</div>


 </div>
@endsection