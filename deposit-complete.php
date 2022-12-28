<?php
session_start();
if (!isset($_SESSION['ref_id'])) {
    header("location: login.php");
}

// if(isset($_GET['user_id'])){
// $user_id = $_GET['user_id'];
// }


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

include 'php/config.php';

if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
}


if (isset($_POST['depo'])) {
    $deposit_amount = $_POST['deposit_amount'];
    $credit_amount = $_POST['credit_amount'];
    $ref_id = $ref;
    $deposit_currency = $_POST['deposit_currency'];
    $trans_id = rand(999999, 111111);
    $stats = "pending";
    $tran = "Deposit";

    if (!empty($deposit_amount) && !empty($credit_amount) && !empty($credit_amount)) {

        $sql = mysqli_query($conn, "INSERT INTO deposit(ref_id,deposit_currency,deposit_amount,trans_id,stats,credit_amount,tran) value('$ref_id','$deposit_currency','$deposit_amount','$trans_id', '$stats','$credit_amount', '$tran')");

        if($sql){
            
    //     //Server settings
    //     $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    //     $mail->isSMTP(); //Send using SMTP
    //     $mail->Host = 'mail.dxcodingweb.site'; //Set the SMTP server to send through
    //     $mail->SMTPAuth = true; //Enable SMTP authentication
    //     $mail->Username = 'danieldx@dxcodingweb.site'; //SMTP username
    //     $mail->Password = ';(4Gg*4#1qDr'; //SMTP password
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    //     $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //     //Recipients
    //     $mail->setFrom('danieldx@dxcodingweb.site', 'Dxcodingweb');
    //     $mail->addAddress('danielderefaka@yahoo.com', 'Daniel Dx'); //Add a recipient

    //     //Content
    //     $mail->isHTML(true); //Set email format to HTML
    //     $mail->Subject = 'Email Verification Code';
    //     $mail->Body = " Your Verification Email is  <br>
    //              <br>
    //              Eco fX";
    //     $mail->AltBody = 'From';


    //     $mail->send();


    }
        }


}
if (isset($_POST['confirm_payment'])) {
    $reference = $_POST['reference'];

    $trans_id = $_POST['trans_id'];
    $sql2 = mysqli_query($conn, "UPDATE deposit SET  confirm_payment = '{$reference}'WHERE trans_id = $trans_id");
    header("Location: transactions_scheduled.php?ref=" . $ref);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" class="js" id="fabb7b9b">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="xJIhMTe3RnF6O1Hb61j52amdOXU1chniH836c26F" />
    <meta name="site-token" content="a275cdfd359e43212d43217d5bO1Hb1231f2d447H83643210" />
    <title>Deposit | Evercore </title>
    <link rel="shortcut icon" href="asset/img/favicon.png" />
    <link rel="stylesheet" href="asset/test2.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/main.css" />

    <!-- System Build v202210271331S7d5 @iO -->
</head>

<body class="nk-body npc-cryptlite has-sidebar has-sidebar-fat" data-theme="">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed is-light x-white" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a class="logo-link nk-sidebar-logo" href="dashboard.php?ref=<?php echo $row['ref_id'] ?>"><img class="logo-img  logo-img-md" src="asset/img/logo.png" /></a>
                    </div>

                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon bx bx-left-arrow-alt"></em></a>
                    </div>
                </div>
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM user WHERE ref_id = {$_SESSION['ref_id']}");
                if (mysqli_num_rows($sql) > 0) {
                    ($row = mysqli_fetch_assoc($sql));


                ?>
                    <div class="nk-sidebar-element">
                        <div class="nk-sidebar-body" data-simplebar>
                            <div class="nk-sidebar-content">
                                <div class="nk-sidebar-widget d-none d-xl-block">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Main Account Balance</h6>
                                            <div class="user-balance">
                                                <?php echo  $row['balance'] ?> <small class="currency">USD</small>
                                            </div>
                                            <div class="user-balance-alt">
                                                0 <span class="currency">ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="user-account-data gy-1">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Profits (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">
                                                    0.00 <span class="currency">USD</span></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Deposit in orders</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text">17.02 USD</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="user-account-actions">
                                        <ul class="g-3">
                                            <li>
                                                <a href="deposit.php?ref=<?php echo $row['ref_id'] ?>" class="btn btn-danger"><span>Deposit</span></a>
                                            </li>
                                            <li>
                                                <a href="withdraw.php?ref=<?php echo $row['ref_id'] ?>" class="btn btn-warning"><span>Withdraw</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                        <div class="user-card-wrap">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>
                                                        <div class="user-avatar bg-info">
                                                            <span><?php echo substr($name, 0, 2); ?></span>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?php echo $row['name'] ?></span>
                                                    <span class="sub-text"><?php echo $row['email'] ?></span>
                                                </div>
                                                <!-- Start Side Bar Mobile  -->
                                                <div class="user-action">
                                                    <em class="icon bx bx-chevron-down"></em>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                        <div class="user-account-info between-center">
                                            <div class="user-account-main">
                                                <h6 class="overline-title-alt">Main Account Balance</h6>
                                                <div class="user-balance">
                                                    <?php echo  $row['balance'] ?> <small class="currency">USD</small>
                                                </div>
                                                <div class="user-balance-alt">
                                                    0 <span class="currency">ETH</span>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="user-account-data">
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Profits (7d)</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <div class="user-account-value">
                                                        <span class="lead-text">
                                                            0.00 <span class="currency">USD</span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Deposit in orders</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <span class="sub-text text-base">17.02 <span class="currency">USD</span></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="user-account-links">
                                            <li>
                                                <a href="withdraw.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Withdraw Funds</span>
                                                    <em class="icon bx bx-wallet "></em></a>
                                            </li>
                                            <li>
                                                <a href="deposit.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Deposit Funds</span>
                                                    <em class="icon bx bx-wallet"></em></a>
                                            </li>
                                        </ul>
                                        <ul class="link-list">
                                            <li>
                                                <a href="profile.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-user"></em><span>View Profile</span></a>
                                            </li>
                                            <li>
                                                <a href="settings.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-cog"></em><span>Account Setting</span></a>
                                            </li>

                                        </ul>
                                        <!-- Mobile Nav End  -->
                                        <ul class="link-list">
                                            <li>
                                                <a href="php/logout.php"><em class="icon bx bx-log-out"></em><span>Sign out</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="nk-sidebar-menu">
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Menu</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="dashboard.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon bx bx-grid-alt"></em></span>
                                                <span class="nk-menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="transactions.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon bx bx-transfer-alt"></em></span>
                                                <span class="nk-menu-text">Transaction</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="investment.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bx-dollar-circle"></i></span>
                                                <span class="nk-menu-text">Investment</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="ourplans.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bx-dollar-circle"></i></span>
                                                <span class="nk-menu-text">Our Plans</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="profile.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bxs-user"></i></span>
                                                <span class="nk-menu-text">My Profile</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="referral.php?ref=<?php echo $row['ref_id'] ?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><i class="icon bx bx-share-alt"></i></span>
                                                <span class="nk-menu-text">Referrals</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="nk-wrap">
                <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon bx bx-menu"></em></a>
                            </div>

                            <div class="nk-header-marque d-none d-md-block pr-md-3 pr-lg-4 pl-md-4 pl-xl-0 flex-grow-0 overflow-hidden">
                                <div class="nk-marque" data-duration="12000">
                                    <ul class="rate-list rate-plain">
                                        <li class="rate-item">
                                            <div class="rate-title">USD/EUR =</div>
                                            <div class="rate-amount">0.941</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/GBP =</div>
                                            <div class="rate-amount">0.826</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/CAD =</div>
                                            <div class="rate-amount">1.361</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/AUD =</div>
                                            <div class="rate-amount">1.493</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/TRY =</div>
                                            <div class="rate-amount">18.95</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/RUB =</div>
                                            <div class="rate-amount">70.86</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/INR =</div>
                                            <div class="rate-amount">83.24</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BRL =</div>
                                            <div class="rate-amount">5.245</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BTC =</div>
                                            <div class="rate-amount">0.00005936</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/ETH =</div>
                                            <div class="rate-amount">0.0008242</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/LTC =</div>
                                            <div class="rate-amount">0.01527</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BCH =</div>
                                            <div class="rate-amount">0.009904</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/BNB =</div>
                                            <div class="rate-amount">0.004024</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/USDC =</div>
                                            <div class="rate-amount">1.00</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/USDT =</div>
                                            <div class="rate-amount">1.00</div>
                                        </li>
                                        <li class="rate-item">
                                            <div class="rate-title">USD/TRX =</div>
                                            <div class="rate-amount">18.11</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm" style="background-color: red;">
                                                    <i class="icon bx bx-user"></i>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status user-status-verified">
                                                        <?php echo $row['stats'] ?>
                                                    </div>
                                                    <div class="user-name">
                                                        <?php echo $row['name'] ?>
                                                        <i class="bx bx-chevron-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <?php $name = $row['name'] ?>
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>
                                                            <div class="user-avatar bg-info">
                                                                <span><?php echo substr($name, 0, 2); ?>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $row['name'] ?></span>
                                                        <span class="sub-text"><?php echo $row['email'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Account Balance</h6>
                                                <div class="user-balance">
                                                    <?php echo $row['balance'] ?> <small class="currency">USD</small>
                                                </div>
                                                <div class="user-balance-alt">
                                                    0<span class="currency">ETH</span>
                                                </div>
                                                <ul class="user-account-links">
                                                    <li>
                                                        <a href="deposit.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Deposit Funds</span>
                                                            <em class="icon bx bx-wallet"></em></a>
                                                    </li>
                                                    <li>
                                                        <a href="withdraw.php?ref=<?php echo $row['ref_id'] ?>" class="link"><span>Withdraw Funds</span>
                                                            <em class="icon bx bx-wallet"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="profile.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-user"></em><span>View Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="settings.php?ref=<?php echo $row['ref_id'] ?>"><em class="icon bx bx-cog"></em><span>Security Setting</span></a>
                                                    </li>
                                                    <!-- <li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li> -->
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="php/logout.php">
                                                            <em class="icon bx bx-log-out"></em><span>Sign out</span></a>
                                                    </li>
                                                </ul>
                                                <!-- <form
                            id="logout-form"
                            action="https://app.investorm.xyz/logout"
                            method="POST"
                            style="display: none"
                          >
                            <input
                              type="hidden"
                              name="_token"
                              value="xJIhMTe3RnF6O1Hb61j52amdOXU1chniH836c26F"
                            />
                          </form> -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-lg">


                    <div class="nk-content-body">
                        <div class="page-dw wide-xs m-auto">
                            <div class="nk-pps-apps">
                                <div class="nk-pps-title text-center">
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM deposit WHERE ref_id = {$_SESSION['ref_id']}");
                                    if (mysqli_num_rows($sql) > 0) {
                                        ($row = mysqli_fetch_assoc($sql));


                                    ?>
                                        <h3 class="title">Make Your Payment</h3>
                                        <p class="caption-text">Your order <strong class="text-dark"> <?php echo $trans_id ?></strong> has been placed successfully. To complete, please send the exact amount of <strong class="text-dark"> <?php echo $deposit_amount ?> <?php echo $deposit_currency ?></strong> to the address below.</p>
                                </div>
                                <div class="nk-pps-card card card-bordered popup-inside">
                                    <div class="card-inner-group">
                                        <div class="card-inner card-inner-sm">
                                            <div class="card-head mb-0">
                                                <h6 class="title mb-0">Pay <?php echo $deposit_currency ?></h6>
                                                <div class="card-opt"><span class="counter" data-countdown-second="10799" data-countdown-text="Expire in">Expire in 2:56:22</span></div>
                                            </div>
                                        </div>
                                        <div class="card-inner">

                                            <div class="qr-media mx-auto mb-3 w-max-100px">
                                                <!--?xml version="1.0" encoding="UTF-8"?-->
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100" height="100" viewBox="0 0 100 100">
                                                    <rect x="0" y="0" width="100" height="100" fill="#ffffff"></rect>
                                                    <g transform="scale(3.448)">
                                                        <g transform="translate(0,0)">
                                                            <path fill-rule="evenodd" d="M8 0L8 1L10 1L10 0ZM13 0L13 2L11 2L11 4L10 4L10 3L9 3L9 2L8 2L8 5L9 5L9 6L8 6L8 7L9 7L9 8L8 8L8 10L6 10L6 9L7 9L7 8L6 8L6 9L5 9L5 10L3 10L3 9L4 9L4 8L0 8L0 9L1 9L1 10L0 10L0 11L1 11L1 18L0 18L0 19L1 19L1 18L2 18L2 17L4 17L4 18L3 18L3 19L4 19L4 21L7 21L7 20L6 20L6 19L9 19L9 17L10 17L10 19L11 19L11 21L10 21L10 20L8 20L8 22L9 22L9 24L11 24L11 23L12 23L12 24L13 24L13 25L12 25L12 26L13 26L13 27L14 27L14 28L13 28L13 29L14 29L14 28L15 28L15 29L17 29L17 28L16 28L16 27L17 27L17 26L18 26L18 25L17 25L17 24L16 24L16 23L17 23L17 21L18 21L18 22L19 22L19 24L20 24L20 25L21 25L21 28L20 28L20 26L19 26L19 29L21 29L21 28L22 28L22 29L23 29L23 27L24 27L24 26L26 26L26 27L25 27L25 28L24 28L24 29L25 29L25 28L26 28L26 27L27 27L27 29L28 29L28 27L29 27L29 25L28 25L28 24L29 24L29 23L28 23L28 22L29 22L29 20L27 20L27 19L25 19L25 18L24 18L24 17L26 17L26 15L27 15L27 16L29 16L29 12L28 12L28 10L29 10L29 8L28 8L28 9L27 9L27 8L24 8L24 9L22 9L22 8L20 8L20 7L21 7L21 6L20 6L20 4L21 4L21 3L19 3L19 1L20 1L20 2L21 2L21 1L20 1L20 0L19 0L19 1L17 1L17 0L15 0L15 1L14 1L14 0ZM15 1L15 2L14 2L14 3L13 3L13 4L12 4L12 5L10 5L10 6L9 6L9 7L10 7L10 8L9 8L9 9L10 9L10 10L9 10L9 12L8 12L8 11L5 11L5 12L8 12L8 15L6 15L6 14L7 14L7 13L6 13L6 14L4 14L4 13L3 13L3 15L2 15L2 16L4 16L4 17L6 17L6 18L4 18L4 19L6 19L6 18L7 18L7 17L9 17L9 16L8 16L8 15L10 15L10 16L12 16L12 15L13 15L13 16L14 16L14 17L12 17L12 18L11 18L11 19L13 19L13 21L14 21L14 23L16 23L16 21L14 21L14 20L17 20L17 19L18 19L18 20L19 20L19 19L20 19L20 20L21 20L21 19L23 19L23 20L25 20L25 25L26 25L26 26L27 26L27 27L28 27L28 26L27 26L27 25L26 25L26 24L27 24L27 22L28 22L28 21L26 21L26 20L25 20L25 19L24 19L24 18L21 18L21 19L20 19L20 17L19 17L19 19L18 19L18 18L17 18L17 19L14 19L14 18L15 18L15 17L16 17L16 16L17 16L17 17L18 17L18 15L19 15L19 16L22 16L22 17L23 17L23 16L22 16L22 13L23 13L23 14L24 14L24 15L25 15L25 14L28 14L28 12L27 12L27 10L25 10L25 11L24 11L24 10L22 10L22 9L20 9L20 10L19 10L19 9L18 9L18 8L17 8L17 7L18 7L18 5L19 5L19 3L18 3L18 2L17 2L17 3L18 3L18 5L17 5L17 4L16 4L16 5L15 5L15 4L14 4L14 3L15 3L15 2L16 2L16 1ZM12 5L12 7L11 7L11 6L10 6L10 7L11 7L11 8L12 8L12 9L11 9L11 13L10 13L10 12L9 12L9 13L10 13L10 14L11 14L11 13L14 13L14 14L13 14L13 15L14 15L14 16L15 16L15 15L14 15L14 14L15 14L15 13L16 13L16 15L18 15L18 14L19 14L19 15L21 15L21 14L20 14L20 13L21 13L21 12L20 12L20 11L19 11L19 13L18 13L18 12L15 12L15 11L14 11L14 10L16 10L16 11L17 11L17 8L16 8L16 7L17 7L17 6L16 6L16 7L15 7L15 5ZM13 6L13 7L12 7L12 8L13 8L13 9L15 9L15 7L14 7L14 6ZM19 6L19 7L20 7L20 6ZM12 10L12 11L13 11L13 10ZM21 10L21 11L22 11L22 12L23 12L23 13L24 13L24 12L23 12L23 11L22 11L22 10ZM2 11L2 12L3 12L3 11ZM25 11L25 13L27 13L27 12L26 12L26 11ZM4 15L4 16L6 16L6 17L7 17L7 16L6 16L6 15ZM27 17L27 18L28 18L28 17ZM1 20L1 21L3 21L3 20ZM9 21L9 22L10 22L10 23L11 23L11 22L10 22L10 21ZM21 21L21 24L24 24L24 21ZM12 22L12 23L13 23L13 22ZM22 22L22 23L23 23L23 22ZM8 25L8 29L11 29L11 28L12 28L12 27L11 27L11 26L10 26L10 25ZM13 25L13 26L15 26L15 27L16 27L16 26L17 26L17 25L16 25L16 26L15 26L15 25ZM22 25L22 27L23 27L23 26L24 26L24 25ZM9 26L9 28L11 28L11 27L10 27L10 26ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z" fill="#000000"></path>
                                                        </g>
                                                    </g>
                                                </svg>

                                            </div>
                                            <div class="pay-info text-center">
                                                <h5 class="title text-dark mb-0 clipboard-init" data-clipboard-text="0.1">
                                                    <?php echo $deposit_amount ?> <?php echo $deposit_currency ?> <em class="click-to-copy icon bx bx-copy nk-tooltip" title="" data-original-title="Click to Copy"></em>
                                                </h5>
                                            <?php } ?>
                                            <p class="text-soft"><?php  ?></p>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-label overline-title-alt lg text-center"><?php echo $deposit_currency ?> Address</div>
                                                <div class="form-control-wrap">
                                                    <div class="form-clip clipboard-init nk-tooltip" data-clipboard-target="#wallet-address" title="" data-original-title="Copy">
                                                        <em class="click-to-copy icon bx bx-copy"></em>
                                                    </div>
                                                    <div class="form-icon"><em class="icon bx bx-link-alt"></em></div>


                                                    <?php
                                                    // if($crypto2 < 'USDT'){
                                                    //   echo 'BLUE';
                                                    // }else{
                                                    //   echo 'red';
                                                    // }

                                                    if ($deposit_currency == 'BTC') {
                                                        $sql2 = mysqli_query($conn, "SELECT * FROM wallet_address WHERE BTC = BTC ");
                                                        if (mysqli_num_rows($sql) > 0) {
                                                            ($row = mysqli_fetch_assoc($sql2));


                                                    ?>

                                                            <input readonly="" type="text" class="form-control form-control-lg" id="wallet-address" value="<?php echo $row['BTC'] ?>">

                                                        <?php }
                                                    } else {

                                                        $sql2 = mysqli_query($conn, "SELECT * FROM wallet_address WHERE USDT = USDT ");
                                                        if (mysqli_num_rows($sql) > 0) {
                                                            ($row = mysqli_fetch_assoc($sql2));



                                                        ?>
                                                            <input readonly="" type="text" class="form-control form-control-lg" id="wallet-address" value="<?php echo $row['USDT'] ?>">

                                                    <?php }
                                                    } ?>

                                                </div>


                                            </div>


                                            <div class="nk-pps-action">
                                                <a href="#crypto-paid" class="btn btn-block btn-primary popup-open"><span>Paid <?php echo $deposit_currency ?></span></a>
                                            </div>

                                            <!-- <div class="nk-pps-action pt-2 text-center">
                                                <a href="https://app.investorm.xyz/transactions" class="link link-btn link-primary">Pay Later</a>
                                            </div> -->
                                            <div id="crypto-paid" class="popup">
                                                <div class="popup-content">
                                                    <h6 class="mb-2">Confirm your payment</h6>
                                                    <p>If you already paid, please provide us your payment reference to speed up verification procces.</p>
                                                    <form class="form" action="" method="POST" id="crypto-pay-reference">
                                                        <div class="form-group">
                                                            <div class="form-label">Payment Reference <span class="text-danger">*</span></div>
                                                            <div class="form-control-wrap">
                                                                <input name="reference" type="text" class="form-control " value="" placeholder="Enter your reference id / hash/ wallet address">
                                                            </div>
                                                        </div>
                                                        <ul class="btn-group justify-between align-center gx-4">
                                                            <li><button name="confirm_payment" class="btn btn-primary btn-block">Confirm Payment</button></li>
                                                            <li><a href="#" class="link link-btn link-secondary popup-close">Close</a></li>
                                                        </ul>
                                                        <input type="hidden" name="trans_id" value="<?php echo $trans_id ?>">
                                                        <input type="hidden" name="_token" value="plDgymCr2mQNyc1iSGgdSvUqXCLojSRhigSmHWBi">
                                                    </form>
                                                    <div class="alert-note is-plain mt-4">
                                                        <em class="icon bx bx-bug"></em>
                                                        <p>Account will credited once we confirm that payment has been received.</p>
                                                    </div>
                                                </div>
                                                <div class="popup-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="card-inner bg-lighter">
                                            <ul>
                                                <li class="alert-note is-plain text-danger">
                                                    <em class="icon bx bx-bug-alt"></em>
                                                    <p>Be aware of that this order will be cancelled, if you send any other TRX amount.</p>
                                                </li>


                                                <li class="alert-note is-plain">
                                                    <em class="icon bx bx-info-circle"></em>
                                                    <p>Account will credited once we received your payment.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-pps-action mt-n2">
                                    <ul class="btn-group justify-between align-center gy-3">
                                        <li><a href="https://app.investorm.xyz/transaction/cancel/eUhhUmZiWGZrZlJOaEFRQk13NlVHdz09" class="link link-danger">Cancel Order</a></li>
                                        <li><a href="https://app.investorm.xyz/dashboard" class="link link-primary"><span>Back to Dashboard</span> <em class="icon bx bx-right-arrow-alt"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script src="https://app.investorm.xyz/assets/js/bundle.js?ver=133"></script>
            <script src="https://app.investorm.xyz/assets/js/app.js?ver=133"></script>
            <script src="https://app.investorm.xyz/assets/js/charts.js?ver=133"></script>
</body>

</html>