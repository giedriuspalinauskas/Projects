@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/Laravel/public/posts">Go Back</a>
  <h1>{{ $post->title}}</h1>
  <p>{{ $post->body}}</p>
  <hr>
  <small>Written at {{$post->created_at}}</small>
  <hr>
  <a href="/Laravel/public/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

  {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'] ) !!}
      {{ Form::hidden('_method', 'DELETE')}}
      {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!! Form::close() !!}
@endsection
