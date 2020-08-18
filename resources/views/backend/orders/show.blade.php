@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Order Detail (Your UI)</h2>
	<div class="container-fluid">
		
			<div class="row">
				
				<div class="col-md-6">
					<label> Item Name</label>
				</div>
				<div class="col-md-6">
					<p>{{$order->item->name}}</p>
				</div>
				<div class="col-md-6">
					<label> Price</label>
				</div>
				<div class="col-md-6">
					{{-- <p>{{$order->item->price}}</p> --}}
				</div>
				<div class="col-md-6">
					<label> Qty</label>
				</div>
				<div class="col-md-6">
					{{-- <p>{{$order->orderdetail->qty}}</p> --}}
				</div>
				<div class="col-md-6">
					<label> Total</label>
				</div>
				<div class="col-md-6">
					{{-- <p>{{$order->total}}</p> --}}
				</div>

			</div>
	</div>
	</div>
	
	@endsection