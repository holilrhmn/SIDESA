@extends('frontend.templates.default')

@section('content')

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <h2 class="center">Data SIDESA</h2>
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Data Warga</h5>
            <div class="center">
                <h4 id="count">{{ $warga }}</h4>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">nature_people</i></h2>
            <h5 class="center">Data Perkebunan</h5>
            <div class="center">
                <h4 id="counter">{{ $kebun }}</h4>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Kelola Desamu sekarang dengan SIDESA</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('assets/frontend_user/pemandangan3.jpg') }}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Sejarah Desa</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Kelola Desamu sekarang dengan SIDESA</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('assets/frontend_user/pemandangan2.jpg') }}" alt="Unsplashed background img 3"></div>
  </div>

  <!--  Scripts-->
  
  <script type="text/javascript">
     function animateValue(obj, start = 0, end = null, duration = 3000) {
    if (obj) {

        // save starting text for later (and as a fallback text if JS not running and/or google)
        var textStarting = obj.innerHTML;

        // remove non-numeric from starting text if not specified
        end = end || parseInt(textStarting.replace(/\D/g, ""));

        var range = end - start;

        // no timer shorter than 50ms (not really visible any way)
        var minTimer = 50;

        // calc step time to show all interediate values
        var stepTime = Math.abs(Math.floor(duration / range));

        // never go below minTimer
        stepTime = Math.max(stepTime, minTimer);

        // get current time and calculate desired end time
        var startTime = new Date().getTime();
        var endTime = startTime + duration;
        var timer;

        function run() {
            var now = new Date().getTime();
            var remaining = Math.max((endTime - now) / duration, 0);
            var value = Math.round(end - (remaining * range));
            // replace numeric digits only in the original string
            obj.innerHTML = textStarting.replace(/([0-9]+)/g, value);
            if (value == end) {
                clearInterval(timer);
            }
        }

        timer = setInterval(run, stepTime);
        run();
    }
}

animateValue(document.getElementById("count"));
  </script>

<script type="text/javascript">
    function animateValue(obj, start = 0, end = null, duration = 3000) {
   if (obj) {

       // save starting text for later (and as a fallback text if JS not running and/or google)
       var textStarting = obj.innerHTML;

       // remove non-numeric from starting text if not specified
       end = end || parseInt(textStarting.replace(/\D/g, ""));

       var range = end - start;

       // no timer shorter than 50ms (not really visible any way)
       var minTimer = 50;

       // calc step time to show all interediate values
       var stepTime = Math.abs(Math.floor(duration / range));

       // never go below minTimer
       stepTime = Math.max(stepTime, minTimer);

       // get current time and calculate desired end time
       var startTime = new Date().getTime();
       var endTime = startTime + duration;
       var timer;

       function run() {
           var now = new Date().getTime();
           var remaining = Math.max((endTime - now) / duration, 0);
           var value = Math.round(end - (remaining * range));
           // replace numeric digits only in the original string
           obj.innerHTML = textStarting.replace(/([0-9]+)/g, value);
           if (value == end) {
               clearInterval(timer);
           }
       }

       timer = setInterval(run, stepTime);
       run();
   }
}

animateValue(document.getElementById("counter"));
 </script>
    
@endsection