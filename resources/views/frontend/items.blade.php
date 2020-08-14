@extends('frontendtemplate')
@section('content')

<div class="col-lg-9 my-3">

        <div class="row">

          @foreach($items as $item)

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset($item->photo)}}"alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$item->name}}</a>
                </h4>
                <h5>{{$item->price}}</h5>
              </div>
              <div class="card-footer">

                
                
                <a href="#" class="btn btn-info btn-sm cart" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" >Add to Cart</a>

                <a href="{{route('frontdetail',$item->id)}}" class="btn btn-primary btn-sm float-right">Detail</a>
              </div>
            </div>
          </div>
          @endforeach


        </div>
        <!-- /.row -->

</div>
 @endsection


 @section('script')
 <script type="text/javascript" src="frontend/js/script.js"></script>
 @endsection