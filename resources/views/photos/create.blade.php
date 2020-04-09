@extends('layouts.app')

@section('content')
  <h3>Upload Photo</h3>
  {!!Form::open(['action' => 'PhotosController@store','class'=>"form-control",'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
  <div class="row">
        <div class="input-field col s6">
    {{Form::text('title','',['placeholder' => 'Photo Title'])}}
       </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
    {{Form::textarea('description','',['placeholder' => 'Photo Description' ,'rows'=>"10" ,'style'=>"margin: 0px; height: 128px; width: 477px;"])}}
       </div>
    </div>
    {{Form::hidden('album_id', $album_id)}}
    <div class="row">
        <div class="input-field col s6">
    {{Form::file('photo')}}
        </div>
    </div>
  <div class="row">
    <div class="input-field col s6">
{{Form::submit('submit',["class"=>"btn waves-effect waves-dark"])}}
    </div>
 {!! Form::close()!!}
  </div>
@endsection
