@extends('layouts.app')

@section('content')
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
              <p class="card-text">old price: <strike>{{number_format($product->price, 2)}} &euro;</strike></p>
              <p class="card-text text-danger">new price: {{number_format($product->price*(1-$product->discount/100), 2)}} &euro;</p>
      @else
              <p class="card-text">price + tax: {{number_format($product->price*0.79, 2)}} &euro; +  {{number_format($product->price*0.21, 2)}} &euro;</p>
              <p class="card-text">price: {{number_format($product->price, 2)}} &euro; </p>

      @endif
      <p>description: {{$product->description}}</p>
      <p>SKU: {{$product->SKU}}</p>
      <p>Views/submit: {{$product->views}}</p>
    </div>
  </div>
@endsection
