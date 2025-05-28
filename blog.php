<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--=====TITLE=======-->
  <title> Blog || Wealth Guard Tax</title>

  <!--=====FAV ICON=======-->
  <link rel="shortcut icon" href="assets/img/logo/titel-logo.png">

  <!--=====CSS=======-->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/swiper.bundle.css">
  <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
  <link rel="stylesheet" href="assets/css/plugins/mobile-menu.css">
  <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/plugins/aos.css">
  <link rel="stylesheet" href="assets/css/plugins/modal-video.min.css">
  <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
  <link rel="stylesheet" href="assets/css/typography.css">
  <link rel="stylesheet" href="assets/css/comon.css">
  <link rel="stylesheet" href="assets/css/animation.css">
  <link rel="stylesheet" href="assets/css/master.css">

  <!--=====JQUERY=======-->
  <script src="assets/js/plugins/jquery-3-6-0.min.js"></script>
</head>

<body>
  
  <div id="preloader">
    <div id="loader"></div>
  </div>

  <!--=====progress START=======-->

  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
  </div>

  <?php include 'header.php'; ?>

  <!--============= pages-hero-area ============-->
  <div class="inner-page-hero-area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 m-auto text-center">
          <div class="hadding hadding-sec">
            <h1>Blog</h1>
            <h6>Home > Blog</h6>
          </div>
        </div>
      </div>
    </div>
    <img src="assets/img/shapes/shape-1.svg" alt="" class="shape-bottom-right _absolute">
    <img src="assets/img/shapes/shape-1.svg" alt="" class="shape-bottom-left _absolute">
  </div>
  <!--============= pages-hero-area ============-->

  <?php include 'hero.php'; ?>
  <?php include 'footer.php'; ?>

  <!--=====JS=======-->
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/swiper.bundle.js"></script>
  <script src="assets/js/plugins/fontawesome.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="assets/js/plugins/mobile-menu.js"></script>
  <script src="assets/js/plugins/jquery.nice-select.js"></script>
  <script src="assets/js/plugins/jquery.countup.js"></script>
  <script src="assets/js/plugins/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Success Popup -->
  <div id="successPopup" class="popup-overlay">
    <div class="popup-box">
      <svg viewBox="0 0 52 52" width="80" height="80">
        <circle cx="26" cy="26" r="25" fill="none" stroke="#e59000" stroke-width="2" />
        <path fill="none" stroke="#e59000" stroke-width="5" d="M14 27 l8 8 l16 -16" stroke-linecap="round"
          stroke-linejoin="round">
          <animate attributeName="stroke-dasharray" from="0,50" to="50,0" dur="0.5s" fill="freeze" />
        </path>
      </svg>
      <h3>Submission Successful</h3>
      <p>We’ll contact you shortly.</p>
      <button onclick="closePopup('successPopup')">Close</button>
    </div>
  </div>

  <!-- Error Popup -->
  <div id="errorPopup" class="popup-overlay">
    <div class="popup-box">
      <svg viewBox="0 0 52 52" width="80" height="80">
        <circle cx="26" cy="26" r="25" fill="none" stroke="red" stroke-width="2" />
        <path fill="none" stroke="red" stroke-width="5" d="M16 16 l20 20 M36 16 l-20 20" stroke-linecap="round"
          stroke-linejoin="round">
          <animate attributeName="stroke-dasharray" from="0,50" to="50,0" dur="0.5s" fill="freeze" />
        </path>
      </svg>
      <h3>Submission Failed</h3>
      <p>Something went wrong. Please try again.</p>
      <button onclick="closePopup('errorPopup')">Close</button>
    </div>
  </div>


</body>

</html>