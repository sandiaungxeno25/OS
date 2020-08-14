@extends('frontendtemplate')
@section('content')

{{-- <div class="container-fluid"> --}}
	
	<div class="col-lg-9">
		<h2>Item Detail (Your UI)</h2>
		<div class="container">
		<div class="card mb-3 border-0" style="max-width: 540px;">
			<div class="row no-gutters">
				<div class="col-md-6">
					<img src="{{asset($item->photo)}}" class="card-img-top w-75" height="100%">

				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<label>Product Name</label>
						</div>
						<div class="col-md-6">
							<p>{{$item->name}}</p>
						</div>
						<div class="col-md-6">
							<label>Code NO</label>
						</div>
						<div class="col-md-6">
							<p>{{$item->codeno}}</p>
						</div>
						<div class="col-md-6">
							<label>Product Price</label>
						</div>
						<div class="col-md-6">
							<p>{{$item->price}}</p>
						</div>
						<div class="col-md-6">
							<label>Description</label>
						</div>
						<div class="col-md-6">
							<p>{{$item->description}}</p>
						</div>
						<div class="col-md-6">
							<label> Brand</label>
						</div>
						<div class="col-md-6">
							<p>Sony</p>
						</div>
						<div class="col-md-6">
							<label> Subcategory</label>
						</div>
						<div class="col-md-6">
							<p>Red</p>
						</div>
						<div class="col-md-6">
							<label>Qty</label>
						</div>
						<div class="col-md-6">
							<input type="number" name="qty" class="itemqty">
						</div>

					</div>
					<a href="#" class="btn btn-info btn-sm cart" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">Add to Cart</a>

				</div>
			</div>
	</div>
	</div>
</div>
@endsection
@section('script')
 <script type="text/javascript" src="frontend/js/script.js"></script>
 @endsection