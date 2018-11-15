@extends('layouts.mediaui')
@section('xcss')
<style>

    @media only screen and (max-width:414px) {
        footer {
            display:none;
        }
    }
    footer {
            display:none;
        }
    }

    </style>

@endsection
@section('content')


<div class="mainContainer">
    <img class="overlay" src="{{asset('storage/images/postimages/tv.png')}}">
    <div class="container2">

    </div>
</div>


<div class="vidSelection">


    <div class="video-thumbs">
        @if(count($medialinks) > 0) @foreach($medialinks as $media)
        <div class="vidImage" vid-data-id="{{$media->id}}" vid-data-source="{{$media->source}}">
            <a><img src="storage/images/thumbnails/{{$media->thumbnail}}"/></a>

        </div>
        @endforeach @else
        <p> No Video Links Found </p>
        @endif
    </div>
</div>
@endsection
 
@section('xjs')

<script>
    var imageWidth = 300;
                   
                $(".video-thumbs").width($(".vidImage").length*imageWidth);
</script>



<script>
    (function() {
            
            const classname = document.querySelectorAll('.vidImage')
            var clicked=false;
            
            Array.from(classname).forEach(function(element) {
                element.addEventListener('click', function() {
                    const id = element.getAttribute('vid-data-id')
                    const videoSource = element.getAttribute('vid-data-source')
                    $('.container2').empty().append('<iframe width="100%" height="100%" src="'+videoSource+'" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
            clicked=true;
            
                })
            })
             })();
</script>
@endsection