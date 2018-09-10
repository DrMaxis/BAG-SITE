 
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="post post-style">
                            <div class="postImage">
                                
                                
                               <a href="{{$post->sourcelink}}"> 
                                <img src="{{asset("storage/images/postimages/$post->postimage")}}" alt="post image">
                               </a>


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
                
            
               