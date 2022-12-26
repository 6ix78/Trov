<?php
session_start ();



?>


<!DOCTYPE html>
<html lang="zxx" class="js">
    <head> <meta charset="utf-8">
        <meta name="author" content="Dx Coding Web">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."><link rel="shortcut icon" href="asset/img/favicon.png"><title>Sign in| EVERCORE FINANCE</title><link id="skin-default" rel="stylesheet" href="asset/test1.css">
        <link rel="stylesheet" href="asset/main.css">
        <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    </head>
    <body class="nk-body bg-white npc-general pg-auth" >
        <div class="nk-app-root"><div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar"><div class="nk-content ">
                <div class="nk-split nk-split-page nk-split-lg">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45"><div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon bx bx-info-circle"></em></a></div><div class="nk-block nk-block-middle nk-auth-body"><div class="brand-logo pb-5"><a href="login.html" class="logo-link"><img class="logo-light logo-img logo-img-lg" src="asset/img/logo-dark.png" ><img class="logo-dark logo-img logo-img-lg" src="asset/img/logo-dark.png" ></a></div><div class="nk-block-head"><div class="nk-block-head-content"><h5 class="nk-block-title">Code Verification </h5><div class="nk-block-des"><p></p></div></div></div>
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php  } ?>
            <form action="php/otp.php" method="post">
                <div class="form-group"><div class="form-control-wrap">
                    <input type="number" class="form-control form-control-lg" name="otp" placeholder="Enter your Enter your Otp "></div></div>
                    <div class="form-group"><button name="check" class="btn btn-lg btn-danger btn-block">Submit</button></div>
            </form>
            </div> </div> <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true"><div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto"><div class="slider-init" data-slick='{"dots":true, "arrows":false}'><div class="slider-item"><div class="nk-feature nk-feature-center"><div class=""><img class="" src="asset/img/laptop.svg" salt=""></div><div class="nk-feature-content py-4 p-sm-5"><h4>Evercore Finance</h4><p></p></div></div></div><div class="slider-arrows"></div></div></div></div></div></div></div></div><div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoML" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any"><div class="nk-demo-head"></html>