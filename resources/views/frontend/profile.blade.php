@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Profile Page</h2>

		<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-4 d-none d-lg-block bg-register-image my-3">
          	<img src="{{(url('frontend/image/ani1.jpg'))}}" alt="Image" class="w-50">
          </div>
          <div class="col-lg-8 my-3 text-left">
          	<h3>Your Profile</h3>
          	{{-- {{Auth::user()}} --}}
          	<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<label>Name</label>
						</div>
						<div class="col-md-6">
							<p>{{Auth::user()->name}}</p>
						</div>
						<div class="col-md-6">
							<label>Email</label>
						</div>
						<div class="col-md-6">
							<p>{{Auth::user()->email}}</p>
						</div>

					</div>

				</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection