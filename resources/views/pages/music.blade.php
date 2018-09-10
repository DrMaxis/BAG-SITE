@extends('layouts.ui')
@section('content')

        <section class="music-posts section infinite" data-next-page="{{$posts->nextPageUrl()}}">
                <div class="container">
                        <div class="row" id="data">
            @if(count($posts) > 0 )
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="post post-style">
                         

                            <div class="postImage">
                                
                                    

                                           
                                 
                         
                                   

                                   <div>
                                       <img  src="{{asset("storage/images/postimages/$post->postimage")}}" alt="post image">
                                       

                                
                                   </div>
                            

                            </div>
            <a class="avi" href="#"><img src="{{asset("storage/images/postimages/$post->avi")}}" alt="Artist Image"></a>
            <div class ="post-content">
                    <h4 class="title"><p><b>{{$post->title}}</b></p></h4>
                     <ul class="post-footer">
                            <li><a href="{{$post->tweet}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$post->soundcloud}}"><i class="fa fa-soundcloud"></i></a></li>
                            <li><a href="{{$post->spotify}}"><i class="fa fa-spotify"></i></a></li>
                        </ul> 
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
