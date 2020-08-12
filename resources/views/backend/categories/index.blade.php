@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class=" d-inline-block">Categories List (Table)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add Item</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Item One</td>
				<td></td>
				<td>
					<a href="{{route('categories.edit',1)}}" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection