@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST'] ) !!}
      <div class="from-group">
        {{Form::label('title', 'TITLE')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title text'])}}
      </div>
      <br>
      <div class="from-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body text'])}}
      </div>
      <br>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
