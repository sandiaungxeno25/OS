@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Detail (Your UI)</h2>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-4">
			<img src="{{asset($item->photo)}}" class="card-img-top w-75" height="100%">

		</div>
		<div class="col-md-8">
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
					<label>Price</label>
				</div>
				<div class="col-md-6">
					<p>{{$item->price}}</p>
				</div>
				<div class="col-md-6">
					<label>Discount Price</label>
				</div>
				<div class="col-md-6">
					<p>{{$item->discount}}</p>
				</div>
			</div>

		</div>
	</div>
	</div>
	
	@endsection