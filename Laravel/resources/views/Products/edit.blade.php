@extends('layouts.app')

@section('content')
  <h1>Edit product</h1>
  <div class="row">
    <div class="col">
      <form class="" action="{{ route('products.update', $product->id) }}" method="post">
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Product name: </label>
              <input class="form-control" type="text" name="name" value="{{$product->name}}" placeholder="product name">
          </div>
        </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Price: </label>
              <input class="form-control" type="number" name="price" value="{{$product->price}}" placeholder="price">
            </div>
          </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Discount (%): </label>
              <input class="form-control" type="number" name="discount" value="{{$product->discount}}" placeholder="discount">
            </div>
          </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Description: </label>
              <textarea class="form-control"  name="description" rows="8" cols="120">{{$product->description}}</textarea>
            </div>
          </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Status: </label>
              <select class="form-control" name="status" >
                <option value="enable">{{$product->status}}</option>
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-end m-5">
              @csrf
              {{ method_field('PUT') }}
              <button class="btn btn-success" type="submit" name="submit">Edit</button>
            </div>
          </div>
      </form>
    </div>
  </div>

@endsection
