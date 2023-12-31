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
    <title>Profile | Evercore </title>
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
                    <li class="nk-menu-item">
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
                    <li class="nk-menu-item">
                      <a href="ourplans.php?ref=<?php echo $row['ref_id']?>" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><i class="icon bx bx-dollar-circle"></i
                        ></span>
                        <span class="nk-menu-text">Our Plans</span>
                      </a>
                    </li>
                    <li class="nk-menu-item active">
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
   

          <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-lg">
              <div class="nk-content-body">
                <div class="nk-block-head">
                  <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Profile Info</h2>
                    <div class="nk-block-des">
                      <p>
                        You have full control to manage your own account
                        setting.
                      </p>
                    </div>
                  </div>
                </div>
                <ul class="nk-nav nav nav-tabs">
                  <li class="nav-item active">
                    <a class="nav-link" href="profile.php?ref=<?php echo $row['ref_id']?>"
                      >Profile</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="profile_account.php?ref=<?php echo $row['ref_id']?>"
                      >Accounts</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="profile_setting.php?ref=<?php echo $row['ref_id']?>"
                      >Security</a
                    >
                  </li>
                  <!-- <li class="nav-item">
                    <a
                      class="nav-link"
                      href="profile_activity.php?ref=<?php echo $row['ref_id']?>"
                      >Activity</a
                    >
                  </li> -->
                </ul>
                <div class="nk-block">
                  <div class="nk-block-head">
                    <div class="nk-block-head-content">
                      <h5 class="nk-block-title">Personal Information</h5>
                      <div class="nk-block-des">
                        <p>
                          Basic info, like your name and address, that you use
                          on our platform.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card card-bordered">
                    <div class="nk-data data-list">
                      <div
                        class="data-item"
                        data-toggle="modal"
                        data-target="#profile-edit"
                      >
                        <div class="data-col">
                          <span class="data-label">Full Name</span>
                          <span class="data-value"><?php echo $row['name'] ?></span>
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more"
                            ><em class=" bx bx-chevron-right"></em
                          ></span>
                        </div>
                      </div>
                      <div
                        class="data-item"
                        data-toggle="modal"
                        data-target="#profile-edit"
                      >
                        <div class="data-col">
                          <span class="data-label">Display Name</span>
                          <span class="data-value"><?php echo $row['name'] ?> </span>
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more"
                            ><em class="bx bx-chevron-right"></em
                          ></span>
                        </div>
                      </div>
                      <div class="data-item">
                        <div class="data-col">
                          <span class="data-label">Email</span>
                          <span class="data-value"
                            ><?php echo $row['email'];?></span
                          >
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more disable"
                            ><em class="icon bx bx-lock-alt"></em
                          ></span>
                        </div>
                      </div>
                      <div
                        class="data-item"
                        data-toggle="modal"
                        data-target="#profile-edit"
                      >
         
                        <div class="data-col">
                          <span class="data-label">Phone Number</span>
                          <span class="data-value"><?php echo $row ['phone']?> </span>
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more"
                            ><em class="bx bx-chevron-right"></em
                          ></span>
                        </div>
                      </div>
                      
                      <div
                        class="data-item"
                        data-toggle="modal"
                        data-target="#profile-edit"
                      >
                        <div class="data-col">
                          <span class="data-label">Gender</span>
                          <span class="data-value text-soft font-italic">
                           <?php echo $row ['gender'] ?>
                          </span>
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more"
                            ><em class="bx bx-chevron-right"></em
                          ></span>
                        </div>
                      </div>
                      <div
                        class="data-item"
                        data-toggle="modal"
                        data-target="#profile-edit"
                      >
                        <div class="data-col">
                          <span class="data-label">Date of Birth</span>
                          <span class="data-value"> <?php echo $row['dob'] ?></span>
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more"
                            ><em class="bx bx-chevron-right"></em
                          ></span>
                        </div>
                      </div>
                      <div
                        class="data-item"
                        data-toggle="modal"
                        data-target="#profile-edit"
                        data-tab-target="#address"
                      >
                      <?php } ?>
                      <?php 
                      $sql = mysqli_query($conn, "SELECT * FROM user_address WHERE ref_id = {$_SESSION['ref_id']}");
