<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html lang="{{ app()->getLocale() }}">

    @include('inc.head')

<body>
  @include('inc.navbar')
  <section>
    <section class="xbox expand">

      <section id="content">
        <section class="xbox expand">
          <section>
            <section class="ybox">
              <section class="scrollable padder-lg w-f-md" id="bjax-target">

                <div class="row row-sm">
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




  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/jsbundler.js')}}"></script>
  @yield('xjs')
</body>

</html>