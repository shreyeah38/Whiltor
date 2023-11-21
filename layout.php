<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Whiltor</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/icon.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/icon.png') }}" rel="apple-touch-icon" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

    <!-- addons CSS Files -->
    <link href="{{ asset('assets/addons/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/addons/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/addons/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/addons/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/addons/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css') }}" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" />
    <!-- Start of Async Drift Code -->
<script>
    "use strict";

    !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
        t.factory = function(e) {
          return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
          };
        }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
        };
      }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('5h837i4yptk3');
    </script>
    <!-- End of Async Drift Code -->
    @yield('styles')
</head>

<body>
    @include('partials/navbar')
    @yield('content')
    @include('partials/footer')

    <!-- go to top button -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content " width="100% " height="100% " viewBox="-1 -1 102 102 ">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98 " />
        </svg>
    </div>
    <!-- go to top button -->

    <!-- addons JS Files -->
    <script src="{{ asset('assets/addons/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/addons/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/addons/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/addons/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/addons/php-email-form/validate.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js "></script>
    <script src="{{ asset('assets/addons/swiper/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js "></script>




    <script>
        const swiper = new Swiper(".swiper-container ", {
            // Optional parameters
            direction: "horizontal ",
            loop: false,
        });
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js "></script>
    <script src="{{ asset('assets/bttb/index.js') }}"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js "></script>
    <!-- Start of Async Drift Code -->
    <!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('5h837i4yptk3');
</script>
<!-- End of Async Drift Code -->
    <!-- End of Async Drift Code -->

    <!-- Custom scripts -->








</body>

</html>
