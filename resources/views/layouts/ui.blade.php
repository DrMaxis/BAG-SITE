<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html lang="{{ app()->getLocale() }}">

@include('inc.head')

<body class="bodybg">

  @include('inc.navbar')

  


  <section>
    <section class="xbox expand">

      <section id="content">
        <section class="xbox expand">
          <section>
            <section class="ybox">
              <section class="scrollable padder-lg w-f-md">

                <div class="row row-sm" style="display:block;">
                  @yield('content')

                </div>
 @include('inc.footer')

              </section>
            </section>
          </section>
        </section>
      </section>
    </section>
  </section>
 

  @yield('xjs')

  <script language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/jquery.js')}}"></script>
  <script language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/jsbundler.js')}}"></script>
  <script language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/owl.carousel.min.js')}}"></script>
  <script language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/init.js')}}"></script>

</body>

</html>