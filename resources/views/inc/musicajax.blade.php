 
             @foreach($posts as $post)
                            <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <div class="blog-img">
                                    <a href="{{$post->sourcelink}}"><img src="{{asset("storage/images/postimages/$post->postimage")}}" alt="blog-image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-content-upper">
                                        <h6 class="blog-title"><a href="{{$post->sourcelink}}">{{$post->title}}</a></h6>
                                        <p>The blog of Belgian designer Sarah Van Peteghem, Coco Lapine Design is the space where she shares all.</p>
                                    </div>
                                    <div class="blog-content-lower">
                                        <ul class="blog-lower-social">
                                                <li class="nav-item"><a href="https://exit.sc/?url=https%3A%2F%2Fopen.spotify.com%2Fartist%2F4kErMlvjhSQivgmHgmOPhY" class="nav-link pl-8"><i class="fa fa-spotify"></i></a></li>
                                                <li class="nav-item"><a href="https://itunes.apple.com/us/album/the-bag-tape/1406465736" class="nav-link pl-8"><i class="fa fa-apple"></i></a></li>
                                                <li class="nav-item"><a href="https://soundcloud.com/brownpaperbag404" class="nav-link pl-8"><i class="fa fa-soundcloud"></i></a></li>
                                                <li class="nav-item"><a href="https://www.youtube.com/channel/UCt_zdr6MKrcmco0PMyz1aJg" class="nav-link pl-8" ><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                        <span class="f-right">{{presentDate($post->created_at)}}</span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
        
        @endforeach
                
            
               