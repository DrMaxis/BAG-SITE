@extends('layouts.ui')
@section('content')

        <section class="music-posts section infinite" data-next-page="{{$news->nextPageUrl()}}">
                <div class="container">
                        <div class="newsContainer" id="newsData">

            @if(count($news) > 0 )
            @foreach($news as $article)
                <div class="newsArticle">
                    
                        <div class="newsContent">
                         

                            <div class="newsImage">
                                
                                    

                                           
                                 
                            
                                   
{{-- {{asset("storage/images/postimages/$article->postimage")}} --}}
                                   <div>
                                       
                                          <iframe width="100%" height="100%" src="{{$article->sourcelink}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                      

                                        
                                   </div>
                            

                            </div>


            
            <div class ="newsInfo">
                    <h4 class="title"><p><b>{{$article->title}}</b></p></h4>
                    <p>
                        {{$article->info}}
                    </p>
            </div>
                        </div>
                    </div>
                
            
        
        @endforeach
                @else <p> no posts found</p>
            @endif
                </div>
            </div>
           

            <div class="jax">

            </div>
        </section>
    


      

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script  language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/musicajax.js')}}"></script> 

@endsection
