@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class=" d-inline-block">Order List (Table)</h2>
	<a href="{{route('orders.create')}}" class="btn btn-success float-right">Add Item</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucherno</th>
				<th>Orderdate</th>
				<th>Status</th>
				<th>Note</th>
				<th>Total</th>
				<th>User_id</th>

			</tr>
		</thead>
		<tbody>
			@php $i=1 ;@endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$order->voucherno}}</td>
				<td>{{$order->orderdate}}</td>
				<td>{{$order->status}}</td>
				<td>{{$order->note}}</td>
				<td>{{$order->total}}</td>
				<td>{{$order->user_id}}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection
@section('script')
@endsection