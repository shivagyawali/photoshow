@extends('layouts.app')

@section('content')
<style>

    .gallery-container {
    margin:  auto;
    max-width: 1229px;
    }
</style>



<div class="gallery-container">
    @foreach ($albums as $album)
     <div class="row">
     <a href="/albums/{{$album->id}}">
     <div class="col s4 m4"><img src="storage/album_covers/{{$album->cover_image}}" alt="" class=" responsive-img">
         <div class="card-content">
           
        <p class="text-center">{{$album->name}}</p>
        </div>
       
        </a>
    </div>     
    @endforeach
    
    
</div>
    
        @endsection
      

     
