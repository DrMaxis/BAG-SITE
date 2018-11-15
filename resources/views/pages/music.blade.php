@extends('layouts.ui')
@section('content')

        <section class="music-posts section infinite" data-next-page="{{$posts->nextPageUrl()}}">
                <div class="container">
                        <div class="row" id="data">
                                @if(count($posts) > 0 ) 
                                @foreach($posts as $post)
                            <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <div class="blog-img">
                                    <a href="{{$post->sourcelink}}"><img src="{{asset("storage/images/postimages/$post->postimage")}}" alt="blog-image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-content-upper">
                                        <h6 class="blog-title"><a href="{{$post->sourcelink}}">{{$post->title}}</a></h6>
                                        <p>{{$post->body}}</p>
                                    </div>
                                    <div class="blog-content-lower">
                                        <ul class="blog-lower-social">
                                                <li class="nav-item"><a href="{{$post->spotify}}" class="nav-link pl-8"><i class="fa fa-spotify"></i></a></li>
                                                <li class="nav-item"><a href="{{$post->applemusic}}" class="nav-link pl-8"><i class="fa fa-apple"></i></a></li>
                                                <li class="nav-item"><a href="{{$post->soundcloud}}" class="nav-link pl-8"><i class="fa fa-soundcloud"></i></a></li>
                                                <li class="nav-item"><a href="https://www.youtube.com/channel/UCt_zdr6MKrcmco0PMyz1aJg" class="nav-link pl-8" ><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                        <span class="f-right">{{presentDate($post->created_at)}}</span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
        
        @endforeach
                @else <p> no posts found</p>
            @endif
                </div>
            </div>
           

            <div class="testjax">

            </div>
        </section>
    


      

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script  language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/musicajax.js')}}"></script> 

@endsection
