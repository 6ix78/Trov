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
    <title>Transaction | Evercore </title>
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
                    <li class="nk-menu-item active">
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
                    <li class="nk-menu-item ">
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
                  <div class="nk-block-head-sub"><span>History</span></div>
                  <div class="nk-block-between-sm g-4">
                    <div class="nk-block-head-content">
                      <h2 class="nk-block-title fw-normal">Transactions</h2>
                      <div class="nk-block-des">
                        <p>List of transactions in your account.</p>
                      </div>
                    </div>
                    <div class="nk-block-head-content d-none d-md-inline-flex">
                      <ul class="nk-block-tools gx-3">
                        <li>
                          <a
                            href="transactions_deposit.php"
                            class="btn btn-primary"
                            ><span>Deposit</span>
                            <i class="icon bx bx-right-arrow-alt"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <ul class="nk-nav nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="transactions.php?ref=<?php echo $ref?>">History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="transactions_deposit.php?ref=<?php echo $ref?>"
                      >Deposit</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="transactions_withdraw.php?ref=<?php echo $ref?>"
                      >Withdraw</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="transactions_scheduled.php?ref=<?php echo $ref?>">
                    <?php
 $sql = mysqli_query($conn, "SELECT stats FROM deposit WHERE ref_id = '$ref'");

 $sql3 = mysqli_num_rows($sql);
 
  
  
  ?>
                      Scheduled <span class="badge badge-primary"><?php echo $sql3 ?></span>
                    </a>
                  </li>
                </ul>
                <div class="nk-block nk-block-xs">
                  <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                      <div class="nk-block-head-content">
                        <h6 class="nk-block-title">All Transaction</h6>
                      </div>
                      <ul class="nk-block-tools gx-2">
                        <li>
                          <a
                            href="#"
                            class="search-toggle toggle-search btn btn-icon btn-trigger"
                            data-target="search"
                            ><i class="icon bx bx-search-alt-2"></i
                          ></a>
                        </li>
                        <li>
                          <div class="dropdown">
                            <a
                              href="#"
                              class="btn btn-trigger btn-icon dropdown-toggle"
                              data-toggle="dropdown"
                            >
                              <div class="dot dot-primary"></div>
                              <em class="icon bx bx-filter"></em>
                            </a>

                            <div
                              class="filter-wg dropdown-menu dropdown-menu-lg dropdown-menu-right"
                            >
                              <div class="dropdown-head">
                                <span class="sub-title dropdown-title"
                                  >Filter Transaction</span
                                >
                              </div>
                              <form
                                action="https://app.investorm.xyz/transactions"
                                method="GET"
                              >
                                <input
                                  type="hidden"
                                  name="filter"
                                  value="true"
                                />
                                <div class="dropdown-body dropdown-body-rg">
                                  <div class="row gx-6 gy-3">
                                    <div class="col-6">
                                      <div class="form-group">
                                        <label
                                          class="overline-title overline-title-alt"
                                          >Type</label
                                        >
                                        <select
                                          name="type"
                                          class="form-select form-select-sm"
                                        >
                                          <option value="any">Any Type</option>
                                          <option value="bonus">Bonus</option>
                                          <option value="charge">Charge</option>
                                          <option value="deposit">
                                            Deposit
                                          </option>
                                          <option value="withdraw">
                                            Withdraw
                                          </option>
                                          <option value="investment">
                                            Investment
                                          </option>
                                          <option value="referral">
                                            Referral
                                          </option>
                                          <option value="transfer">
                                            Transfer
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <label
                                          class="overline-title overline-title-alt"
                                          >Status</label
                                        >
                                        <select
                                          name="status"
                                          class="form-select form-select-sm"
                                        >
                                          <option value="any">
                                            Any Status
                                          </option>
                                          <option value="cancelled">
                                            Cancelled
                                          </option>
                                          <option value="failed">Failed</option>
                                          <option value="completed">
                                            Completed
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group">
                                        <label
                                          class="overline-title overline-title-alt"
                                          >From</label
                                        >
                                        <input
                                          class="form-control date-picker"
                                          name="date[from]"
                                          type="text"
                                          value=""
                                        />
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                        <label
                                          class="overline-title overline-title-alt"
                                          >To</label
                                        >
                                        <input
                                          class="form-control date-picker"
                                          name="date[to]"
                                          type="text"
                                          value=""
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="dropdown-foot between">
                                  <button
                                    type="submit"
                                    class="btn btn-secondary"
                                  >
                                    Filter
                                  </button>
                                  <a
                                    href=""
                                    class="clickable"
                                    >Reset Filter</a
                                  >
                                </div>
                              </form>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="dropdown">
                            <a
                              class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                              data-toggle="dropdown"
                              data-offset="-8,0"
                              ><em class="icon bx bx-cog"></em
                            ></a>
                            <div
                              class="dropdown-menu dropdown-menu-xs dropdown-menu-right"
                            >
                              <ul class="link-check">
                                <li><span>Show</span></li>
                                <li class="update-meta active">
                                  <a
                                    href="#"
                                    data-value="10"
                                    data-meta="perpage"
                                    data-type="tnx"
                                    >10</a
                                  >
                                </li>
                                <li class="update-meta">
                                  <a
                                    href="#"
                                    data-value="20"
                                    data-meta="perpage"
                                    data-type="tnx"
                                    >20</a
                                  >
                                </li>
                                <li class="update-meta">
                                  <a
                                    href="#"
                                    data-value="50"
                                    data-meta="perpage"
                                    data-type="tnx"
                                    >50</a
                                  >
                                </li>
                              </ul>
                              <ul class="link-check">
                                <li><span>Density</span></li>
                                <li class="update-meta active">
                                  <a
                                    href="#"
                                    data-value="regular"
                                    data-meta="display"
                                    data-type="tnx"
                                    >Regular</a
                                  >
                                </li>
                                <li class="update-meta">
                                  <a
                                    href="#"
                                    data-value="compact"
                                    data-meta="display"
                                    data-type="tnx"
                                    >Compact</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <form action="transactions.php" method="GET">
                      <div
                        class="search-wrap search-wrap-extend bg-lighter"
                        data-search="search"
                      >
                        <div class="search-content">
                          <a
                            href="#"
                            class="search-back btn btn-icon toggle-search"
                            data-target="search"
                            ><i class="icon bx bx-left-arrow-alt"></i
                          ></a>
                          <input
                            type="text"
                            name="query"
                            class="form-control border-transparent form-focus-none"
                            placeholder="Search by transaction id"
                          />
                          <button class="search-submit btn btn-icon mr-1">
                            <em class="icon bx bx-search-alt-2"></em>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="nk-odr-list is-stretch card card-bordered">
                    <div class="nk-odr-item">
                      <div class="nk-odr-col">No transactions found!</div>
                    </div>
                  </div>
                  <div class="mt-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="nk-footer">
            <div class="container-fluid">
              <div class="nk-footer-wrap">
                <div class="nk-footer-copyright">
                  Investorm &copy; 2022. All Rights Reserved.
                </div>
                <div class="nk-footer-links">
                  <ul class="nav nav-sm">
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="https://app.investorm.xyz/page/faqs"
                        >FAQs</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="https://app.investorm.xyz/page/terms-and-condition"
                        >Terms and Condition</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="https://app.investorm.xyz/page/privacy-policy"
                        >Privacy Policy</a
                      >
                    </li>

                    <li class="nav-item">
                      <div class="dropup">
                        <a
                          href="javascript:void(0)"
                          class="dropdown-toggle dropdown-indicator has-indicator nav-link lang-switch-btn toggle-tigger"
                          data-toggle="dropdown"
                        >
                          English
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-mxh h-max-175px"
                        >
                          <ul class="language-list">
                            <li>
                              <a
                                href="https://app.investorm.xyz/language?lang=en"
                                class="language-item justify-center"
                              >
                                <span class="language-name fw-medium"
                                  >English</span
                                >
                              </a>
                            </li>
                            <li>
                              <a
                                href="https://app.investorm.xyz/language?lang=rtl"
                                class="language-item justify-center"
                              >
                                <span class="language-name">RTL Mode</span>
                              </a>
                            </li>
                          </ul>
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
      new ClipboardJS(".clipboard-init", {
        container: document.getElementById("ajax-modal"),
      });
    </script>
  </body>
</html>
