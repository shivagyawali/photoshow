@extends('layouts.app')

@section('content')
    

<h4>{{$album->name}}</h4>

<a href="/" class="waves-effect waves-light btn blue">Go Back</a>
<a href="/photos/create/{{$album->id}}" class="waves-effect waves-light btn black ">Upload Photo To Album</a>
<hr>

<style>

    .gallery-container {
    margin:  auto;
    max-width: 1229px;
    }
</style>



<div class="gallery-container">
    @foreach ($album->photos as $photo)
     <div class="row">
     <a href="/photos/{{$photo->id}}">
     <div class="col s4 m4"><img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="" class=" responsive-img">
         <div class="card-content">
           
        <p class="text-center">{{$photo->title}}</p>
        </div>
       
        </a>
    </div>     
    @endforeach
    
    
</div>
    












@endsection