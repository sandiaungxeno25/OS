@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Checkout Page</h2>
	<div id="checkout_body">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="py-3">Check Out</h3>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Item Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>

			

			<div class="offset-md-2 col-md-2 text-left ">
				<a href="{{route('home')}}" class="btn btn-outline-dark">Continue Shopping</a>
			</div>
			<div class="col-md-4">
				<textarea class="form-control notes" placeholder="Your Note Here"></textarea>
			</div>
			<div2= class="col-md-2">
				@role('customer')
				<a href="#" class="btn btn-outline-dark buy_now">Checkout</a>
				@else
				<a href="{{route('login')}}" class="btn btn-outline-dark">Login To Checkout</a>
				@endrole
			</div>
		</div>
	</div>
</div>
</div>
@endsection

@section('script')
 <script type="text/javascript" src="frontend/js/script.js"></script>
 @endsection