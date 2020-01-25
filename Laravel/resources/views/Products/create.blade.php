@extends('layouts.app')

@section('content')
  <h1>Create new product</h1>
  <div class="row">
    <div class="col">
      <form class="" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Product name: </label>
              <input class="form-control" type="text" name="name" value="" placeholder="product name">
          </div>
        </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Price: </label>
              <input class="form-control" type="number" name="price" value="" placeholder="price">
            </div>
          </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Discount (%): </label>
              <input class="form-control" type="number" name="discount" value="" placeholder="discount">
            </div>
          </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Description: </label>
              <textarea class="form-control" id="summernote" name="description" rows="8" cols="120"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col form-group mr-5 ml-5">
              <label for="">Status: </label>
              <select class="form-control" name="status">
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class=" col form-group mr-5 ml-5">
              <label for="">Image</label>
              <input type="file" name="image" class="form-control-file">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-end m-5">
              @csrf
              <button class="btn btn-success" type="submit" name="submit">Create</button>
            </div>
          </div>
      </form>
    </div>
  </div>

@endsection
