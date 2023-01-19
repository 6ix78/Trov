
<?php





?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <title>Evercore</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Evercore Website ">
  <meta name="keywords" content="evercore, invest, investment, website , finance, double, gain, money, website">
  <meta name="author" content="Dx Coding Web">

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon and Touch Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png  ">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="red">
  <link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#080032">

  <meta name="theme-color" content="#ffffff">

  <!-- Vendor Styles -->
  <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css" />
  <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css" />

  <!-- Main Theme Styles + Bootstrap -->
  <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
  <link rel="stylesheet" media="screen" href="assets/css/custom.css">

  <!-- Page loading styles -->
  <style>
    .page-loading {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -webkit-transition: all .4s .2s ease-in-out;
      transition: all .4s .2s ease-in-out;
      background-color: #fff;
      opacity: 0;
      visibility: hidden;
      z-index: 9999;
    }

    .dark-mode .page-loading {
      background-color: #0b0f19;
    }

    .page-loading.active {
      opacity: 1;
      visibility: visible;
    }

    .page-loading-inner {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      text-align: center;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: opacity .2s ease-in-out;
      transition: opacity .2s ease-in-out;
      opacity: 0;
    }

    .page-loading.active>.page-loading-inner {
      opacity: 1;
    }

    .page-loading-inner>span {
      display: block;
      font-size: 1rem;
      font-weight: normal;
      color: #9397ad;
    }

    .dark-mode .page-loading-inner>span {
      color: #fff;
      opacity: .6;
    }

    .page-spinner {
      display: inline-block;
      width: 2.75rem;
      height: 2.75rem;
      margin-bottom: .75rem;
      vertical-align: text-bottom;
      border: .15em solid #b4b7c9;
      border-right-color: transparent;
      border-radius: 50%;
      -webkit-animation: spinner .75s linear infinite;
      animation: spinner .75s linear infinite;
    }

    .dark-mode .page-spinner {
      border-color: rgba(255, 255, 255, .4);
      border-right-color: transparent;
    }

    @-webkit-keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>

  <!-- Theme mode -->
  <script>
    let mode = window.localStorage.getItem('mode'),
      root = document.getElementsByTagName('html')[0];
    if (mode !== null && mode === 'dark') {
      root.classList.add('dark-mode');
    } else {
      root.classList.remove('dark-mode');
    }
  </script>

  <!-- Page loading scripts -->
  <script>
    (function() {
      window.onload = function() {
        const preloader = document.querySelector('.page-loading');
        preloader.classList.remove('active');
        setTimeout(function() {
          preloader.remove();
        }, 1000);
      };
    })();
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
  </script>
</head>


<!-- Body -->

<body>

  <!-- Google Tag Manager (noscript)-->
  <noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
  </noscript>

  <!-- Page loading spinner -->
  <div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span>Evercore Loading...</span>
    </div>
  </div>


  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
  <main class="page-wrapper">


    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
      <div class="container px-3">
        <a href="index-2.html" class="navbar-brand pe-3">
          <img src="assets/img/favicon.png" width="47" alt="Silicon">
          EVERCORE
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link " aria-current="page">Home</a>

              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link ">About Us</a>


              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-bs-toggle="dropdown">Services</a>

              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Investments</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
          <div class="offcanvas-header border-top">
            <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
              <i class="bx bx-cart fs-4 lh-1 me-1"></i>
              &nbsp;Buy now
            </a>
          </div>
        </div>
        <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
          <input type="checkbox" class="form-check-input dark-light" id="theme-mode">
          <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
          <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="user_login.php" class="btn btn-primary login_button btn-sm fs-sm rounded d-none d-lg-inline-flex " target="_blank" rel="noopener">
          <i class="bx bx-log-in fs-5 lh-1 me-1"></i>
          Sign in
        </a>
      </div>
    </header>

    <!-- Main -->

    <!-- Login Page  -->

    <section class="position-relative overflow-hidden py-4 mb-3">
      <div class="container pt-lg-3">
        <div class="row flex-lg-nowrap">
          <div class="col-lg-6 col-xl-7 text-center text-lg-start pt-5 mt-xl-4">
            <!-- Layer parallax -->
            <div class="parallax mt-4 ms-4 me-lg-0 ms-lg-n5 ms-xl-n3 mt-lg-n4">
              <div class="parallax-layer" data-depth="0.5">
                <img src="assets/img/Saly-2.svg" style="width: 500px;" alt="Layer">
              </div>

            </div>


          </div>
          <div class="col-lg-6 col-xl-5  text-lg-start pt-5 pl-20 mt-xl-4">
            <div>
              <h2> Welcome Back </h2>
              <span> Don’t have an account yet? </span>
              <span> <a href="user_register.php"> Sign Up </a></span>
            </div><br>
            <div>
              <section class="sign">
                <form action="php/login.php" method="POST" enctype="multipart/form-data" >
       
                <?php if (isset($_GET['error'])) { ?>
              <div class="error-text2"> <?php echo $_GET['error']; ?></div>
            <?php  } ?>
                  <div class="position-relative mb-4 email_field">
                    <label for="email" class="form-label fs-base ">Email</label>
                    <input type="text" id="email" name="email" class="form-control form-control-lg email" maxlength="40" required>
                    <div class="invalid-feedback position-absolute start-0 top-100 error">Please enter a valid email address!</div>
                  </div>
                  <div class="position-relative mb-4">
                    <label for="password" class="form-label fs-base">Password</label>
                    <div class="password-toggle password_field">
                      <input type="password" id="password"  name="password"  class="form-control form-control-lg" required>
                      <label class="password-toggle-btn " aria-label="Show/hide password">
                        <input class="password-toggle-check password" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                      </label>
                      <div class="invalid-feedback position-absolute start-0 top-100 error">Please enter a valid Password</div>
                    </div><br>
                    <div class="mb-4">
                      <div class="form-check">
                        <input type="checkbox" id="remember" class="form-check-input">
                        <label for="remember" class="form-check-label fs-base">Remember me</label>
                      </div><br>
                      <div class="button">
                        <button type="submit" name="submit" value="Verify Otp" class="btn btn-danger shadow-primary btn-lg w-100"> Sign In </button>
                      </div>
                      <div class="mt-3">
                        <p> <a href="forgot_password.php"> Forgot Password </a></p>
                      </div>
                </form>
              </section>
            </div>


          </div>
        </div>

      </div>
      </div>
    </section>


    <!-- Login Page  -->

    <!-- Main -->
    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>

    <!-- Validation -->
    <script src="assets/js/FormValid.js"></script>
    <!-- Vendor Scripts -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/vendor/rellax/rellax.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
    <!-- <script src="signin.js"></script> -->

</body>

<!-- Mirrored from silicon.createx.studio/landing-saas-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 20:34:47 GMT -->

</html>