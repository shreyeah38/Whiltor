<?php
require('./partials/footer.php')
?>
    <div class="progress-wrap ">
        <svg class="progress-circle svg-content " width="100% " height="100% " viewBox="-1 -1 102 102 ">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98 " />
      </svg>
    </div>
  
    <script src="./assets/addons/aos/aos.js"></script>
    <script src="./assets/addons/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/addons/glightbox/js/glightbox.min.js"></script>
    <script src="./assets/addons/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./assets/addons/php-email-form/validate.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js "></script>
    <script src="./assets/addons/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      var typed = new Typed('.type', {
          strings: [
              'Strategize',
              'Innovate',
              'Transform',
          ],
          typeSpeed: 60,
          backSpeed: 60,
          loop: true,
      });
    </script>
    <script>
        const swiper = new Swiper(".swiper-container ", {
            // Optional parameters
            direction: "horizontal ",
            loop: false,
        });
    </script>

    <script src="./assets/js/main.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js "></script>
    <script src="./assets/bttb/index.js"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js "></script>

    <script>
      function checkWidth() {
        // setInterval(() => {
          if(window.innerWidth <= 1200){
            document.getElementById("landing-text-div-id").classList.remove("container");
            document.getElementById("landing-text-div-id").classList.add("container-fluid");
          }else{
            document.getElementById("landing-text-div-id").classList.add("container");
            document.getElementById("landing-text-div-id").classList.remove("container-fluid");
          }
        // }, 500);
      }
    </script>

</body>
</html>