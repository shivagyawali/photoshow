@extends('layouts.app')

@section('content')
  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a href="/albums/{{$photo->album_id}}" class="waves-effect waves-light btn blue">Back To Gallery</a>
  <hr>
      <div class="row">

  <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" class="responsive-img">
      </div>
  <br><br>
  {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete Photo', ["class"=>"waves-effect waves-light btn red"])}}
  {!!Form::close()!!}
  <hr>
  <small>Size: {{$photo->size}}</small>
@endsection
