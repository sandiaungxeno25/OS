@extends('backendtemplate')
@section('content')
<div class="container-fluid mb-3">

 	<!-- Page Heading -->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
 		<h1 class="h3 mb-0 text-gray-800">Category Edit</h1>
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
 			<form method="POST" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
 				@csrf
 				@method('PUT')
 				
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="category_name" class="form-control" value="{{$category->name}}">
 				</div>
 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="category_photo" class="form-control-file">
 					<img src="{{asset($category->photo)}}" class="img-fluid w-25">
 					<input type="hidden" name="oldphoto" value="{{$category->photo}}">
 				</div>
 				
 				<input type="submit" name="btnsubmit" value=" + Update" class="btn btn-outline-primary">
 			</form>
 		</div>
 	</div>


 </div>
@endsection