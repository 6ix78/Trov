<?php 
session_start();
if(!isset($_SESSION['ref_id'])){
  header("location: login.php");
}

// if(isset($_GET['user_id'])){
// $user_id = $_GET['user_id'];
// }

include 'php/config.php';

if (isset($_GET['ref'])) {
  $ref = $_GET['ref'];
}



$plan_name = $_POST['plan_name'];
$plan_rate = $_POST['plan_rate'];
$plan_days = $_POST['plan_days'];
$plan_price = $_POST['plan_price'];
$plan_profit = $_POST['plan_profit'];



if(isset($_POST['sub2'])){

    $plan_name = $_POST['plan_name'];
    $plan_rate = $_POST['plan_rate'];
    $plan_days = $_POST['plan_days'];
    $plan_price = $_POST['plan_price'];
    $plan_profit = $_POST['plan_profit'];
    $ref_id = $_POST['ref_id'];
    $total = $_POST['total'];
    $stats = "Active";

    $sql = mysqli_query($conn, "INSERT INTO investments (plan_name, plan_rate, plan_days,plan_price,plan_profit,ref_id,total,stats) VALUE ('$plan_name', '$plan_rate', '$plan_days', '$plan_price', '$plan_profit', '$ref_id','$total', '$stats')" );

    if($sql){
        header("Location: invest.php?ref=".$ref);
        exit();
        set_time_limit(5);
    }


}
?>
<!DOCTYPE html>
<html lang="en" class="js" id="fabb7b9b">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="csrf-token"
      content="xJIhMTe3RnF6O1Hb61j52amdOXU1chniH836c26F"
    />
    <meta
      name="site-token"
      content="a275cdfd359e43212d43217d5bO1Hb1231f2d447H83643210"
    />
    <title>Our Plans | Evercore </title>
    <link rel="shortcut icon" href="asset/img/favicon.png" />
    <link rel="stylesheet" href="asset/test2.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="asset/main.css" />

    <!-- System Build v202210271331S7d5 @iO -->
  </head>
  <body class="nk-body npc-cryptlite has-sidebar has-sidebar-fat" data-theme="">
    <div class="nk-app-root">
      <div class="nk-main">
        <div
          class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed is-light x-white"
          data-content="sidebarMenu"
        >
          <div class="nk-sidebar-element nk-sidebar-head">
            <div class="nk-sidebar-brand">
              <a class="logo-link nk-sidebar-logo" href="dashboard.php?ref=<?php echo $row['ref_id']?>"
                ><img
                  class="logo-img  logo-img-md"
                  src="asset/img/logo.png"
                  
              /></a>
            </div>

            <div class="nk-menu-trigger mr-n2">
              <a
                href="#"
                class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                data-target="sidebarMenu"
                ><em class="icon bx bx-left-arrow-alt"></em
              ></a>
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
                          0.00 <span class="currency">USD</span></span
                        >
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
                        <a href="deposit.php?ref=<?php echo $row['ref_id']?>" class="btn btn-danger"
                          ><span>Deposit</span></a
                        >
                      </li>
                      <li>
                        <a href="withdraw.php?ref=<?php echo $row['ref_id']?>" class="btn btn-warning"
                          ><span>Withdraw</span></a
                        >
                      </li>
                    </ul>
                  </div>
                </div>

                <div
                  class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0"
                >
                  <a
                    class="nk-profile-toggle toggle-expand"
                    data-target="sidebarProfile"
                    href="#"
                  >
                    <div class="user-card-wrap">
                      <div class="user-card">
                        <div class="user-avatar">
                          <span
                            ><div class="user-avatar bg-info">
                              <span><?php echo substr($name, 0,2   ); ?></span>
                            </div></span
                          >
                        </div>
                        <div class="user-info">
                          <span class="lead-text"><?php echo $row['name'] ?></span>
                          <span class="sub-text"
                            ><?php echo $row['email'] ?></span
                          >
                        </div>
                        <!-- Start Side Bar Mobile  -->
                        <div class="user-action">
                          <em class="icon bx bx-chevron-down"></em>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div
                    class="nk-profile-content toggle-expand-content"
                    data-content="sidebarProfile"
                  >
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
                              0.00 <span class="currency">USD</span></span
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="user-account-label">
                          <span class="sub-text">Deposit in orders</span>
                        </div>
                        <div class="user-account-value">
                          <span class="sub-text text-base"
                            >17.02 <span class="currency">USD</span></span
                          >
                        </div>
                      </li>
                    </ul>
                    <ul class="user-account-links">
                      <li>
                        <a href="withdraw.php?ref=<?php echo $row['ref_id']?>" class="link"
                          ><span>Withdraw Funds</span>
                          <em class="icon bx bx-wallet "></em
                        ></a>
                      </li>
                      <li>
                        <a href="deposit.php?ref=<?php echo $row['ref_id']?>" class="link"
                          ><span>Deposit Funds</span>
                          <em class="icon bx bx-wallet"></em
                        ></a>
                      </li>
                    </ul>
                    <ul class="link-list">
                      <li>
                        <a href="profile.php?ref=<?php echo $row['ref_id']?>"
                          ><em class="icon bx bx-user"></em
                          ><span>View Profile</span></a
                        >
                      </li>
                      <li>
                        <a href="settings.php?ref=<?php echo $row['ref_id']?>"
                          ><em class="icon bx bx-cog"></em
                          ><span>Account Setting</span></a
                        >
                      </li>
                     
                    </ul>
                    <!-- Mobile Nav End  -->
                    <ul class="link-list">
                      <li>
                        <a
                          href="php/logout.php"
                          ><em class="icon ni ni-signout"></em
                          ><span>Sign out</span></a
                        >
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
                      <a href="dashboard.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><em class="icon bx bx-grid-alt"></em
                        ></span>
                        <span class="nk-menu-text">Dashboard</span>
                      </a>
                    </li>
                    <li class="nk-menu-item ">
                      <a href="transactions.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><em class="icon bx bx-transfer-alt"></em
                        ></span>
                        <span class="nk-menu-text">Transaction</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="investment.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-dollar-circle"></i
                        ></span>
                        <span class="nk-menu-text">Investment</span>
                      </a>
                    </li>
                    <li class="nk-menu-item active">
                      <a href="ourplans.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-dollar-circle"></i
                        ></span>
                        <span class="nk-menu-text">Our Plans</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="profile.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bxs-user"></i
                        ></span>
                        <span class="nk-menu-text">My Profile</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="referral.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-share-alt"></i
                        ></span>
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
                  <a
                    href="#"
                    class="nk-nav-toggle nk-quick-nav-icon"
                    data-target="sidebarMenu"
                    ><em class="icon bx bx-menu"></em
                  ></a>
                </div>

                <div
                  class="nk-header-marque d-none d-md-block pr-md-3 pr-lg-4 pl-md-4 pl-xl-0 flex-grow-0 overflow-hidden"
                >
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
                      <a
                        href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown"
                      >
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
                      <div
                        class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1"
                      >
                        <div
                          class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block"
                        >
                       <?php $name = $row['name'] ?>
                          <div class="user-card">
                            <div class="user-avatar" style="background-color: red;">
                              <span
                                ><div class="user-avatar bg-info" style="background-color: red;">
                                  <span><?php echo substr($name, 0,2   ); ?>
