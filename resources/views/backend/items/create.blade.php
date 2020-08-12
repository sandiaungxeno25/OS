@extends('backendtemplate')
@section('content')
<div class="container-fluid mb-3">

 	<!-- Page Heading -->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
 		<h1 class="h3 mb-0 text-gray-800">Items Create</h1>
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
 			<form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
 				@csrf
 				<div class="form-group">
 					<label>Codeno:</label>
 					<input type="text" name="item_codeno" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="item_name" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="item_photo" class="form-control-file">
 				</div>
 				<ul class="nav nav-tabs" id="myTab" role="tablist">
 					<li class="nav-item" role="presentation">
 						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
 					</li>
 					<li class="nav-item" role="presentation">
 						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
 					</li>
 					
 				</ul>
 				<div class="tab-content" id="myTabContent">
 					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
 						<div class="form-group my-3">
 							<input type="number" name="unit_price" class="form-control" placeholder="Unit Price">
 						</div>
 					</div>
 					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
 						<div class="form-group my-3">
 							<input type="number" name="discount_price" class="form-control" placeholder="Discount Price">
 						</div>
 					</div>
 					
 				</div>
 				<div class="form-group">
 					<label>Brand</label>
 					<select name="brand_id" class="form-control">
 						<optgroup label="Choose Brand">
 							@foreach($brands as $brand)
 							<option value="{{$brand->id}}">{{$brand->name}}</option>
 							@endforeach
 						</optgroup>
 						
 					</select>
 				</div>
 				<div class="form-group">
 					<label>Sub Category</label>
 					<select name="subcategory_id" class="form-control">
 						<optgroup label="Choose Subcategory">
 							@foreach($subcategories as $subcategory)
 							<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
 							@endforeach
 						</optgroup>
 						
 						
 					</select>
 				</div>
 				<div class="form-group">
 					<label>Description</label>
 					<textarea class="form-control" name="item_des"></textarea>
 				</div>
 				<input type="submit" name="btnsubmit" value=" + Add" class="btn btn-outline-primary">
 			</form>
 		</div>
 	</div>


 </div>
@endsection