if (mysqli_num_rows($sql) > 0) {
   ($row = mysqli_fetch_assoc($sql));


?>
     
                        <div class="data-col">
                          <span class="data-label"
                            >Country
                            <em
                              class="icon bx bx-info-circle"
                              data-toggle="tooltip"
                              data-placement="right"
                              title="Your residential country"
                            ></em
                          ></span>
                          <span class="data-value"> <?php echo $row['country'] ?> </span>
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more"
                            ><em class="bx bx-chevron-right"></em
                          ></span>
                        </div>
                      </div>
                      <div
                        class="data-item"
                        data-toggle="modal"
                        data-target="#profile-edit"
                        data-tab-target="#address"
                      >
                        <div class="data-col">
                          <span class="data-label">Address</span>
                          <span class="data-value">
                            <span class="text-soft font-italic"
                              ><?php echo $row['address_line'] ?></span
                            >
                          </span>
                        </div>
                        <div class="data-col data-col-end">
                          <span class="data-more"
                            ><em class="bx bx-chevron-right"></em
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php } ?>
          <div class="nk-footer">
            <div class="container-fluid">
              <div class="nk-footer-wrap">
                <div class="nk-footer-copyright">
                 Dx Coding Web 2022. All Rights Reserved.
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

    <?php
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE ref_id = {$_SESSION['ref_id']}");
if (mysqli_num_rows($sql) > 0) {
   ($row = mysqli_fetch_assoc($sql));


?>
    <div class="modal fade" role="dialog" id="profile-edit">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <a href="javascript:void(0)" class="close" data-dismiss="modal"
            ><em class="icon bx bx-x"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h4 class="title">Update Profile</h4>
            <ul class="nk-nav nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#personal"
                  >Personal</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#address"
                  >Address</a
                >
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="personal">
                <form
                  action="php/profile.php"
                  method="POST"
                  class="form-validate is-alter form-profile"
        
                >
                  <input
                    type="hidden"
                    name="_token"
                    
                  />
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-label-group">
                          <label class="form-label" for="full-name"
                            >Full Name <span class="text-danger">*</span></label
                          >
                        </div>

                        <div class="form-control-wrap">
                          <input
                            type="text"
                            name="name"
                            value="<?php echo $row['name'] ?>"
                            class="form-control form-control-lg"
                       
                            placeholder="Enter Full name"
                            required
                            maxlength="190"
                          />
                        </div>
                      </div>
                    </div>
                    

                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-label-group">
                          <label class="form-label" for="phone-no"
                            >Phone Number
                            <span class="text-danger">*</span></label
                          >
                        </div>

                        <input type="text"  value="<?php echo $row['ref_id']?>" name="ref_id" hidden>
                        <div class="form-control-wrap">
                          <input
                            type="text"
                            name="phone"
                            value="<?php echo $row['phone'] ?>"
                            class="form-control form-control-lg"
                       
                            placeholder="Phone Number"
                          />
                        </div>
                      </div>
                    </div>

                    
                   <?php } ?>
                    

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label" for="gender">Gender</label>
                        <select
                          name="gender"
                          class="form-select"
                  
                          data-placeholder="Please select"
                       
                        >
                          <option value=""></option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Others</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label" for="birth-day"
                          >Date of Birth
                          <span class="text-danger">*</span></label
                        >
                        <input
                          type="text"
                          name="dob"
                          value="07/29/2022"
                          data-date-start-date="-85y"
                          data-date-end-date="-12y"
                          class="form-control form-control-lg date-picker-alt"
       
                          required
                          placeholder="Enter your date of birth"
                        />
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <ul
                        class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2 pt-2"
                      >
                        <li>
                          <button
                           
                            class="btn btn-lg btn-primary ua-updp"
                          name="user"
                          >
                            Update Profile
                          </button>
                        </li>
                        <li>
                          <a
                            href="#"
                            data-dismiss="modal"
                            class="link link-light"
                            >Cancel</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Country  -->
              <div class="tab-pane" id="address">
                <form
                  action="php/profile.php"
                  method="POST"
                  class="form-validate is-alter form-profile"
                 
                >
              
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-label-group">
                          <label class="form-label" for="address-l1"
                            >Address Line 1
                            <span class="text-danger">*</span></label
                          >
                        </div>
                        <div class="form-control-wrap">
                          <input
                            type="text"
                            name="address_line"
                            class="form-control form-control-lg"
                            id="address-l1"
                            value=""
                            required
                            maxlength="190"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-label-group">
                          <label class="form-label" for="address-l2"
                            >Address Line 2</label
                          >
                        </div>
                        <div class="form-control-wrap">
                          <input
                            type="text"
                            name="second_address_line"
                            class="form-control form-control-lg"
                            id="address-l2"
                            value=""
                            maxlength="190"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                      <div class="form-group">
                        <div class="form-label-group">
                          <label class="form-label" for="address-city"
                            >City</label
                          >
                        </div>
                        <div class="form-control-wrap">
                          <input
                            type="text"
                            name="city"
                            class="form-control form-control-lg"
                            id="address-city"
                            value=""
                            maxlength="190"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <div class="form-label-group">
                          <label class="form-label" for="address-st"
                            >State / Province
                            <span class="text-danger">*</span></label
                          >
                        </div>
                        <div class="form-control-wrap">
                          <input
                            type="text"
                            name="user_state"
                            class="form-control form-control-lg"
                            id="address-st"
                            value=""
                            required
                            maxlength="190"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <div class="form-label-group">
                          <label class="form-label" for="address-zip"
                            >Zip / Postal Code</label
                          >
                        </div>
                        <div class="form-control-wrap">
                          <input
                            type="text"
                            name="profile_zip"
                            class="form-control form-control-lg"
                            id="address-zip"
                            value=""
                            maxlength="50"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label" for="address-county"
                          >Country <span class="small">(Residential)</span>
                          <span class="text-danger">*</span></label
                        >
                        <select
                          name="country"
                          class="form-select"
                          id="address-county"
                          data-ui="lg"
                          data-placeholder="Please select"
                          data-search="on"
                        >
                          <option></option>
                          <option value="Aruba">Aruba</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Åland Islands">Åland Islands</option>
                          <option value="Albania">Albania</option>
                          <option value="Andorra">Andorra</option>
                          <option value="United Arab Emirates">
                            United Arab Emirates
                          </option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="French Southern Territories">
                            French Southern Territories
                          </option>
                          <option value="Antigua and Barbuda">
                            Antigua and Barbuda
                          </option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Benin">Benin</option>
                          <option value="Bonaire, Sint Eustatius and Saba">
                            Bonaire, Sint Eustatius and Saba
                          </option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bosnia and Herzegovina">
                            Bosnia and Herzegovina
                          </option>
                          <option value="Saint Barthélemy">
                            Saint Barthélemy
                          </option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belize">Belize</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bolivia, Plurinational State of">
                            Bolivia, Plurinational State of
                          </option>
                          <option value="Brazil">Brazil</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Brunei Darussalam">
                            Brunei Darussalam
                          </option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Central African Republic">
                            Central African Republic
                          </option>
                          <option value="Canada">Canada</option>
                          <option value="Cocos (Keeling) Islands">
                            Cocos (Keeling) Islands
                          </option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Côte d&#039;Ivoire">
                            Côte d&#039;Ivoire
                          </option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Congo, the Democratic Republic of the">
                            Congo, the Democratic Republic of the
                          </option>
                          <option value="Congo">Congo</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Curaçao">Curaçao</option>
                          <option value="Christmas Island">
                            Christmas Island
                          </option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Germany">Germany</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Dominican Republic">
                            Dominican Republic
                          </option>
                          <option value="Algeria">Algeria</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Spain">Spain</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Finland">Finland</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Falkland Islands (Malvinas)">
                            Falkland Islands (Malvinas)
                          </option>
                          <option value="France">France</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Micronesia, Federated States of">
                            Micronesia, Federated States of
                          </option>
                          <option value="Gabon">Gabon</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Guinea-Bissau">Guinea-Bissau</option>
                          <option value="Equatorial Guinea">
                            Equatorial Guinea
                          </option>
                          <option value="Greece">Greece</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="Guam">Guam</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Heard Island and McDonald Islands">
                            Heard Island and McDonald Islands
                          </option>
                          <option value="Honduras">Honduras</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="India">India</option>
                          <option value="British Indian Ocean Territory">
                            British Indian Ocean Territory
                          </option>
                          <option value="Ireland">Ireland</option>
                          <option value="Iran, Islamic Republic of">
                            Iran, Islamic Republic of
                          </option>
                          <option value="Iraq">Iraq</option>
                          <option value="Iceland">Iceland</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Japan">Japan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Saint Kitts and Nevis">
                            Saint Kitts and Nevis
                          </option>
                          <option value="Korea, Republic of">
                            Korea, Republic of
                          </option>
                          <option value="Kosovo">Kosovo</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Lao People&#039;s Democratic Republic">
                            Lao People&#039;s Democratic Republic
                          </option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Macao">Macao</option>
                          <option value="Saint Martin (French part)">
                            Saint Martin (French part)
                          </option>
                          <option value="Morocco">Morocco</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Moldova, Republic of">
                            Moldova, Republic of
                          </option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Marshall Islands">
                            Marshall Islands
                          </option>
                          <option
                            value="Macedonia, the former Yugoslav Republic of"
                          >
                            Macedonia, the former Yugoslav Republic of
                          </option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Northern Mariana Islands">
                            Northern Mariana Islands
                          </option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Namibia">Namibia</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="Niger">Niger</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Nigeria" selected>Nigeria</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niue">Niue</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="Norway">Norway</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Nauru">Nauru</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Panama">Panama</option>
                          <option value="Pitcairn">Pitcairn</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Palau">Palau</option>
                          <option value="Papua New Guinea">
                            Papua New Guinea
                          </option>
                          <option value="Poland">Poland</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option
                            value="Korea, Democratic People&#039;s Republic of"
                          >
                            Korea, Democratic People&#039;s Republic of
                          </option>
                          <option value="Portugal">Portugal</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Palestinian Territory, Occupied">
                            Palestinian Territory, Occupied
                          </option>
                          <option value="French Polynesia">
                            French Polynesia
                          </option>
                          <option value="Qatar">Qatar</option>
                          <option value="Réunion">Réunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russian Federation">
                            Russian Federation
                          </option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Singapore">Singapore</option>
                          <option
                            value="South Georgia and the South Sandwich Islands"
                          >
                            South Georgia and the South Sandwich Islands
                          </option>
                          <option
                            value="Saint Helena, Ascension and Tristan da Cunha"
                          >
                            Saint Helena, Ascension and Tristan da Cunha
                          </option>
                          <option value="Svalbard and Jan Mayen">
                            Svalbard and Jan Mayen
                          </option>
                          <option value="Solomon Islands">
                            Solomon Islands
                          </option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Somalia">Somalia</option>
                          <option value="Saint Pierre and Miquelon">
                            Saint Pierre and Miquelon
                          </option>
                          <option value="Serbia">Serbia</option>
                          <option value="South Sudan">South Sudan</option>
                          <option value="Sao Tome and Principe">
                            Sao Tome and Principe
                          </option>
                          <option value="Suriname">Suriname</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sint Maarten (Dutch part)">
                            Sint Maarten (Dutch part)
                          </option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Syrian Arab Republic">
                            Syrian Arab Republic
                          </option>
                          <option value="Turks and Caicos Islands">
                            Turks and Caicos Islands
                          </option>
                          <option value="Chad">Chad</option>
                          <option value="Togo">Togo</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Timor-Leste">Timor-Leste</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago">
                            Trinidad and Tobago
                          </option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Taiwan, Province of China">
                            Taiwan, Province of China
                          </option>
                          <option value="Tanzania, United Republic of">
                            Tanzania, United Republic of
                          </option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United States Minor Outlying Islands">
                            United States Minor Outlying Islands
                          </option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="United States">United States</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Holy See (Vatican City State)">
                            Holy See (Vatican City State)
                          </option>
                          <option value="Saint Vincent and the Grenadines">
                            Saint Vincent and the Grenadines
                          </option>
                          <option value="Venezuela, Bolivarian Republic of">
                            Venezuela, Bolivarian Republic of
                          </option>
                          <option value="Virgin Islands, British">
                            Virgin Islands, British
                          </option>
                          <option value="Virgin Islands, U.S.">
                            Virgin Islands, U.S.
                          </option>
                          <option value="Viet Nam">Viet Nam</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Wallis and Futuna">
                            Wallis and Futuna
                          </option>
                          <option value="Samoa">Samoa</option>
                          <option value="Yemen">Yemen</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label" for="address-county"
                          >Nationality
                          <span class="small">(Citizenship)</span></label
                        >
                        <select
                          name="profile_nationality"
                          class="form-select"
                          id="nationality"
                          data-ui="lg"
                          data-search="on"
                        >
                          <option value="same">Same as Country</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Åland Islands">Åland Islands</option>
                          <option value="Albania">Albania</option>
                          <option value="Andorra">Andorra</option>
                          <option value="United Arab Emirates">
                            United Arab Emirates
                          </option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="French Southern Territories">
                            French Southern Territories
                          </option>
                          <option value="Antigua and Barbuda">
                            Antigua and Barbuda
                          </option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Benin">Benin</option>
                          <option value="Bonaire, Sint Eustatius and Saba">
                            Bonaire, Sint Eustatius and Saba
                          </option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bosnia and Herzegovina">
                            Bosnia and Herzegovina
                          </option>
                          <option value="Saint Barthélemy">
                            Saint Barthélemy
                          </option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belize">Belize</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bolivia, Plurinational State of">
                            Bolivia, Plurinational State of
                          </option>
                          <option value="Brazil">Brazil</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Brunei Darussalam">
                            Brunei Darussalam
                          </option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Central African Republic">
                            Central African Republic
                          </option>
                          <option value="Canada">Canada</option>
                          <option value="Cocos (Keeling) Islands">
                            Cocos (Keeling) Islands
                          </option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Côte d&#039;Ivoire">
                            Côte d&#039;Ivoire
                          </option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Congo, the Democratic Republic of the">
                            Congo, the Democratic Republic of the
                          </option>
                          <option value="Congo">Congo</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Curaçao">Curaçao</option>
                          <option value="Christmas Island">
                            Christmas Island
                          </option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Germany">Germany</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Dominican Republic">
                            Dominican Republic
                          </option>
                          <option value="Algeria">Algeria</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Spain">Spain</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Finland">Finland</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Falkland Islands (Malvinas)">
                            Falkland Islands (Malvinas)
                          </option>
                          <option value="France">France</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Micronesia, Federated States of">
                            Micronesia, Federated States of
                          </option>
                          <option value="Gabon">Gabon</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Guinea-Bissau">Guinea-Bissau</option>
                          <option value="Equatorial Guinea">
                            Equatorial Guinea
                          </option>
                          <option value="Greece">Greece</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="Guam">Guam</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Heard Island and McDonald Islands">
                            Heard Island and McDonald Islands
                          </option>
                          <option value="Honduras">Honduras</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="India">India</option>
                          <option value="British Indian Ocean Territory">
                            British Indian Ocean Territory
                          </option>
                          <option value="Ireland">Ireland</option>
                          <option value="Iran, Islamic Republic of">
                            Iran, Islamic Republic of
                          </option>
                          <option value="Iraq">Iraq</option>
                          <option value="Iceland">Iceland</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Japan">Japan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Saint Kitts and Nevis">
                            Saint Kitts and Nevis
                          </option>
                          <option value="Korea, Republic of">
                            Korea, Republic of
                          </option>
                          <option value="Kosovo">Kosovo</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Lao People&#039;s Democratic Republic">
                            Lao People&#039;s Democratic Republic
                          </option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Macao">Macao</option>
                          <option value="Saint Martin (French part)">
                            Saint Martin (French part)
                          </option>
                          <option value="Morocco">Morocco</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Moldova, Republic of">
                            Moldova, Republic of
                          </option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Marshall Islands">
                            Marshall Islands
                          </option>
                          <option
                            value="Macedonia, the former Yugoslav Republic of"
                          >
                            Macedonia, the former Yugoslav Republic of
                          </option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Northern Mariana Islands">
                            Northern Mariana Islands
                          </option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Namibia">Namibia</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="Niger">Niger</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niue">Niue</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="Norway">Norway</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Nauru">Nauru</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Panama">Panama</option>
                          <option value="Pitcairn">Pitcairn</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Palau">Palau</option>
                          <option value="Papua New Guinea">
                            Papua New Guinea
                          </option>
                          <option value="Poland">Poland</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option
                            value="Korea, Democratic People&#039;s Republic of"
                          >
                            Korea, Democratic People&#039;s Republic of
                          </option>
                          <option value="Portugal">Portugal</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Palestinian Territory, Occupied">
                            Palestinian Territory, Occupied
                          </option>
                          <option value="French Polynesia">
                            French Polynesia
                          </option>
                          <option value="Qatar">Qatar</option>
                          <option value="Réunion">Réunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russian Federation">
                            Russian Federation
                          </option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Singapore">Singapore</option>
                          <option
                            value="South Georgia and the South Sandwich Islands"
                          >
                            South Georgia and the South Sandwich Islands
                          </option>
                          <option
                            value="Saint Helena, Ascension and Tristan da Cunha"
                          >
                            Saint Helena, Ascension and Tristan da Cunha
                          </option>
                          <option value="Svalbard and Jan Mayen">
                            Svalbard and Jan Mayen
                          </option>
                          <option value="Solomon Islands">
                            Solomon Islands
                          </option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Somalia">Somalia</option>
                          <option value="Saint Pierre and Miquelon">
                            Saint Pierre and Miquelon
                          </option>
                          <option value="Serbia">Serbia</option>
                          <option value="South Sudan">South Sudan</option>
                          <option value="Sao Tome and Principe">
                            Sao Tome and Principe
                          </option>
                          <option value="Suriname">Suriname</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sint Maarten (Dutch part)">
                            Sint Maarten (Dutch part)
                          </option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Syrian Arab Republic">
                            Syrian Arab Republic
                          </option>
                          <option value="Turks and Caicos Islands">
                            Turks and Caicos Islands
                          </option>
                          <option value="Chad">Chad</option>
                          <option value="Togo">Togo</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Timor-Leste">Timor-Leste</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago">
                            Trinidad and Tobago
                          </option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Taiwan, Province of China">
                            Taiwan, Province of China
                          </option>
                          <option value="Tanzania, United Republic of">
                            Tanzania, United Republic of
                          </option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United States Minor Outlying Islands">
                            United States Minor Outlying Islands
                          </option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="United States">United States</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Holy See (Vatican City State)">
                            Holy See (Vatican City State)
                          </option>
                          <option value="Saint Vincent and the Grenadines">
                            Saint Vincent and the Grenadines
                          </option>
                          <option value="Venezuela, Bolivarian Republic of">
                            Venezuela, Bolivarian Republic of
                          </option>
                          <option value="Virgin Islands, British">
                            Virgin Islands, British
                          </option>
                          <option value="Virgin Islands, U.S.">
                            Virgin Islands, U.S.
                          </option>
                          <option value="Viet Nam">Viet Nam</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Wallis and Futuna">
                            Wallis and Futuna
                          </option>
                          <option value="Samoa">Samoa</option>
                          <option value="Yemen">Yemen</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                  </div>
