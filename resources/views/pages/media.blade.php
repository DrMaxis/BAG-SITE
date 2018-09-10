@extends('layouts.mediaui')

@section('content')


<div class="mainContainer">
        <img class="overlay" src="{{asset('storage/images/postimages/tv.png')}}">
<div class="container2">
    
    </div>
</div>
    

<div class="vidSelection">


        <div class="video-thumbs">
@if(count($medialinks) > 0)
@foreach($medialinks as $media)
                <div class="vidImage">
                        <a id="{{$media->id}}"><img id="{{$media->id}}" src="storage/images/thumbnails/{{$media->thumbnail}}"/></a>
                     
                    </div>
                  @endforeach
        @else <p> No Video Links Found </p>
        @endif  
            </div>
        </div>
        @endsection




        
   