@extends('layouts.landingUI') 
@section('xcss')
<style>
  .bodybg {
    opacity: 1;
  }

  @media only screen and (width:320px) {
    .section-info.pt-50 {

      margin-top: 50px;
    }

    footer {
      display:none;
    }
    #l2p {
      max-width: 300px;
      max-height: 300px;
    }
  }
</style>
@endsection
 
@section('content') @if(count($frontPagePosts) > 0 ) @foreach($frontPagePosts -> slice(0,2) as $post)
<div class="container" style="margin-top:30px; padding-right:0px;">
  <div class="row">
    <!-- Section Title Start -->
    <div class="col-xs-12" style="margin: 0 auto;">
      <div class="section-title text-center mb-40">
        <h3 class="section-info">{{$post->title}}</h3>
      </div>
    </div>
    <!-- Section Title End -->
  </div>
  @if($post->youtube != null)
  <iframe width="100%" height="100%" src="{{$post->youtube}}" class="screen" frameborder="0" allow="autoplay; encrypted-media"
    allowfullscreen></iframe> @else
  <a href="{{$post->source}}"><img id="l2p" src="{{sourceImage($post->image)}}"></a>  @endif
</div>
@endforeach @endif










<svg style="display:contents;">
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