</span>
                                </div></span
                              >
                            </div>
                            <div class="user-info">
                              <span class="lead-text"
                                ><?php echo $row['name'] ?></span
                              >
                              <span class="sub-text"
                                ><?php echo $row['email'] ?></span
                              >
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-inner user-account-info">
                          <h6 class="overline-title-alt">Account Balance</h6>
                          <div class="user-balance">
                           <?php echo $row['balance']?> <small class="currency">USD</small>
                          </div>
                          <div class="user-balance-alt">
                            0<span class="currency">ETH</span>
                          </div>
                          <ul class="user-account-links">
                            <li>
                              <a href="deposit.php?ref=<?php echo $row['ref_id']?>" class="link"
                                ><span>Deposit Funds</span>
                                <em class="icon bx bx-wallet"></em
                              ></a>
                            </li>
                            <li>
                              <a href="withdraw.php?ref=<?php echo $row['ref_id']?>" class="link"
                                ><span>Withdraw Funds</span>
                                <em class="icon bx bx-wallet"></em
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="dropdown-inner">
                          <ul class="link-list">
                            <li>
                              <a href="profile.php?ref=<?php echo $row['ref_id']?>"
                                ><em class="icon bx bx-user"></em
                                ><span>View Profile</span></a
                              >
                            </li>
                            <li>
                              <a href="settings.php?ref=<?php echo $row['ref_id']?>"
                                ><em class="icon bx bx-cog"></em
                                ><span>Security Setting</span></a
                              >
                            </li>
                            <!-- <li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li> -->
                          </ul>
                        </div>
                        <div class="dropdown-inner">
                          <ul class="link-list">
                            <li>
                              <a href="php/logout.php">
                                <em class="icon bx bx-log-out"></em
                                ><span>Sign out</span></a
                              >
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
    <div class="page-invest wide-xs m-auto" id="iv-ajmco"><div class="nk-pps-apps">
    <div class="nk-pps-steps">
        <span class="step"></span>
        <span class="step active"></span>
    </div>
    <div class="nk-pps-title text-center">
        <h3 class="title">Confirm Your Investment</h3>
        <p class="caption-text">Please review your investment plan details and confirm.</p>
    </div>

    <div class="nk-pps-data card card-bordered">
        <ul class="nk-glist text-center">
            <li class="nk-glist-item">
                <div class="sub-text">Plan Name</div>
                <div class="lead-text fw-bold">Standard Plan</div>
            </li>
            <li class="nk-glist-item">
                <div class="sub-text">Duration</div>
                <div class="lead-text fw-bold">7 days</div>
            </li>
            <li class="nk-glist-item">
                <div class="sub-text">Daily Profit</div>
                <div class="lead-text fw-bold">2.5%</div>
            </li>
        </ul>
    </div>
    <div class="nk-pps-data">
        <ul class="nk-olist">
            <li class="nk-olist-item">
                <div class="label lead-text">Payment Account</div>
                <div class="data"><span class="method"><em class="icon ni ni-wallet-fill"></em> <span>Main Balance</span></span></div>
            </li>
            <li class="nk-olist-item is-grouped">
                <div class="label lead-text">Amount to Invest</div>
                <div class="data"><span class="amount">10.00 USD</span></div>
            </li>
            <li class="nk-olist-item">
                <div class="label">Total Profit Earn</div>
                <div class="data text-soft"><span class="amount">1.75 USD</span></div>
            </li>
            <li class="nk-olist-item">
                <div class="label lead-text">Total Return (inc. cap)</div>
                <div class="data"><span class="amount">11.75 USD</span></div>
            </li>
        </ul>

        <ul class="nk-olist">
            <li class="nk-olist-item nk-olist-item-final">
                <div class="label lead-text">Amount to Debit</div>
                <div class="data"><span class="amount">10.00 USD</span></div>
            </li>
        </ul>
        <div class="sub-text-sm">
            * The amount will be deducted immediately from your account balance once you confirm.
        </div>
    </div>
    <div class="nk-pps-field form-action text-center">
        <div class="nk-pps-action">
        <form action="" method="post">
           <input type="text" name="plan_total" value="<?php echo  $total_return?>" hidden> 
           <input type="text" name="plan_price" value="<?php echo  $plan_price?>" hidden> 
           <input type="text" name="plan_days" value="<?php echo  $plan_days?> " hidden> 
           <input type="text" name="plan_name" value="<?php echo  $plan_name?> " hidden> 
           <input type="text" name="plan_profit" value="<?php echo  $plan_profit?> " hidden> 
           <input type="text" name="plan_rate" value="<?php echo  $plan_rate?> " hidden> 
           <input type="text" name="total" value="<?php echo  $total_return?> " hidden> 
           <input type="text" name="ref_id" value="<?php echo $ref?>" hidden>
            
                <button class="btn btn-lg btn-block btn-primary iv-plnin" >Confirm &amp; Procced</button>
                <!-- <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true"></span> -->
        </form>
        </div>
        <div class="nk-pps-action pt-3 mb-n4">
            <a href="dashboard.php?ref=<?php echo $ref ?>" class="btn btn-outline-danger btn-trans">Cancel</a>
        </div>
    </div>
</div>
</div>
</div>

                </div>
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
