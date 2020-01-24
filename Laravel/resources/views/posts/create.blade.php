@extends('layouts.app')

@section('content')
  <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST'] ) !!}
      <div class="from-group">
        {{Form::label('title', 'TITLE')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title text'])}}
      </div>
      <br>
      <div class="from-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body text'])}}
      </div>
      <br>
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
