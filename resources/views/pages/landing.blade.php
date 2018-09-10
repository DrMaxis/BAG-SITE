@extends('layouts.landingUI')

@section('content')




             
                    
                    <div class="container">
                     <div class="container">
                  <a href="https://soundcloud.com/notbrownpaperbag/sets/the-bag-tape"><img class="filter" id="landingImage" src="{{asset('storage/images/postimages/bagtape.jpg')}}"></a>
              </div>


              <br><br>
                    <div class="mediaContainer ">
                  
             
              
                      <div class="containera">
                  @if(count($medialinks) > 0 )
                  @foreach($medialinks ->slice(7, 1) as  $link)

                  <div id="videoholder">
                 <iframe width="100%" height="100%" src="{{$link->source}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
                  </div>

                  

@endforeach
            @else <p> No Videos can be found.</p>
        @endif

        

              </div>

              <br><br>

 
                  @foreach($medialinks ->slice(8, 1) as  $link)

                  <div id="videoholder">
                 <iframe width="100%" height="100%" src="{{$link->source}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
                  </div>
                  @endforeach

  
              </div>
            </div>
          
            
                  </section>
              
                


                  <svg>
                      <filter id="glitch">
                        <feColorMatrix in="SourceGraphic" type="matrix" values="1   0   0   0   0
                                  0   0   0   0   0
                                  0   0   0   0   0
                                  0   0   0   1   0 " result="red"></feColorMatrix>
                        <feColorMatrix in="SourceGraphic" type="matrix" values="0   0   0   0   0
                                  0   1   0   0   0
                                  0   0   0   0   0
                                  0   0   0   1   0 " result="green"></feColorMatrix>
                        <feColorMatrix in="SourceGraphic" type="matrix" values="0   0   0   0   0
                                  0   0   0   0   0
                                  0   0   1   0   0
                                  0   0   0   1   0 " result="blue"></feColorMatrix>
                        <feOffset in="red" result="red" dx="1.42972">
                          <animate attributeName="dx" attributeType="XML" values="0; -3; 1; 0; 2; -1; 0;" dur="2s" repeatCount="indefinite"></animate>
                        </feOffset>
                        <feOffset in="green" result="green" dx="1.14377">
                          <animate attributeName="dx" attributeType="XML" values="0; 2; -1; 1; 0; 1; 0;" dur="2.5s" repeatCount="indefinite"></animate>
                        </feOffset>
                        <feOffset in="blue" result="blue" dx="0.289155">
                          <animate attributeName="dx" attributeType="XML" values="0; 1; 2; -4; 2; 6; 0;" dur="2s" repeatCount="indefinite"></animate>
                        </feOffset>
                        
                        <feBlend in="red" in2="green" mode="screen" result="blend"></feBlend>
                        <feBlend in="blend" in2="blue" mode="screen" result="blend"></feBlend>
                      <feGaussianBlur in="blend" stdDeviation="0.762516">
                        <animate attributeName="stdDeviation" attributeType="XML" values="0; 2; 1; 0.3; 2; 1; 0.5 ;3; 0" dur="5s" repeatCount="indefinite"></animate>
                      </feGaussianBlur>
                      </filter>
                    </svg>

              @endsection
    


