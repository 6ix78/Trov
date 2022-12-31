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




if (isset($_POST['update_password'])) {

  $current_password = $_POST['current_password'];
  // $password = $_POST['password'];
  $new_password = $_POST['new_password'];
  $new_password_confirmation = $_POST['new_password_confirmation'];
  $ref_id = $_POST['ref_id'];

  $sql7 = mysqli_query($conn, "SELECT * FROM user WHERE password = '{$current_password}'");
  
  if (mysqli_num_rows($sql7) > 0) { // if user credentials match 

      $row = mysqli_fetch_assoc($sql7);

      if($sql7){

          if($new_password == $new_password_confirmation){

              $sql8 = mysqli_query($conn, "UPDATE user SET password = '$new_password' WHERE ref_id = '$ref_id' ");

              if($sql8){
                echo "<script> alert('Password Changed successfully</script>";
              }

          }else{
              echo "<script> alert('Confrimation doesnt match') </script>";

            
          }
      }

      
  }else{
    echo "<script> alert('Incorrect Curret Password') </script>";
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
                          ><em class="icon bx bx-log-out"></em
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
          <?php } ?>

          <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-lg">
              <div class="nk-content-body">
                <div class="nk-block-head">
                  <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Security Settings</h2>
                    <div class="nk-block-des">
                      <p>
                        You have full control to manage your own account
                        setting.
                      </p>
                    </div>
                  </div>
                </div>
                <ul class="nk-nav nav nav-tabs">
                  <li class="nav-item ">
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
                  <li class="nav-item active">
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
                      <h5 class="nk-block-title">Settings</h5>
                      <div class="nk-block-des">
                        <p>
                          These settings are helps you keep your account secure.
                        </p>
                      </div>
                    </div>
                  </div>
              
                  <div class="card card-bordered">
                    <div class="card-inner-group">
                      
                      
                      <div class="card-inner">
                        <div
                          class="between-center flex-wrap flex-md-nowrap g-3"
                        >
                          <div class="nk-block-text">
                            <h6>Change Email Address</h6>
                            <p>
                              Update your current email address to new email
                              address.
                            </p>
                          </div>
                          <div class="nk-block-actions">
                            <button
                              type="button"
                              data-toggle="modal"
                              data-target="#change-email"
                              class="btn btn-sm btn-primary"
                              id="email-modal-tgl"
                            >
                              Change Email
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner">
                        <div
                          class="between-center flex-wrap flex-md-nowrap g-3"
                        >
                          <div class="nk-block-text">
                            <h6>Change Password</h6>
                            <p>
                              Set a unique password to protect your account.
                            </p>
                          </div>
                          <div class="nk-block-actions flex-shrink-sm-0">
                            <ul
                              class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2"
                            >
                              <li class="order-md-last">
                                <a
                                  href="javascript:void(0)"
                                  id="settings-change-password"
                                  data-toggle="modal"
                                  data-target="#change-password"
                                  class="btn btn-sm btn-primary"
                                  >Change Password</a
                                >
                              </li>
                              <li>
                                <em class="text-soft text-date fs-12px"
                                  >Last changed: <span>N/A</span></em
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="card-inner">
                        <div
                          class="between-center flex-wrap flex-md-nowrap g-3"
                        >
                          <div class="nk-block-text">
                            <h6>
                              2FA Authentication
                              <span class="badge badge-danger">Disabled</span>
                            </h6>
                            <p>
                              Secure your account with 2FA security. When it is
                              activated you will need to enter not only your
                              password, but also a special code using your
                              mobile.
                            </p>
                          </div>
                          <div class="nk-block-actions">
                            <a
                              href="javascript:void(0)"
                              id="settings-enable-2fa"
                              data-toggle="modal"
                              data-target="#enable-2fa"
                              class="btn btn-sm btn-primary"
                              >Enable</a
                            >
                          </div>
                        </div>
                      </div> -->
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

    <div class="modal fade" tabindex="-1" role="dialog" id="change-email">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-dismiss="modal"
            ><em class="icon bx bx-cross"></em
          ></a>
         
          <div class="modal-body modal-body-md">
            <h5 class="title">Change Email</h5>
            <form
              action="php/profile.php"
              method="POST"
              class="form-validate is-alter mt-4 form-authentic"
              id="change-email-form"
              autocomplete="off"
            >
              <div class="form-group">
                <label class="form-label" for="email-address"
                  >Current Email Address</label
                >
                <?php
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE ref_id = '$ref'");
if (mysqli_num_rows($sql) > 0) {
   ($row = mysqli_fetch_assoc($sql));


?>
                <div class="form-control-wrap">
                  <input
                    type="email"
                    class="form-control form-control-lg"
                  name="old_email"
                    readonly
                    value="<?php echo $row['email']?>"
                  />
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label class="form-label" for="new-email-address"
                  >New Email Address <span class="text-danger">*</span></label
                >
                <div class="form-control-wrap">
                  <input
                    type="email"
                    autocomplete="new-email"
                    name="new_email"
                    value=""
                    class="form-control form-control-lg"
                   
                    placeholder="Enter Email Address"
                    required
                    maxlength="190"
                  />
                </div>
                <div class="form-note">
                  New email address only updated once you verified.
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="password"
                  >Current Password <span class="text-danger">*</span></label
                >
                <div class="form-control-wrap">
                  <input
                    type="password"
                    autocomplete="new-password"
                    name="password"
                    class="form-control form-control-lg"
                    
                    placeholder="Enter current password"
                    required
                    maxlength="190"
                  />
                </div>
              </div>
              <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                <li>
                  <input type="text" value="<?php echo $ref ?>" name="ref_id" hidden>
                  <button
                   name="update_email"
                  data-target="#confirm-email"
                  data-toggle="modal"
                    class="btn btn-md btn-primary"
                  >
                    Change Email
                  </button>
                </li>
                <li>
                  <a href="#" data-dismiss="modal" class="link link-light"
                    >Cancel</a
                  >
                </li>
              </ul>
              <div class="notes mt-gs">
                <ul>
                  <li class="alert-note is-plain text-danger">
                    <em class="icon bx bx-bug-alt"></em>
                    <p>
                      We will send you a link to your new email address to
                      confirm the change.
                    </p>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="confirm-email">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-dismiss="modal"
            ><em class="icon bx bx-x"></em
          ></a>
          <div class="modal-body modal-body-lg">
            <h5 class="title mb-3">Verify Your Email</h5>
            <p id="email-confirm-msg"></p>
            <p class="mt-4 font-italic">
              If you have not received a verification email, you can resend the
              verification mail or cancel the request.
            </p>
            <ul class="align-center flex-wrap flex-sm-nowrap g-2">
              <li>
                <button
                  class="btn btn-primary email-rq-verify"
                  data-action="resend"
                  data-url=""
                >
                  Resend Email
                </button>
              </li>
              <li>
                <button
                  class="btn btn-dim btn-danger email-rq-verify"
                  data-action="cancel"
                  data-url=""
                >
                  Cancel Request
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="change-password">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-dismiss="modal"
            ><em class="icon bx bx-x"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title">Change Password</h5>
            <form
              action=""
              method="POST"
              class="form-validate is-alter mt-4 form-authentic"
              id="change-password-form"
            >
              <div class="form-group">
                <label class="form-label" for="current-password"
                  >Current Password <span class="text-danger">*</span></label
                >
                <div class="form-control-wrap">
                  <input
                    type="password"
                    name="current_password"
                    class="form-control form-control-lg"
                  
                    placeholder="Enter Current Password"
                    required
                    maxlength="190"
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="new-password"
                  >New Password <span class="text-danger">*</span></label
                >
                <div class="form-control-wrap">
                  <input
                    type="password"
                    name="new_password"
                    class="form-control form-control-lg"
                    id="new-password"
                    placeholder="Enter new password"
                    required
                    maxlength="190"
                  />
                </div>
                <input type="text" value="<?php echo $ref ?>" name="ref_id" hidden>
              </div>
              <div class="form-group">
                <label class="form-label" for="new-password"
                  >Retype New Password <span class="text-danger">*</span></label
                >
                <div class="form-control-wrap">
                  <input
                    type="password"
                    name="new_password_confirmation"
                    class="form-control form-control-lg"
                    id="new-password-confirmation"
                    placeholder="Retype new password"
                    required
                    maxlength="190"
                  />
                </div>
              </div>
              <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                <li>
                  <button
                   
                   name="update_password"
                    class="btn btn-primary"
                  >
                    Update Password
                  </button>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    data-dismiss="modal"
                    class="link link-light"
                    >Cancel</a
                  >
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      tabindex="-1"
      role="dialog"
      id="change-password-success"
    >
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal">
              <em
                class="nk-modal-icon icon icon-circle icon-circle-xxl bx bx-check bg-success"
              ></em>
              <h4 class="nk-modal-title title">
                Password changed successfully!
              </h4>
              <div class="nk-modal-text">
                <p class="caption-text">
                  Your password for your account has been successfully changed.
                  You will need to sign in with your new password next time.
                </p>
                <p class="sub-text-sm">
                  Reset your password, if you forgot or lost.
                </p>
              </div>
              <div class="nk-modal-action-lg">
                <ul class="btn-group gx-4">
                  <li>
                    <a
                      href="#"
                      data-dismiss="modal"
                      class="btn btn-mw btn-primary"
                      >Return</a
                    >
                  </li>
                </ul>
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
            ><em class="icon bx bx-cross"></em
          ></a>
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
                value="foHAeltdZw2Yki3kouZBEBk5uDtmIRThp6ojNB6L"
              />
              <div class="form-group">
                <label class="form-label" for="current-email-address"
                  >Current Email Address</label
                >
                <div class="form-control-wrap">
                  <input
                    type="email"
                    class="form-control form-control-lg"
                    id="current-email-address"
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
                    <em class="icon bx bx-bug-alt"></em>
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
            ><em class="icon bx bx-cross"></em
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
                value="foHAeltdZw2Yki3kouZBEBk5uDtmIRThp6ojNB6L"
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
                    <em class="icon bx bx-bug-alt"></em>
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

    <div class="modal fade" id="enable-2fa" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-dismiss="modal"
            ><em class="icon bx bx-x"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="modal-title">Enable 2FA Authentication</h5>
            <form
              action="https://app.investorm.xyz/profile/settings/2fa/enable"
              method="POST"
              class="form-validate is-alter mt-3"
              autocomplete="off"
            >
              <p>
                Step 1: Install the Google Authenticator app from
                <a
                  target="_blank"
                  href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2"
                  >Google Play</a
                >
                or
                <a
                  target="_blank"
                  href="https://apps.apple.com/us/app/google-authenticator/id388497605"
                  >App Store</a
                >.
              </p>
              <p>
                Step 2: Scan below QR code by your Google Authenticator app, or
                you can add account manually into the app.
              </p>

              <div class="divider stretched sm"></div>

              <div class="row align-center">
                <div class="col-sm-8">
                  <p class="mb-1">
                    <strong class="text-dark">Manually add account:</strong>
                  </p>
                  <p class="mb-1">
                    Account Name:<br /><strong class="text-dark"
                      >Investorm</strong
                    >
                  </p>
                  <p class="mb-1">
                    Your Key:<br /><strong class="text-dark"
                      >FSNQSV76TCJIBWLT</strong
                    >
                  </p>
                </div>
                
              <div class="divider stretched sm"></div>

              <label class="form-label" for="google2fa-code"
                >Enter Authenticator Code</label
              >
              <div class="row g-2 align-center">
                <div class="col-sm-8">
                  <div class="form-group">
                    <div class="form-control-wrap">
                      <input
                        id="google2fa-code"
                        type="text"
                        class="form-control"
                        name="google2fa_code"
                        placeholder="Enter the code to verify"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <input
                      type="hidden"
                      name="_token"
                      value="foHAeltdZw2Yki3kouZBEBk5uDtmIRThp6ojNB6L"
                    />
                    <input
                      type="hidden"
                      name="google2fa_secret"
                      value="FSNQSV76TCJIBWLT"
                    />
                    <button
                      type="submit"
                      class="btn btn-primary btn-block ajax-submit"
                    >
                      Confirm &amp; Enable
                    </button>
                  </div>
                </div>
              </div>

              <div class="divider stretched md"></div>
              <p class="text-danger">
                <strong>Attention:</strong> You will lose access of your
                account, if you lost your phone or uninstall the Google
                Authenticator app.
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      tabindex="-1"
      role="dialog"
      id="social-account-modal"
    >
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-dismiss="modal"
            ><em class="icon bx bx-x"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title"></h5>
            <p class="text"></p>
            <form
              action=""
              method="POST"
              class="form-validate is-alter mt-4 form-authentic"
              id="social-form"
            >
              <div class="form-group">
                <label class="form-label" for="confirm-password"
                  >Current Password <span class="text-danger">*</span></label
                >
                <div class="form-control-wrap">
                  <input
                    type="password"
                    name="password"
                    class="form-control form-control-lg"
                    id="confirm-password"
                    placeholder="Enter your password"
                    required
                    maxlength="190"
                  />
                </div>
              </div>
              <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                <li>
                  <input
                    type="hidden"
                    name="_token"
                    value="foHAeltdZw2Yki3kouZBEBk5uDtmIRThp6ojNB6L"
                  />
                  <button class="btn btn-primary ajax-submit">
                    Confirm &amp; Authenticate
                  </button>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    data-dismiss="modal"
                    class="link link-light"
                    >Cancel</a
                  >
                </li>
              </ul>
            </form>
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
    <script type="text/javascript">
      const profileSetting = "https://app.investorm.xyz/profile/settings";

      const socialRoutes = {
        facebook: {
          revoke:
            "https://app.investorm.xyz/profile/settings/social/facebook/revoke",
          link: "https://app.investorm.xyz/profile/settings/social/facebook/link",
        },
        google: {
          revoke:
            "https://app.investorm.xyz/profile/settings/social/google/revoke",
          link: "https://app.investorm.xyz/profile/settings/social/google/link",
        },
      };

      const msg = {
        link: "To link your social account, you must enter your current password to verify. You can login using your social account once it authenticated.",
        revoke:
          "To revoke your social account, you must enter your current password to verify. You can not login using your social account anymore once you revoke.",
      };

      const title = {
        link: "Link Social Account",
        revoke: "Revoke Social Account",
      };

      $(".social-btn").on("click", function () {
        let platform = $(this).data("platform");
        let action = $(this).data("action");
        $("#social-form").prev().prev().text(title[action]);
        $("#social-form").prev().text(msg[action]);
        $("#social-form").attr("action", socialRoutes[platform][action]);
      });
    </script>
  </body>
</html>
