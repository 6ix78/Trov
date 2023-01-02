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
    <title>Investment | Evercore </title>
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
                        <span class="sub-text">0.00 USD</span>
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
                    <li class="nk-menu-item">
                      <a href="transactions.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><em class="icon bx bx-transfer-alt"></em
                        ></span>
                        <span class="nk-menu-text">Transaction</span>
                      </a>
                    </li>
                    <li class="nk-menu-item active">
                      <a href="investment.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-dollar-circle"></i
                        ></span>
                        <span class="nk-menu-text">Investment</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
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
                            <div class="user-avatar">
                              <span
                                ><div class="user-avatar bg-info">
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
                <div class="nk-block-head">
                  <div class="nk-block-head-sub"><span>Investment</span></div>
                  <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                      <h2 class="nk-block-title fw-normal">Invested Plans</h2>
                      <div class="nk-block-des">
                        <p>At a glance summary of your investment.</p>
                      </div>
                    </div>
                    <div class="nk-block-head-content">
                      <ul class="nk-block-tools gx-3">
                        <li class="order-md-last">
                          <a
                            href="ourplans.php<?php echo $ref ?>"
                            class="btn btn-warning"
                            ><span>Invest &amp; Earn</span>
                            <em class="icon bx bx-right-arrow-alt"></em
                          ></a>
                        </li>
                        <li>

                          <a
                            href="deposit.php?ref=<?php echo $ref ?>"
                            class="btn btn-danger"
                            ><span>Deposit Funds</span>
                            <em class="icon bx bx-right-arrow-alt"></em
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="nk-block">
                  <div class="row gy-gs">
                    <div class="col-md-6 col-lg-5 col-xxl-4">
                      <div
                        class="card card-full card-bordered card-wg on-left is-primary"
                      >
                        <div class="card-inner ">
                          <div class="nk-wgacc" style="border-left:red;">
                            <div class="nk-wgacc-title text-base">
                              Investment Account
                              <em
                                class="icon bx bx-info-circle fs-13px text-soft nk-tooltip"
                                title="The available balance in your investment account."
                              ></em>
                            </div>
                            <div class="nk-wgacc-group flex-lg-nowrap gx-4">
                              <div class="nk-wgacc-sub">
                                <div class="nk-wgacc-amount">
                                  <div class="number number-md">
                                    0.00 <small class="currency">USD</small>
                                  </div>
                                </div>
                                <div class="nk-wgacc-subtitle">
                                  Available Funds
                                </div>
                              </div>
                              <div class="nk-wgacc-sub">
                                <span class="nk-wgacc-sign text-soft"
                                  ><em class="icon bx bx-plus"></em
                                ></span>
                                <div class="nk-wgacc-amount">
                                  <div class="number number-sm">0.00</div>
                                </div>
                                <div class="nk-wgacc-subtitle">Locked</div>
                              </div>
                            </div>
                          </div>
                          <div class="card-action">
                            <ul class="nk-block-tools gx-1">
                              <li>
                                <a
                                  href="payout.html"
                                  class="btn btn-secondary iv-payout"
                                  ><span>Transfer Funds</span>
                                  <em class="icon bx bx-right-arrow-alt"></em
                                ></a>
                              </li>

                              <li>
                                <a
                                  href="settings.html"
                                  class="btn btn-trans iv-settings"
                                  ><em class="icon bx bx-cog"></em
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xxl-8">
                      <div class="card card-bordered">
                        <div class="card-inner-group">
                          <div class="card-inner">
                            <div class="row gy-gs">
                              <div class="col-md-12">
                                <div class="nk-wgacc">
                                  <div
                                    class="nk-wgacc-group flex-md-nowrap gx-4"
                                  >
                                    <div class="flex-shrink-0">
                                      <div class="nk-wgacc-title text-base">
                                        Amount in Invested
                                        <em
                                          class="icon bx bx-info-circle fs-13px text-soft nk-tooltip"
                                          title="The investment currently actived without pending."
                                        ></em>
                                      </div>
                                      <div
                                        class="nk-wgacc-group flex-md-nowrap gx-4"
                                      >
                                        <div class="nk-wgacc-sub">
                                          <div class="nk-wgacc-amount">
                                            <div class="number number-md">
                                              0.00
                                              <small class="currency"
                                                >USD</small
                                              >
                                            </div>
                                          </div>
                                          <div class="nk-wgacc-subtitle">
                                            Currently Invested
                                          </div>
                                        </div>
                                        <div class="nk-wgacc-sub">
                                          <span class="nk-wgacc-sign text-soft"
                                            ><em class="icon bx bx-plus"></em
                                          ></span>
                                          <div class="nk-wgacc-amount">
                                            <div class="number number-sm">
                                              0.00
                                            </div>
                                          </div>
                                          <div class="nk-wgacc-subtitle">
                                            Approx Profit
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="nk-wgacc-sub flex-grow-1 ml-lg-1 ml-xxl-5 d-md-none d-lg-block"
                                    >
                                      <div class="nk-wgacc-ck lg mb-0">
                                        <canvas
                                          class="chart-liner"
                                          id="dailyInvestment"
                                        ></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-inner">
                            <ul class="nk-wgacc-nav">
                              <li>
                                <a
                                  href="transactions.php?ref=<?php echo $ref ?>"
                                  ><em class="icon bx bx-notepad"></em>
                                  <span>Transactions</span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="transactions_scheduled.php?ref=<?php echo $ref ?>"
                                  ><em class="icon bx bxs-note"></em>
                                  <span>History</span></a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="nk-block nk-block-lg">
                  <div class="nk-block-head-sm">
                    <div class="nk-block-head-content">
                      <h5 class="nk-block-title">
                        Active Plan <span class="count text-base">(2)</span>
                      </h5>
                    </div>
                  </div>

                  <div class="nk-plan-list">
                    <div class="nk-plan-item">
                      <div class="nk-plan-icon is-running">
                        <em class="icon ic bx bx-timer"></em>
                      </div>
                      <div class="nk-plan-info w-max-275px">
                        <div class="nk-plan-name">
                          Venus - Weekly 5.75% for 3 Months
                        </div>
                        <div class="nk-plan-desc">
                          Invested: <span class="amount">250.00 USD</span>
                        </div>
                      </div>
                      <div class="nk-plan-term">
                        <div class="nk-plan-start nk-plan-order">
                          <span class="nk-plan-label text-soft"
                            >Start Date</span
                          >
                          <span class="nk-plan-value date"
                            >Dec 13, 2022 05:35 PM</span
                          >
                        </div>
                        <div class="nk-plan-end nk-plan-order">
                          <span class="nk-plan-label text-soft">End Date</span>
                          <span class="nk-plan-value date"
                            >Mar 13, 2023 05:36 PM</span
                          >
                        </div>
                      </div>
                      <div class="nk-plan-amount">
                        <div class="nk-plan-amount-a nk-plan-order">
                          <span class="nk-plan-label text-soft"
                            >Total Return</span
                          >
                          <span class="nk-plan-value amount">422.5 USD</span>
                        </div>
                        <div class="nk-plan-amount-b nk-plan-order">
                          <span class="nk-plan-label text-soft">
                            Net Profit
                          </span>
                          <span class="nk-plan-value amount">172.5 USD</span>
                        </div>
                      </div>
                      <div class="nk-plan-more">
                        <a
                          class="btn btn-icon btn-lg btn-round btn-trans"
                          href="https://app.investorm.xyz/investment/plan/Z2FUbURBb3U2M3BUa2xOMFdxZ1FQQT09"
                          ><em class="icon bx bx-chevron-right"></em
                        ></a>
                      </div>
                      <div class="nk-plan-progress">
                        <div class="progress-bar" data-progress="0"></div>
                      </div>
                    </div>
                    <div class="nk-plan-item">
                      <div class="nk-plan-icon is-running">
                        <em class="icon bx bx-timer"></em>
                      </div>
                      <div class="nk-plan-info w-max-275px">
                        <div class="nk-plan-name">
                          Mercury - Hourly 0.45% for 1 Day
                        </div>
                        <div class="nk-plan-desc">
                          Invested: <span class="amount">100.00 USD</span>
                        </div>
                      </div>
                      <div class="nk-plan-term">
                        <div class="nk-plan-start nk-plan-order">
                          <span class="nk-plan-label text-soft"
                            >Start Date</span
                          >
                          <span class="nk-plan-value date"
                            >Dec 05, 2022 06:44 PM</span
                          >
                        </div>
                        <div class="nk-plan-end nk-plan-order">
                          <span class="nk-plan-label text-soft">End Date</span>
                          <span class="nk-plan-value date"
                            >Dec 06, 2022 06:45 PM</span
                          >
                        </div>
                      </div>
                      <div class="nk-plan-amount">
                        <div class="nk-plan-amount-a nk-plan-order">
                          <span class="nk-plan-label text-soft"
                            >Total Return</span
                          >
                          <span class="nk-plan-value amount">110.8 USD</span>
                        </div>
                        <div class="nk-plan-amount-b nk-plan-order">
                          <span class="nk-plan-label text-soft">
                            Net Profit
                          </span>
                          <span class="nk-plan-value amount">10.8 USD</span>
                        </div>
                      </div>
                      <div class="nk-plan-more">
                        <a
                          class="btn btn-icon btn-lg btn-round btn-trans"
                          href="investment.html"
                          ><em class="icon bx bx-chevron-right"></em
                        ></a>
                      </div>
                      <div class="nk-plan-progress">
                        <div class="progress-bar" data-progress="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nk-footer">
            <div class="container-fluid">
              <div class="nk-footer-wrap">
                <div class="nk-footer-copyright">
                Dx Coding Web; 2022. All Rights Reserved.
                </div>
                
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" role="dialog" id="ajax-modal"></div>
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

    <script>
      var investment = JSON.parse(
        '{"21 Nov":"1600.00","22 Nov":"100.00","23 Nov":"100.00","24 Nov":"100.00","25 Nov":"100.00","26 Nov":"300.00","27 Nov":"250.00","28 Nov":"200.00","29 Nov":"250.00","30 Nov":"250.00","01 Dec":"100.00","02 Dec":"100.00","03 Dec":"100.00","04 Dec":"100.00","05 Dec":"500.00","06 Dec":"500.00","07 Dec":"250.00","08 Dec":"250.00","09 Dec":"250.00","10 Dec":"500.00","11 Dec":"500.00","12 Dec":"350.00","13 Dec":"250.00","14 Dec":"100.00","15 Dec":"100.00","16 Dec":"100.00","17 Dec":"100.00","18 Dec":"100.00","19 Dec":"100.00","20 Dec":"500.00","21 Dec":"250.00"}'
      );

      var profit = JSON.parse(
        '{"21 Nov":"235.8","22 Nov":"10.8","23 Nov":"10.8","24 Nov":"10.8","25 Nov":"10.8","26 Nov":"32.4","27 Nov":"90.00","28 Nov":"21.6","29 Nov":"90.00","30 Nov":"90.00","01 Dec":"10.8","02 Dec":"10.8","03 Dec":"10.8","04 Dec":"10.8","05 Dec":"60.7","06 Dec":"206.25","07 Dec":"172.5","08 Dec":"172.5","09 Dec":"172.5","10 Dec":"75.00","11 Dec":"75.00","12 Dec":"183.3","13 Dec":"172.5","14 Dec":"10.8","15 Dec":"10.8","16 Dec":"10.8","17 Dec":"10.8","18 Dec":"10.8","19 Dec":"10.8","20 Dec":"570.00","21 Dec":"90.00"}'
      );

      var dailyInvestment = {
        tooltip: false,
        legend: true,
        labels: Object.keys(investment),
        dataUnit: "USD",
        stacked: true,
        lineTension: 0.3,
        datasets: [
          {
            label: "Investment",
            color: "#816bff",
            background: "transparent",
            borderWidth: 2,
            data: Object.values(investment),
          },
          {
            label: "Profit",
            color: "#c4cefe",
            background: "transparent",
            borderWidth: 2,
            data: Object.values(profit),
          },
        ],
      };

      let $btnSettings = $(".iv-settings"),
        $modalTnx = $("#ajax-modal");
      $btnSettings.on("click", function (e) {
        e.preventDefault();
        let $self = $(this),
          url = $self.attr("href"),
          data = [];
        NioApp.Form.toModal(url, data, { modal: $modalTnx });
      });
    </script>
  </body>
</html>
