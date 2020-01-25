@extends('layouts.app')

@section('content')
  {{$product}}
  <div class="row">
    <div class="col d-flex justify-content-center">
      <h1>{{$product->name}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      <img src="../storage/{{$product->image}}" class="card-img-top" alt="{{$product->image}}">
    </div>
    <div class="col">
      @if ($product->discount > 0)
              <p class="card-text"><strike>{{number_format($product->price, 2)}} &euro;</strike></p>
              <p class="card-text text-danger">{{number_format($product->price*(1-$product->discount/100), 2)}} &euro;</p>
      @else
              <p class="card-text">{{number_format($product->price, 2)}} &euro;</p>
              
      @endif
      <p>{{$product->description}}</p>
      <p>{{$product->SKU}}</p>
    </div>
  </div>
@endsection
