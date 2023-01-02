<?php
session_start();
$msg = "";
if (!isset($_SESSION['ref_id'])) {
  header("location: login.php");
}

// if(isset($_GET['user_id'])){
// $user_id = $_GET['user_id'];
// }

include 'php/config.php';

if (isset($_GET['ref'])) {
  $ref = $_GET['ref'];
}



if (isset($_POST['submit'])) {
  $transfer = $_POST['deposit_method'];
  if ($transfer == 'bank-transfer') {
    header("Location: Deposit2.php?ref=" . $ref);
    exit();
  } else {
    header("Location: Deposit3.php?ref=" . $ref);
    exit();
  }
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
                        <a href="php/logout.php"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
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
              <div class="page-dw wide-xs m-auto" id="wds-ajcon">
                <div class="nk-pps-apps">
                  <div class="nk-pps-steps">
                    <span class="step"></span>
                    <span class="step active"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>
                  <div class="nk-pps-title text-center">
                    <h3 class="title">Withdraw Funds</h3>
                    <p class="caption-text">via <strong>Wallet</strong></p>
                    <p class="sub-text-sm">Withdraw your fund via crypto wallet</p>
                  </div>
                  <form class="nk-pps-form" action="Withdraw3.php?ref=<?php echo $ref?>" method="POST" id="wdm-continue-from">
                    <?php echo $msg ?>
                    <div class="nk-pps-field form-group">
                      <div class="form-label-group">
                        <label class="form-label">Withdraw To</label>
                        <a href="profile_account.php?ref=<?php echo $ref ?>" class="link wd-new-account">
                          New Wallet
                        </a>
                      </div>
                      <input type="hidden" value="VzM3OU1RLzJCdWF0NStROERDcmpnUT09" name="wd_account" id="wdm-account">
                      <input type="hidden" value="1" name="wd_amount_by" id="wdm-amount-by">
                      <div class="dropdown nk-pps-dropdown">
                      <?php
        $sql = mysqli_query($conn, "SELECT * FROM user_wallet WHERE ref_id = '$ref'");
        if (mysqli_num_rows($sql) > 0) {
          ($row = mysqli_fetch_assoc($sql));


        ?>
                        <a href="javascript:void(0)" class="dropdown-indicator" data-toggle="dropdown" id="wdm-account-name" aria-expanded="false">
                          <div class="nk-cm-item">
                            <div class="nk-cm-text">
                              <span class="label fw-bold">Crypto Wallet</span>
                              <span class="desc"><?php echo $row['btc'] ?></span>
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh" style="">
                          <ul class="nk-dlist">

                            <li class="nk-dlist-item ">
                            <a href="javascript:void(0)" class="nk-dlist-opt wdm-change" data-change="wdm-account"  data-currency="BTC">
                                <div class="nk-cm-item">
                                  <div class="nk-cm-text">
                                    <span class="label fw-bold">Crypto Wallet</span>
                                    <span class="desc"><?php echo $row['btc'] ?> </span>
                                    <input type="text" value="<?php echo $row['btc'] ?>" name="btc_wallet" hidden> 
                                  </div>
                                </div>
                              </a>
                            </li>
                           
              
                           

                           
                            <li class="nk-dlist-item">
                              <a href="javascript:void(0)" class="nk-dlist-opt wdm-change" data-change="wdm-account"  data-currency="USDT">
                                <div class="nk-cm-item">
                                  <div class="nk-cm-text">
                                    <span class="label fw-bold">Crypto Wallet</span>
                                    <span class="desc"><?php echo $row['usdt'] ?> </span>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    <?php 

$sql = mysqli_query($conn, "SELECT * FROM user WHERE ref_id = '$ref'");
if (mysqli_num_rows($sql) > 0) {
  ($row = mysqli_fetch_assoc($sql));


?>
                    <div class="nk-pps-field-set">
                      <div class="nk-pps-field-row row gy-gs">
                        <div class="nk-pps-field-col col-12 col-sm-6 wdm-account-fmsa">
                          <div class="nk-pps-field form-group">
                            <div class="form-label-group">
                              <label class="form-label" for="wdm-amount-from">Withdraw Amount</label>
                            </div>
                            <div class="form-control-group">
                              <div class="form-text-hint">
                                <span class="overline-title">USD</span>
                              </div>
                              <input type="text" class="form-control form-control-lg form-control-number wd-amount" id="wdm-amount-from" name="withdraw_amount" placeholder="0.00">
                              <input type="hidden" name="wd_currency" id="wdm-base-currency" value="USD">
                            </div>
                            <div class="form-note-group">
                              <input type="text" value="<?php echo $row['balance'] ?>" name="balance" hidden>
                              <span class="nk-pps-bal form-note-alt">Current Balance: <strong class="text-base amount"><?php echo $row['balance']?>.00 USD</strong></span>
                            </div>
                          </div>
                        </div>
                        <?php } ?>

                        <div class="nk-pps-field-col col-12 col-sm-6 wdm-account-tora">
                          <div class="nk-pps-field form-group">
                            <div class="form-label-group">
                              <label class="form-label" for="wdm-amount-to">Amount in <strong class="wdmcur">BTC</strong></label>
                            </div>
                            <div class="form-control-group">
                              <div class="form-text-hint">
                                <span class="overline-title" id="wdm-account-currency-code">BTC</span>
                              </div>

                              <input type="text" class="form-control form-control-lg form-control-number wd-amount" id="wdm-amount-to" name="withdraw_amount_btc" placeholder="0.00">
                              <input type="hidden" id="wdm-account-currency" name="wd_currency_to" value="BTC">
                              <input type="hidden"  name="ref_id" value="<?php echo $ref ?>">
                            </div>
                            <div class="form-note-group" id="wdm-account-rate">
                              <span class="nk-pps-rate form-note-alt">
                                1 USD = <span class="fxrate">0.00006047 BTC</span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nk-pps-field form-group">
                      <div class="form-label-group">
                        <label class="form-label" for="withdraw-desc">Description <small class="text-soft fw-normal">(Optional)</small></label>
                      </div>
                      <div class="form-control-group">
                        <input type="text" class="form-control form-control-lg" id="withdraw-desc" name="withdraw_des" placeholder="">
                      </div>
                    </div>
                    <div class="nk-pps-field form-action text-center">
                      <div class="nk-pps-action">
                        
                          <button name="sub"  class="btn btn-lg btn-block btn-primary pps-btn-action">Continue to Withdraw</button>
                          <!-- <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true"></span> -->
                        </a>
                      </div>
                      <div class="nk-pps-action pt-3">
                        <a href="https://app.investorm.xyz/withdraw" class="btn btn-outline-secondary btn-trans pps-btn-action" data-action="prev">Back to previous</a>
                      </div>
                    </div>
                  </form>
                  <script type="text/javascript">
                    var fxCur = {
                        base: "USD",
                        alter: "ETH",
                        rates: {
                          "BTC": 6.04700000000000021022940333015327496468671597540378570556640625e-5,
                          "LTC": 0.01474999999999999922284388276239042170345783233642578125,
                          "BNB": 0.00408799999999999962019270327573394752107560634613037109375,
                          "USDC": 1,
                          "USDT": 1,
                          "TRX": 18.300000000000000710542735760100185871124267578125,
                          "USD": 1
                        },
                        data: {
                          "BTC": {
                            "rate": 6.04700000000000021022940333015327496468671597540378570556640625e-5,
                            "min": 0.001000000000000000020816681711721685132943093776702880859375,
                            "max": 0.6047000000000000152766688188421539962291717529296875,
                            "code": "BTC",
                            "dp": 8,
                            "dx": 8
                          },
                          "LTC": {
                            "rate": 0.01474999999999999922284388276239042170345783233642578125,
                            "min": 0.1000000000000000055511151231257827021181583404541015625,
                            "max": 0.5,
                            "code": "LTC",
                            "dp": 8,
                            "dx": 8
                          },
                          "BNB": {
                            "rate": 0.00408799999999999962019270327573394752107560634613037109375,
                            "min": 3.06599999999999983657517077517695724964141845703125,
                            "max": 40.88000000000000255795384873636066913604736328125,
                            "code": "BNB",
                            "dp": 8,
                            "dx": 8
                          },
                          "USDC": {
                            "rate": 1,
                            "min": 10,
                            "max": 100,
                            "code": "USDC",
                            "dp": 8,
                            "dx": 8
                          },
                          "USDT": {
                            "rate": 1,
                            "min": 10,
                            "max": 100,
                            "code": "USDT",
                            "dp": 8,
                            "dx": 8
                          },
                          "TRX": {
                            "rate": 18.300000000000000710542735760100185871124267578125,
                            "min": 0.1000000000000000055511151231257827021181583404541015625,
                            "max": 1000,
                            "code": "TRX",
                            "dp": 8,
                            "dx": 8
                          },
                          "USD": {
                            "rate": "1",
                            "min": 50,
                            "max": 10000,
                            "code": "USD",
                            "dp": 3,
                            "dx": 3
                          }
                        }
                      },
                      account = 150,
                      reqMsg = {
                        required: "You must enter your withdraw amount.",
                        balance: "The amount exceeds your current balance.",
                        invalid: "Sorry, but we&#039;re facing some technical issue."
                      };
                  </script>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="modal fade" role="dialog" id="withdraw-account-modal">
        </div>
        <script type="text/javascript">
          const updateSetting = "https://app.investorm.xyz/update/setting",
            upreference = "https://app.investorm.xyz/profile/preference",
            getTnxDetails = "https://app.investorm.xyz/transactions/details",
            msgwng = "Sorry, something went wrong!",
            msgunp = "Unable to process your request.";
        </script>
        <script src="https://app.investorm.xyz/assets/js/bundle.js?ver=133"></script>
        <script src="https://app.investorm.xyz/assets/js/app.js?ver=133"></script>
        <script src="https://app.investorm.xyz/assets/js/charts.js?ver=133"></script>
</body>

</html>