<input type="text" value="<?php echo $ref ?>" name="ref_id" hidden>
                  <div class="row gy-4">
                    <div class="col-12">
                      <ul
                        class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2 pt-2"
                      >
                        <li>
                          <button
                          
                            class="btn btn-lg btn-primary ua-updp"
                          
                            name="submit_add"
                          >
                            Update Address
                          </button>
                        </li>
                        <li>
                          <a
                            href="#"
                            data-dismiss="modal"
                            class="link link-light"
                            >Cancel</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      tabindex="-1"
      role="dialog"
      id="change-unverified-email"
    >
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-dismiss="modal"
            ><em class="icon bx bx-alarm-exclamation"></em
          ></a>modal
          <div class="modal-body modal-body-md">
            <h5 class="title">Enter Your Valid Email Address</h5>
            <form
              action="https://app.investorm.xyz/profile/change-unverified-email"
              method="POST"
              class="form-validate is-alter mt-4 form-profile"
              autocomplete="off"
            >
              <input
                type="hidden"
                name="_token"
                value="rnBULN66Sm3sVVncrX5mSehMA1yKBBxT4njjrZWg"
              />
              <div class="form-group">
                <label class="form-label" for="email-address"
                  >Current Email Address</label
                >
                <div class="form-control-wrap">
                  <input
                    type="email"
                    class="form-control form-control-lg"
                    id="email-address"
                    readonly
                    value="danielowenderefaka@gmail.com"
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="new-unverified-email-address"
                  >New Email Address <span class="text-danger">*</span></label
                >
                <div class="form-control-wrap">
                  <input
                    type="email"
                    id="new-unverified-email-address"
                    autocomplete="new-email"
                    name="user_new_unverified_email"
                    class="form-control form-control-lg"
                    placeholder="Enter Email Address"
                    required
                    maxlength="190"
                  />
                </div>
              </div>
              <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                <li>
                  <button
                    type="submit"
                    class="btn btn-md btn-primary ua-updp"
                    data-action="email"
                  >
                    Send Verification Email
                  </button>
                </li>
              </ul>
              <div class="notes mt-gs">
                <ul>
                  <li class="alert-note is-plain text-danger">
                    <em class="icon bx bx-alarm-exclamation"></em>
                    <p>
                      Wether you verify your email or not, from next login you
                      have to use your new email address.
                    </p>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <div
      class="modal fade"
      tabindex="-1"
      role="dialog"
      id="send-verification-link"
    >
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-dismiss="modal"
            ><em class="icon bx bx-x"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title">Resend Email Verification Link</h5>
            <form
              action="https://app.investorm.xyz/profile/verify-unverified-email/11588"
              method="POST"
              class="form-validate is-alter mt-4"
            >
              <input
                type="hidden"
                name="_token"
                value="rnBULN66Sm3sVVncrX5mSehMA1yKBBxT4njjrZWg"
              />
              <div class="form-group">
                <p class="text-dark fs-16px">
                  <strong
                    >Are you sure to proceed with email verification link for
                    your exisiting email?</strong
                  >
                </p>
              </div>
              <div class="form-group">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                  <li>
                    <button type="submit" class="btn btn-md btn-primary">
                      Send Verification Email
                    </button>
                  </li>
                </ul>
              </div>
              <div class="notes mt-gs">
                <ul>
                  <li class="alert-note is-plain text-danger">
                    <em class="icon bx bx-alarm-exclamation"></em>
                    <p>
                      After verification, from next login you have to use your
                      new verified email address.
                    </p>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   
    <script src="https://app.investorm.xyz/assets/js/bundle.js?ver=133"></script>
    <!-- <script src="https://app.investorm.xyz/assets/js/app.js?ver=133"></script>
    <script src="https://app.investorm.xyz/assets/js/charts.js?ver=133"></script> -->
    <!-- <script type="text/javascript">
      const profileSetting = "https://app.investorm.xyz/profile/settings";
    </script> -->
  </body>
</html>
