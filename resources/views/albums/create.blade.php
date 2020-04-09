@extends('layouts.app')


@section('content')
<h3>Create Album</h3>
<div class="row">
    {!!Form::open(['action'=>'AlbumsController@store','method'=>'POST',"enctype"=>'multipart/form-data',"class"=>"col s12"] )!!}
<div class="row">
    <div class="input-field col s6">
        {{Form::text('name','',['placeholder'=>'Album Name'])}}
    </div>
</div>
<div class="row">
        <div class="input-field col s6">
            {{Form::text('description','', ['placeholder'=>'Description',"id"=>"textarea1" ,"class"=>"materialize-textarea"])}}
        </div>
</div>

<div class="row">
    <div class="input-field col s6">
        {{Form::file('cover_image',["class" => "file-field input-field"])}}
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
{{Form::submit('submit',["class"=>"btn waves-effect waves-dark"])}}

 {!! Form::close()!!}
  </div>
</div>

@endsection
