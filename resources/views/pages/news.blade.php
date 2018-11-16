@extends('layouts.ui') 
@section('xcss')
<style>
    @media only screen and (width:768px) {
        .mainContainer {
            height: 45% !important;
            background-repeat: no-repeat !important;
            position: relative !important;
            left: 8% !important;
            margin-bottom: 50px !important;
        }
        .vidSelection {
            margin: auto !important;
            width: 90% !important;
            height: 227px !important;
            overflow-x: auto !important;
            -ms-overflow-x: auto !important;
            overflow-y: hidden !important;
            -ms-overflow-y: hidden !important;
            white-space: nowrap !important;
            position: inherit;
            float: none;
            border: 2px solid #eee;
            displaY: block;

        }
    }

    @media only screen and (width:1024px) {
        .mainContainer {
            height: 40% !important;
            background-repeat: no-repeat !important;
            position: relative !important;
            left: 20.5% !important;
            margin-bottom: 50px !important;
        }
        .vidSelection {
            margin: auto !important;
            width: 65.6% !important;
            height: 227px !important;
            overflow-x: auto !important;
            -ms-overflow-x: auto !important;
            overflow-y: hidden !important;
            -ms-overflow-y: hidden !important;
            white-space: nowrap !important;
            position: inherit;
            float: none;
            border: 2px solid #eee;
            displaY: block;

        }
        .tvc {
            padding:0px 0px 100px 0px;
        }
    }


    .mainContainer {
        height: 45%;
        background-repeat: no-repeat;
        position: relative;
        left: 30%;
        margin-bottom: 50px;
    }

    img.overlay {
        max-width: 650px !important;
        position: absolute !important;
    }

    .container2 {
        background: #121010 !important;
        width: 650px !important;
        height: 100% !important;
        position: absolute !important;
    }

    .video-thumbs {
        display: inline-flex !important;
        height: 192px !important;
        float: left !important;
    }

    .vidSelection {
        margin: auto;
        width: 50%;
        height: 227px;
        overflow-x: auto;
        -ms-overflow-x: auto;
        overflow-y: hidden;
        -ms-overflow-y: hidden;
        white-space: nowrap;
        position: inherit;
        float: none;
        border: 2px solid #eee;
        displaY: block;

    }

    @media only screen and (max-width:414px) {
        .tvc {
            display: none;
        }
    }

    
.bodybg {
  opacity:1;
}

</style>
@endsection
 
@section('content')

<section class="music-posts section infinite">
    <!-- Latest Blog Start -->
    <div class="latest-blog ptb-100">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-xs-12" style="margin: 0 auto;">
                    <div class="section-title text-center mb-40">
                        <h3 class="section-info">LATEST NEWS</h3>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Blog Activation Start -->
                    <div class="blog owl-carousel">
                        <!-- Single Blog Start -->
                        @if(count($news) > 0 ) @foreach($news as $article)
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{$article->sourcelink}}"><img src="{{sourceImage($article->image)}}" alt="blog-image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-content-upper">
                                    <h6 class="blog-title"><a href="{{$article->sourcelink}}">{{$article->title}}</a></h6>
                                    <p>{!!$article->description!!}</p>
                                </div>
                                <div class="blog-content-lower">
                                    <ul class="blog-lower-social">
                                        @if($article->spotify != null)
                                        <li class="nav-item"><a href="{{$article->spotify}}" class="nav-link pl-8"><i class="fa fa-spotify"></i></a></li>
                                        @endif @if($article->applemusic != null)
                                        <li class="nav-item"><a href="{{$article->applemusic}}" class="nav-link pl-8"><i class="fa fa-apple"></i></a></li>
                                        @endif @if($article->soundcloud != null)
                                        <li class="nav-item"><a href="{{$article->soundcloud}}" class="nav-link pl-8"><i class="fa fa-soundcloud"></i></a></li>
                                        @endif @if($article->youtube != null)
                                        <li class="nav-item"><a href="{{$article->youtube}}" class="nav-link pl-8"><i class="fa fa-youtube"></i></a></li>
                                        @endif
                                    </ul>
                                    <span class="f-right">{{presentDate($article->created_at)}}</span>

                                </div>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                        @endforeach @else
                        <p>No News Found!</p>
                        @endif
                        <!-- Single Blog End -->
                    </div>
                    <!-- Blog Activation End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Latest Blog End -->


</section>

<div class="tvc ptb-100">

    <div class="mainContainer">
        <img class="overlay" src="{{asset('storage/public/images/postimages/tv.png')}}">
        <div class="container2">

        </div>
    </div>


    <div class="vidSelection">


        <div class="video-thumbs">
            @if(count($medialinks) > 0) @foreach($medialinks as $media)
            <div class="vidImage" vid-data-id="{{$media->id}}" vid-data-source="{{$media->source}}">
                <a><img src="storage/public/images/thumbnails/{{$media->thumbnail}}"/></a>

            </div>
            @endforeach @else
            <p> No Video Links Found </p>
            @endif
        </div>
    </div>

</div>

<!-- Latest Blog Start -->
<div class="latest-blog ptb-100">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-xs-12" style="margin: 0 auto;">
                <div class="section-title text-center mb-40">
                    <h3 class="section-info">LATEST MUSIC RELEASES</h3>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Blog Activation Start -->
                <div class="blog owl-carousel">
                    @if(count($posts) > 0 ) @foreach($posts as $post)
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="{{$post->sourcelink}}"><img src="{{asset("storage/public/images/postimages/$post->postimage")}}" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-content-upper">
                                <h6 class="blog-title"><a href="{{$post->sourcelink}}">{{$post->title}}</a></h6>
                                <p>The blog of Belgian designer Sarah Van Peteghem, Coco Lapine Design is the space where she
                                    shares all.</p>
                            </div>
                            <div class="blog-content-lower">
                                <ul class="blog-lower-social">
                                    <li class="nav-item"><a href="{{$post->spotify}}" class="nav-link pl-8"><i class="fa fa-spotify"></i></a></li>
                                    <li class="nav-item"><a href="{{$post->applemusic}}" class="nav-link pl-8"><i class="fa fa-apple"></i></a></li>
                                    <li class="nav-item"><a href="{{$post->soundcloud}}" class="nav-link pl-8"><i class="fa fa-soundcloud"></i></a></li>
                                    <li class="nav-item"><a href="https://www.youtube.com/channel/UCt_zdr6MKrcmco0PMyz1aJg" class="nav-link pl-8"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <span class="f-right">{{presentDate($post->created_at)}}</span>

                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    @endforeach @else
                    <p> no posts found</p>
                    @endif
                </div>
                <!-- Blog Activation End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Latest Blog End -->










@section('xjs')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/musicajax.js')}}"></script>





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

@endsection