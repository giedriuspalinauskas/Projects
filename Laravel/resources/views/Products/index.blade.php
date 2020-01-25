@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col d-flex justify-content-center">
      <h1>Products</h1>
    </div>
  </div>
  @if (Auth::user() != '')
    <a class="btn btn-dark" href="products/create"> + Add product</a>
  @endif
  <br>
  <br>
<div class="row">
  @foreach ($products as $product)
  <div class="col-4 mb-4">
  <div class="card" style="width: 18rem;">
    @if (Auth::user() != '')
      <div class="row">
        <div class="col-5">
          <form class="" action="{{ route('products.destroy', $product->id) }}" method="POST">
            {{ method_field('DELETE') }}
            @csrf
            <button class="btn btn-danger" type="submit" name="submit">Delete</button>
          </form>
        </div>
        <div class="col d-flex justify-content-end">
          <a class="btn btn-success" href="{{route('products.edit', $product->id)}}">Edit</a>
      </div>
    </div>
    @endif
    <img src="storage/{{$product->image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">SKU: {{$product->SKU}}</p>
      @if ($product->discount > 0)
              <p class="card-text"><strike>{{number_format($product->price, 2)}} &euro;</strike></p>
              <p class="card-text text-danger">{{number_format($product->price*(1-$product->discount/100), 2)}} &euro;</p>
      @else
              <p class="card-text">{{number_format($product->price, 2)}} &euro;</p>
      @endif
      <a href="" class="btn btn-primary">Buy</a>
      <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">Review</a>
    </div>
  </div>
  </div>
@endforeach
</div>
@endsection
