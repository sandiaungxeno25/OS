@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Order Detail</h2>
	
		<div class="row">
			<div class="offset-2 col-md-8">
				<table class="table table-bordered">
				<tbody>
			<tr>
				<td class="font-weight-bold text-center" colspan="4">
					<p>Xeno Shop</p>
					<p>Mandalay</p>
					<p>Tel: 092345678</p>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<div class="row">

						<div class="col-md-3 font-weight-bold">Casher<br><br>Voucher</div>
						<div class="col-md-3">
							{{Auth::user()->name}}
							<br>
							<br>
							{{$order->voucherno}}
						</div>
						<div class="col-md-3 font-weight-bold">Date<br><br>Order Time</div>
						<div class="col-md-3">
							<?php $d=date('Y-m-d');
							echo $d; ?>
							<br>
							<br>
							{{$order->created_at}}
						</div>
					</div>
					
				</td>
			</tr>
			<tr>
				<th>Item Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Amount</th>

			</tr>
			@foreach($order->items as $order1)
			<tr>
				<td>{{$order1->name}}</td>
				<td>{{$order1->price}}</td>
				<td>{{$order1->pivot->qty}}</td>
				<td>{{$order1->pivot->qty*$order1->price}}</td>
			</tr>
			@endforeach

			<tr>
				<td colspan="3">Total Amount</td>
				<td>{{$order->total}}</td>
			</tr>
		</tbody>
		</table>
			</div>
		</div>


	

</div>

@endsection