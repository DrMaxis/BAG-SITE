

<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/bpb.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('storage/fonts/MeltdownMF.woff')}}">

        

        <title>{{config('app.name', 'bpb')}}</title>


      
    </head>
    <body> 
      
      
        <nav class="navbar navbar-default navbar-expand-lg navbar-light">
            <div class="navbar-header d-flex col">
              <a class="navbar-brand" href="{{route('landing')}}"><img src="{{asset('storage/images/postimages/bag561.png')}}">BrownPaperBag</a>  		
              <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
              <ul class="nav navbar-nav">
                  <li class="nav-item" id="lg-green"><a href="{{route('news')}}" class="nav-link">News</a></li>	
                <li class="nav-item" id="lg-green"><a href="{{route('music')}}" class="nav-link">Music</a></li>			
                <li class="nav-item" id="lg-green"><a href="{{route('media')}}" class="nav-link">Media</a></li>
                <li class="nav-item" id="lg-green"><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
                <li class="nav-item" id="lg-green" ><a href="{{route('merch')}}" class="nav-link">Merch</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right ml-auto">
                
                <li class="nav-item"><a href="https://exit.sc/?url=https%3A%2F%2Fopen.spotify.com%2Fartist%2F4kErMlvjhSQivgmHgmOPhY" class="nav-link"><i class="fa fa-spotify"></i></a></li>
                <li class="nav-item"><a href="https://itunes.apple.com/us/album/the-bag-tape/1406465736" class="nav-link"><i class="fa fa-apple"></i></a></li>
                <li class="nav-item"><a href="https://soundcloud.com/brownpaperbag404" class="nav-link"><i class="fa fa-soundcloud"></i></a></li>
                <li class="nav-item"><a href="https://www.youtube.com/channel/UCt_zdr6MKrcmco0PMyz1aJg" class="nav-link"><i class="fa fa-youtube"></i></a></li>
                <li class="nav-item"><a href="https://twitter.com/notbrownpaprbag?lang=en" class="nav-link"><i class="fa fa-twitter"></i></a></li>
              </ul>
              
            </div>
          </nav>





      
      
    
                          
                                  
                          
                          
                          
                        
               











@yield('content')





<script  language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/jquery.js')}}"></script>
<script  language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/jsbundler.js')}}"></script>

    </body>
    </html>