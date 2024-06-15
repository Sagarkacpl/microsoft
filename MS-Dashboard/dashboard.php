<?php 
  session_start();
  include('inc/dbcon.php');
  if(empty($_SESSION["AdminID"])){
    header("Location: index");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Venue Booking</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/faviconn.png" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>
<body>
  <div class="container-scroller">
    <?php include('inc/header.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include('inc/navbar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Dashboard</h4>
            </div>
          </div>
          <!-------- tab -------->
          <ul class="nav nav-tabs m-tab-li mb-4 mt-4 pb-4">
            <li class="active" data-active="#Today"><a data-toggle="tab" href="#Today" class="active">Today</a></li>
            <li data-active="#Yesterday"><a data-toggle="tab" href="#Yesterday">Yesterday</a></li>
            <li data-active="#Month"><a data-toggle="tab" href="#Month">This Month</a></li>
            <li data-active="#Year"><a data-toggle="tab" href="#Year">This Year</a></li>
            <li data-active="#Custom"><a data-toggle="tab" href="#Custom">Custom</a></li>
          </ul>
          <div class="tab-content m-tab">
            <div id="Today" class="tab-pane fade in active show" style="display: block;">
              <div class="row">
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/booking-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">25</h4>
                            <p>Booking</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/rescheduled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">02</h4>
                            <p>Rescheduled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/cancelled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">00</h4>
                            <p>Cancelled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="Yesterday" class="tab-pane fade">
              <div class="row">
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/booking-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">30</h4>
                            <p>Booking</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/rescheduled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">10</h4>
                            <p>Rescheduled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/cancelled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">05</h4>
                            <p>Cancelled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="Month" class="tab-pane fade">
              <div class="row">
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/booking-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">50</h4>
                            <p>Booking</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/rescheduled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">20</h4>
                            <p>Rescheduled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/cancelled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">02</h4>
                            <p>Cancelled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="Year" class="tab-pane fade">
              <div class="row">
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/booking-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">22</h4>
                            <p>Booking</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/rescheduled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">01</h4>
                            <p>Rescheduled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/cancelled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">00</h4>
                            <p>Cancelled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="Custom" class="tab-pane fade">
              <div class="row">
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/booking-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">32</h4>
                            <p>Booking</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/rescheduled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">02</h4>
                            <p>Rescheduled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 flex-column d-flex grid-margin stretch-card">
                  <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="images/cancelled-icon.png" alt="">
                          </div>
                          <div class="col-md-9 pt-2">
                            <h4 class="text-dark font-weight-bold mb-2">15</h4>
                            <p>Cancelled</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-xl-12 d-flex grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="col-xl-9 col-lg-6 p-0 pr-lg-3 mb-4 mb-xl-0">
                    <div class="dashboard-card">
                      <div class="dashboard-card-title graph-title d-flex">
                        <div class="graph-btns">
                          <ul class="nav nav-tabs m-tab-li mb-4 border-0 lighter-bg">
                            <li class="active" data-active="#year2024"><a data-toggle="tab" href="#year2024" class="p-2 active">2023</a></li>
                            <li data-active="#year2022"><a class="p-2" data-toggle="tab" href="#year2022">2022</a></li>
                            <li data-active="#year2021"><a class="p-2" data-toggle="tab" href="#year2021">2021</a></li>
                            <li data-active="#year2020"><a class="p-2" data-toggle="tab" href="#year2020">2020</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="dashboard-card-body graph-body">
                        <div id="graph">
                          <svg width="850" height="128" class="js-calendar-graph-svg">
                            <g transform="translate(10, 20)">
                              <g transform="translate(32, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="16"
                                  y="90" rx="2" ry="2" data-count="0" data-date="21/05/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(48, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="15"
                                  y="0" rx="2" ry="2" data-count="0" data-date="22/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="15"
                                  y="15" rx="2" ry="2" data-count="0" data-date="23/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="15"
                                  y="30" rx="2" ry="2" data-count="0" data-date="24/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="15"
                                  y="45" rx="2" ry="2" data-count="0" data-date="25/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="15"
                                  y="60" rx="2" ry="2" data-count="0" data-date="26/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="15"
                                  y="75" rx="2" ry="2" data-count="0" data-date="27/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="15"
                                  y="90" rx="2" ry="2" data-count="0" data-date="28/05/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(64, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="14"
                                  y="0" rx="2" ry="2" data-count="0" data-date="29/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="14"
                                  y="15" rx="2" ry="2" data-count="0" data-date="30/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="14"
                                  y="30" rx="2" ry="2" data-count="0" data-date="31/05/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="14"
                                  y="45" rx="2" ry="2" data-count="0" data-date="01/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="14"
                                  y="60" rx="2" ry="2" data-count="0" data-date="02/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="14"
                                  y="75" rx="2" ry="2" data-count="0" data-date="03/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="14"
                                  y="90" rx="2" ry="2" data-count="0" data-date="04/06/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(80, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="13"
                                  y="0" rx="2" ry="2" data-count="0" data-date="05/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="13"
                                  y="15" rx="2" ry="2" data-count="0" data-date="06/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="13"
                                  y="30" rx="2" ry="2" data-count="0" data-date="07/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="13"
                                  y="45" rx="2" ry="2" data-count="0" data-date="08/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="13"
                                  y="60" rx="2" ry="2" data-count="0" data-date="09/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="13"
                                  y="75" rx="2" ry="2" data-count="0" data-date="10/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="13"
                                  y="90" rx="2" ry="2" data-count="0" data-date="11/06/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(96, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="12"
                                  y="0" rx="2" ry="2" data-count="0" data-date="12/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="12"
                                  y="15" rx="2" ry="2" data-count="0" data-date="13/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="12"
                                  y="30" rx="2" ry="2" data-count="0" data-date="14/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="12"
                                  y="45" rx="2" ry="2" data-count="0" data-date="15/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="12"
                                  y="60" rx="2" ry="2" data-count="0" data-date="16/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="12"
                                  y="75" rx="2" ry="2" data-count="0" data-date="17/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="12"
                                  y="90" rx="2" ry="2" data-count="0" data-date="18/06/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(112, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="11"
                                  y="0" rx="2" ry="2" data-count="0" data-date="19/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="11"
                                  y="15" rx="2" ry="2" data-count="0" data-date="20/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="11"
                                  y="30" rx="2" ry="2" data-count="0" data-date="21/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="11"
                                  y="45" rx="2" ry="2" data-count="0" data-date="22/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="11"
                                  y="60" rx="2" ry="2" data-count="0" data-date="23/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="11"
                                  y="75" rx="2" ry="2" data-count="0" data-date="24/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="11"
                                  y="90" rx="2" ry="2" data-count="0" data-date="25/06/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(128, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="10"
                                  y="0" rx="2" ry="2" data-count="0" data-date="26/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="10"
                                  y="15" rx="2" ry="2" data-count="0" data-date="27/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="10"
                                  y="30" rx="2" ry="2" data-count="0" data-date="28/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="10"
                                  y="45" rx="2" ry="2" data-count="0" data-date="29/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="10"
                                  y="60" rx="2" ry="2" data-count="0" data-date="30/06/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="10"
                                  y="75" rx="2" ry="2" data-count="0" data-date="01/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="10"
                                  y="90" rx="2" ry="2" data-count="0" data-date="02/07/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(144, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="9"
                                  y="0" rx="2" ry="2" data-count="0" data-date="03/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="9"
                                  y="15" rx="2" ry="2" data-count="0" data-date="04/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="9"
                                  y="30" rx="2" ry="2" data-count="0" data-date="05/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="9"
                                  y="45" rx="2" ry="2" data-count="0" data-date="06/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="9"
                                  y="60" rx="2" ry="2" data-count="0" data-date="07/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="9"
                                  y="75" rx="2" ry="2" data-count="0" data-date="08/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="9"
                                  y="90" rx="2" ry="2" data-count="0" data-date="09/07/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(160, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="8"
                                  y="0" rx="2" ry="2" data-count="0" data-date="10/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="8"
                                  y="15" rx="2" ry="2" data-count="0" data-date="11/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="8"
                                  y="30" rx="2" ry="2" data-count="0" data-date="12/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="8"
                                  y="45" rx="2" ry="2" data-count="0" data-date="13/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="8"
                                  y="60" rx="2" ry="2" data-count="0" data-date="14/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="8"
                                  y="75" rx="2" ry="2" data-count="0" data-date="15/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="8"
                                  y="90" rx="2" ry="2" data-count="0" data-date="16/07/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(176, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="7"
                                  y="0" rx="2" ry="2" data-count="0" data-date="17/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="7"
                                  y="15" rx="2" ry="2" data-count="0" data-date="18/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="7"
                                  y="30" rx="2" ry="2" data-count="0" data-date="19/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="7"
                                  y="45" rx="2" ry="2" data-count="0" data-date="20/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="7"
                                  y="60" rx="2" ry="2" data-count="0" data-date="21/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="7"
                                  y="75" rx="2" ry="2" data-count="0" data-date="22/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="7"
                                  y="90" rx="2" ry="2" data-count="0" data-date="23/07/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(192, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="6"
                                  y="0" rx="2" ry="2" data-count="0" data-date="24/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="6"
                                  y="15" rx="2" ry="2" data-count="0" data-date="25/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="6"
                                  y="30" rx="2" ry="2" data-count="0" data-date="26/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="6"
                                  y="45" rx="2" ry="2" data-count="0" data-date="27/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="6"
                                  y="60" rx="2" ry="2" data-count="0" data-date="28/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="6"
                                  y="75" rx="2" ry="2" data-count="0" data-date="29/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="6"
                                  y="90" rx="2" ry="2" data-count="0" data-date="30/07/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(208, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="5"
                                  y="0" rx="2" ry="2" data-count="0" data-date="31/07/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="5"
                                  y="15" rx="2" ry="2" data-count="0" data-date="01/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="5"
                                  y="30" rx="2" ry="2" data-count="0" data-date="02/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="5"
                                  y="45" rx="2" ry="2" data-count="0" data-date="03/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="5"
                                  y="60" rx="2" ry="2" data-count="0" data-date="04/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="5"
                                  y="75" rx="2" ry="2" data-count="0" data-date="05/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="5"
                                  y="90" rx="2" ry="2" data-count="0" data-date="06/08/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(224, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="4"
                                  y="0" rx="2" ry="2" data-count="0" data-date="07/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="4"
                                  y="15" rx="2" ry="2" data-count="0" data-date="08/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="4"
                                  y="30" rx="2" ry="2" data-count="0" data-date="09/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="4"
                                  y="45" rx="2" ry="2" data-count="0" data-date="10/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="4"
                                  y="60" rx="2" ry="2" data-count="0" data-date="11/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="4"
                                  y="75" rx="2" ry="2" data-count="0" data-date="12/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="4"
                                  y="90" rx="2" ry="2" data-count="0" data-date="13/08/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(240, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="3"
                                  y="0" rx="2" ry="2" data-count="0" data-date="14/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="3"
                                  y="15" rx="2" ry="2" data-count="0" data-date="15/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="3"
                                  y="30" rx="2" ry="2" data-count="0" data-date="16/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="3"
                                  y="45" rx="2" ry="2" data-count="0" data-date="17/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="3"
                                  y="60" rx="2" ry="2" data-count="0" data-date="18/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="3"
                                  y="75" rx="2" ry="2" data-count="0" data-date="19/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="3"
                                  y="90" rx="2" ry="2" data-count="0" data-date="20/08/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(256, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="2"
                                  y="0" rx="2" ry="2" data-count="0" data-date="21/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="2"
                                  y="15" rx="2" ry="2" data-count="0" data-date="22/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="2"
                                  y="30" rx="2" ry="2" data-count="0" data-date="23/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="2"
                                  y="45" rx="2" ry="2" data-count="0" data-date="24/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="2"
                                  y="60" rx="2" ry="2" data-count="0" data-date="25/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="2"
                                  y="75" rx="2" ry="2" data-count="0" data-date="26/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="2"
                                  y="90" rx="2" ry="2" data-count="0" data-date="27/08/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(272, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="1"
                                  y="0" rx="2" ry="2" data-count="0" data-date="28/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="1"
                                  y="15" rx="2" ry="2" data-count="0" data-date="29/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="1"
                                  y="30" rx="2" ry="2" data-count="0" data-date="30/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="1"
                                  y="45" rx="2" ry="2" data-count="0" data-date="31/08/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="1"
                                  y="60" rx="2" ry="2" data-count="0" data-date="01/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="1"
                                  y="75" rx="2" ry="2" data-count="0" data-date="02/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="1"
                                  y="90" rx="2" ry="2" data-count="0" data-date="03/09/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(288, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="0"
                                  y="0" rx="2" ry="2" data-count="0" data-date="04/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="0"
                                  y="15" rx="2" ry="2" data-count="0" data-date="05/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="0"
                                  y="30" rx="2" ry="2" data-count="0" data-date="06/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="0"
                                  y="45" rx="2" ry="2" data-count="0" data-date="07/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="0"
                                  y="60" rx="2" ry="2" data-count="0" data-date="08/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="0"
                                  y="75" rx="2" ry="2" data-count="0" data-date="09/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="0"
                                  y="90" rx="2" ry="2" data-count="0" data-date="10/09/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(304, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-1"
                                  y="0" rx="2" ry="2" data-count="0" data-date="11/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-1"
                                  y="15" rx="2" ry="2" data-count="0" data-date="12/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-1"
                                  y="30" rx="2" ry="2" data-count="0" data-date="13/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-1"
                                  y="45" rx="2" ry="2" data-count="0" data-date="14/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-1"
                                  y="60" rx="2" ry="2" data-count="0" data-date="15/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-1"
                                  y="75" rx="2" ry="2" data-count="0" data-date="16/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-1"
                                  y="90" rx="2" ry="2" data-count="0" data-date="17/09/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(320, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-2"
                                  y="0" rx="2" ry="2" data-count="0" data-date="18/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-2"
                                  y="15" rx="2" ry="2" data-count="0" data-date="19/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-2"
                                  y="30" rx="2" ry="2" data-count="0" data-date="20/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-2"
                                  y="45" rx="2" ry="2" data-count="0" data-date="21/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-2"
                                  y="60" rx="2" ry="2" data-count="0" data-date="22/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-2"
                                  y="75" rx="2" ry="2" data-count="0" data-date="23/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-2"
                                  y="90" rx="2" ry="2" data-count="0" data-date="24/09/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(336, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-3"
                                  y="0" rx="2" ry="2" data-count="0" data-date="25/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-3"
                                  y="15" rx="2" ry="2" data-count="0" data-date="26/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-3"
                                  y="30" rx="2" ry="2" data-count="0" data-date="27/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-3"
                                  y="45" rx="2" ry="2" data-count="0" data-date="28/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-3"
                                  y="60" rx="2" ry="2" data-count="0" data-date="29/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-3"
                                  y="75" rx="2" ry="2" data-count="0" data-date="30/09/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-3"
                                  y="90" rx="2" ry="2" data-count="0" data-date="01/10/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(352, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-4"
                                  y="0" rx="2" ry="2" data-count="0" data-date="02/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-4"
                                  y="15" rx="2" ry="2" data-count="0" data-date="03/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-4"
                                  y="30" rx="2" ry="2" data-count="0" data-date="04/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-4"
                                  y="45" rx="2" ry="2" data-count="0" data-date="05/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-4"
                                  y="60" rx="2" ry="2" data-count="0" data-date="06/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-4"
                                  y="75" rx="2" ry="2" data-count="0" data-date="07/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-4"
                                  y="90" rx="2" ry="2" data-count="0" data-date="08/10/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(368, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-5"
                                  y="0" rx="2" ry="2" data-count="0" data-date="09/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-5"
                                  y="15" rx="2" ry="2" data-count="0" data-date="10/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-5"
                                  y="30" rx="2" ry="2" data-count="0" data-date="11/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-5"
                                  y="45" rx="2" ry="2" data-count="0" data-date="12/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-5"
                                  y="60" rx="2" ry="2" data-count="0" data-date="13/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-5"
                                  y="75" rx="2" ry="2" data-count="0" data-date="14/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-5"
                                  y="90" rx="2" ry="2" data-count="0" data-date="15/10/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(384, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-6"
                                  y="0" rx="2" ry="2" data-count="0" data-date="16/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-6"
                                  y="15" rx="2" ry="2" data-count="0" data-date="17/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-6"
                                  y="30" rx="2" ry="2" data-count="0" data-date="18/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-6"
                                  y="45" rx="2" ry="2" data-count="0" data-date="19/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-6"
                                  y="60" rx="2" ry="2" data-count="0" data-date="20/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-6"
                                  y="75" rx="2" ry="2" data-count="0" data-date="21/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-6"
                                  y="90" rx="2" ry="2" data-count="0" data-date="22/10/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(400, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-7"
                                  y="0" rx="2" ry="2" data-count="0" data-date="23/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-7"
                                  y="15" rx="2" ry="2" data-count="0" data-date="24/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-7"
                                  y="30" rx="2" ry="2" data-count="0" data-date="25/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-7"
                                  y="45" rx="2" ry="2" data-count="0" data-date="26/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-7"
                                  y="60" rx="2" ry="2" data-count="0" data-date="27/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-7"
                                  y="75" rx="2" ry="2" data-count="0" data-date="28/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-7"
                                  y="90" rx="2" ry="2" data-count="0" data-date="29/10/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(416, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-8"
                                  y="0" rx="2" ry="2" data-count="0" data-date="30/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-8"
                                  y="15" rx="2" ry="2" data-count="0" data-date="31/10/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-8"
                                  y="30" rx="2" ry="2" data-count="0" data-date="01/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-8"
                                  y="45" rx="2" ry="2" data-count="0" data-date="02/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-8"
                                  y="60" rx="2" ry="2" data-count="0" data-date="03/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-8"
                                  y="75" rx="2" ry="2" data-count="0" data-date="04/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-8"
                                  y="90" rx="2" ry="2" data-count="0" data-date="05/11/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(432, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-9"
                                  y="0" rx="2" ry="2" data-count="0" data-date="06/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-9"
                                  y="15" rx="2" ry="2" data-count="0" data-date="07/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-9"
                                  y="30" rx="2" ry="2" data-count="0" data-date="08/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-9"
                                  y="45" rx="2" ry="2" data-count="0" data-date="09/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-9"
                                  y="60" rx="2" ry="2" data-count="0" data-date="10/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-9"
                                  y="75" rx="2" ry="2" data-count="0" data-date="11/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-9"
                                  y="90" rx="2" ry="2" data-count="0" data-date="12/11/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(448, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-10"
                                  y="0" rx="2" ry="2" data-count="0" data-date="13/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-10"
                                  y="15" rx="2" ry="2" data-count="0" data-date="14/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-10"
                                  y="30" rx="2" ry="2" data-count="0" data-date="15/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-10"
                                  y="45" rx="2" ry="2" data-count="0" data-date="16/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-10"
                                  y="60" rx="2" ry="2" data-count="0" data-date="17/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-10"
                                  y="75" rx="2" ry="2" data-count="0" data-date="18/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-10"
                                  y="90" rx="2" ry="2" data-count="0" data-date="19/11/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(464, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-11"
                                  y="0" rx="2" ry="2" data-count="0" data-date="20/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-11"
                                  y="15" rx="2" ry="2" data-count="0" data-date="21/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-11"
                                  y="30" rx="2" ry="2" data-count="0" data-date="22/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-11"
                                  y="45" rx="2" ry="2" data-count="0" data-date="23/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-11"
                                  y="60" rx="2" ry="2" data-count="0" data-date="24/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-11"
                                  y="75" rx="2" ry="2" data-count="0" data-date="25/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-11"
                                  y="90" rx="2" ry="2" data-count="0" data-date="26/11/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(480, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-12"
                                  y="0" rx="2" ry="2" data-count="0" data-date="27/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-12"
                                  y="15" rx="2" ry="2" data-count="0" data-date="28/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-12"
                                  y="30" rx="2" ry="2" data-count="0" data-date="29/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-12"
                                  y="45" rx="2" ry="2" data-count="0" data-date="30/11/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-12"
                                  y="60" rx="2" ry="2" data-count="0" data-date="01/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-12"
                                  y="75" rx="2" ry="2" data-count="0" data-date="02/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-12"
                                  y="90" rx="2" ry="2" data-count="0" data-date="03/12/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(496, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-13"
                                  y="0" rx="2" ry="2" data-count="0" data-date="04/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-13"
                                  y="15" rx="2" ry="2" data-count="0" data-date="05/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-13"
                                  y="30" rx="2" ry="2" data-count="0" data-date="06/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-13"
                                  y="45" rx="2" ry="2" data-count="0" data-date="07/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-13"
                                  y="60" rx="2" ry="2" data-count="0" data-date="08/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-13"
                                  y="75" rx="2" ry="2" data-count="0" data-date="09/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-13"
                                  y="90" rx="2" ry="2" data-count="0" data-date="10/12/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(512, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-14"
                                  y="0" rx="2" ry="2" data-count="0" data-date="11/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-14"
                                  y="15" rx="2" ry="2" data-count="0" data-date="12/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-14"
                                  y="30" rx="2" ry="2" data-count="0" data-date="13/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-14"
                                  y="45" rx="2" ry="2" data-count="0" data-date="14/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-14"
                                  y="60" rx="2" ry="2" data-count="0" data-date="15/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-14"
                                  y="75" rx="2" ry="2" data-count="0" data-date="16/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-14"
                                  y="90" rx="2" ry="2" data-count="0" data-date="17/12/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(528, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-15"
                                  y="0" rx="2" ry="2" data-count="0" data-date="18/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-15"
                                  y="15" rx="2" ry="2" data-count="0" data-date="19/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-15"
                                  y="30" rx="2" ry="2" data-count="0" data-date="20/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-15"
                                  y="45" rx="2" ry="2" data-count="0" data-date="21/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-15"
                                  y="60" rx="2" ry="2" data-count="0" data-date="22/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-15"
                                  y="75" rx="2" ry="2" data-count="0" data-date="23/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-15"
                                  y="90" rx="2" ry="2" data-count="0" data-date="24/12/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(544, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-16"
                                  y="0" rx="2" ry="2" data-count="0" data-date="25/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-16"
                                  y="15" rx="2" ry="2" data-count="0" data-date="26/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-16"
                                  y="30" rx="2" ry="2" data-count="0" data-date="27/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-16"
                                  y="45" rx="2" ry="2" data-count="0" data-date="28/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-16"
                                  y="60" rx="2" ry="2" data-count="0" data-date="29/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-16"
                                  y="75" rx="2" ry="2" data-count="0" data-date="30/12/2023" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-16"
                                  y="90" rx="2" ry="2" data-count="0" data-date="31/12/2023" data-level="0"></rect>
                              </g>
                              <g transform="translate(560, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-17"
                                  y="0" rx="2" ry="2" data-count="0" data-date="01/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-17"
                                  y="15" rx="2" ry="2" data-count="0" data-date="02/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-17"
                                  y="30" rx="2" ry="2" data-count="0" data-date="03/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-17"
                                  y="45" rx="2" ry="2" data-count="0" data-date="04/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-17"
                                  y="60" rx="2" ry="2" data-count="0" data-date="05/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-17"
                                  y="75" rx="2" ry="2" data-count="0" data-date="06/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(0, 119 ,255 , 0.25)" width="11" height="11" x="-17"
                                  y="90" rx="2" ry="2" data-count="1" data-date="07/01/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(576, 0)">
                                <rect class="graph_day" fill="rgba(0, 119 ,255 , 0.25)" width="11" height="11" x="-18"
                                  y="0" rx="2" ry="2" data-count="1" data-date="08/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-18"
                                  y="15" rx="2" ry="2" data-count="0" data-date="09/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-18"
                                  y="30" rx="2" ry="2" data-count="0" data-date="10/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-18"
                                  y="45" rx="2" ry="2" data-count="0" data-date="11/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-18"
                                  y="60" rx="2" ry="2" data-count="0" data-date="12/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-18"
                                  y="75" rx="2" ry="2" data-count="0" data-date="13/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-18"
                                  y="90" rx="2" ry="2" data-count="0" data-date="14/01/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(592, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-19"
                                  y="0" rx="2" ry="2" data-count="0" data-date="15/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(0, 119 ,255 , 0.25)" width="11" height="11" x="-19"
                                  y="15" rx="2" ry="2" data-count="1" data-date="16/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-19"
                                  y="30" rx="2" ry="2" data-count="0" data-date="17/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-19"
                                  y="45" rx="2" ry="2" data-count="0" data-date="18/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-19"
                                  y="60" rx="2" ry="2" data-count="0" data-date="19/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-19"
                                  y="75" rx="2" ry="2" data-count="0" data-date="20/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(0, 119 ,255 , 0.25)" width="11" height="11" x="-19"
                                  y="90" rx="2" ry="2" data-count="1" data-date="21/01/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(608, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-20"
                                  y="0" rx="2" ry="2" data-count="0" data-date="22/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-20"
                                  y="15" rx="2" ry="2" data-count="0" data-date="23/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-20"
                                  y="30" rx="2" ry="2" data-count="0" data-date="24/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-20"
                                  y="45" rx="2" ry="2" data-count="0" data-date="25/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(0, 119 ,255 , 0.25)" width="11" height="11" x="-20"
                                  y="60" rx="2" ry="2" data-count="1" data-date="26/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-20"
                                  y="75" rx="2" ry="2" data-count="0" data-date="27/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-20"
                                  y="90" rx="2" ry="2" data-count="0" data-date="28/01/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(624, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-21"
                                  y="0" rx="2" ry="2" data-count="0" data-date="29/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(0, 119 ,255 , 0.25)" width="11" height="11" x="-21"
                                  y="15" rx="2" ry="2" data-count="1" data-date="30/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-21"
                                  y="30" rx="2" ry="2" data-count="0" data-date="31/01/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-21"
                                  y="45" rx="2" ry="2" data-count="0" data-date="01/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-21"
                                  y="60" rx="2" ry="2" data-count="0" data-date="02/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-21"
                                  y="75" rx="2" ry="2" data-count="0" data-date="03/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-21"
                                  y="90" rx="2" ry="2" data-count="0" data-date="04/02/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(640, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-22"
                                  y="0" rx="2" ry="2" data-count="0" data-date="05/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-22"
                                  y="15" rx="2" ry="2" data-count="0" data-date="06/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-22"
                                  y="30" rx="2" ry="2" data-count="0" data-date="07/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-22"
                                  y="45" rx="2" ry="2" data-count="0" data-date="08/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-22"
                                  y="60" rx="2" ry="2" data-count="0" data-date="09/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-22"
                                  y="75" rx="2" ry="2" data-count="0" data-date="10/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-22"
                                  y="90" rx="2" ry="2" data-count="0" data-date="11/02/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(656, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-23"
                                  y="0" rx="2" ry="2" data-count="0" data-date="12/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-23"
                                  y="15" rx="2" ry="2" data-count="0" data-date="13/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-23"
                                  y="30" rx="2" ry="2" data-count="0" data-date="14/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-23"
                                  y="45" rx="2" ry="2" data-count="0" data-date="15/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-23"
                                  y="60" rx="2" ry="2" data-count="0" data-date="16/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-23"
                                  y="75" rx="2" ry="2" data-count="0" data-date="17/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-23"
                                  y="90" rx="2" ry="2" data-count="0" data-date="18/02/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(672, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-24"
                                  y="0" rx="2" ry="2" data-count="0" data-date="19/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-24"
                                  y="15" rx="2" ry="2" data-count="0" data-date="20/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-24"
                                  y="30" rx="2" ry="2" data-count="0" data-date="21/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-24"
                                  y="45" rx="2" ry="2" data-count="0" data-date="22/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-24"
                                  y="60" rx="2" ry="2" data-count="0" data-date="23/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-24"
                                  y="75" rx="2" ry="2" data-count="0" data-date="24/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-24"
                                  y="90" rx="2" ry="2" data-count="0" data-date="25/02/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(688, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-25"
                                  y="0" rx="2" ry="2" data-count="0" data-date="26/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-25"
                                  y="15" rx="2" ry="2" data-count="0" data-date="27/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-25"
                                  y="30" rx="2" ry="2" data-count="0" data-date="28/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-25"
                                  y="45" rx="2" ry="2" data-count="0" data-date="29/02/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-25"
                                  y="60" rx="2" ry="2" data-count="0" data-date="01/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-25"
                                  y="75" rx="2" ry="2" data-count="0" data-date="02/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-25"
                                  y="90" rx="2" ry="2" data-count="0" data-date="03/03/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(704, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-26"
                                  y="0" rx="2" ry="2" data-count="0" data-date="04/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-26"
                                  y="15" rx="2" ry="2" data-count="0" data-date="05/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-26"
                                  y="30" rx="2" ry="2" data-count="0" data-date="06/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-26"
                                  y="45" rx="2" ry="2" data-count="0" data-date="07/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-26"
                                  y="60" rx="2" ry="2" data-count="0" data-date="08/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-26"
                                  y="75" rx="2" ry="2" data-count="0" data-date="09/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-26"
                                  y="90" rx="2" ry="2" data-count="0" data-date="10/03/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(720, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-27"
                                  y="0" rx="2" ry="2" data-count="0" data-date="11/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-27"
                                  y="15" rx="2" ry="2" data-count="0" data-date="12/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-27"
                                  y="30" rx="2" ry="2" data-count="0" data-date="13/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-27"
                                  y="45" rx="2" ry="2" data-count="0" data-date="14/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-27"
                                  y="60" rx="2" ry="2" data-count="0" data-date="15/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-27"
                                  y="75" rx="2" ry="2" data-count="0" data-date="16/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-27"
                                  y="90" rx="2" ry="2" data-count="0" data-date="17/03/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(736, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-28"
                                  y="0" rx="2" ry="2" data-count="0" data-date="18/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-28"
                                  y="15" rx="2" ry="2" data-count="0" data-date="19/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-28"
                                  y="30" rx="2" ry="2" data-count="0" data-date="20/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-28"
                                  y="45" rx="2" ry="2" data-count="0" data-date="21/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-28"
                                  y="60" rx="2" ry="2" data-count="0" data-date="22/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-28"
                                  y="75" rx="2" ry="2" data-count="0" data-date="23/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-28"
                                  y="90" rx="2" ry="2" data-count="0" data-date="24/03/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(752, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-29"
                                  y="0" rx="2" ry="2" data-count="0" data-date="25/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-29"
                                  y="15" rx="2" ry="2" data-count="0" data-date="26/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-29"
                                  y="30" rx="2" ry="2" data-count="0" data-date="27/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-29"
                                  y="45" rx="2" ry="2" data-count="0" data-date="28/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-29"
                                  y="60" rx="2" ry="2" data-count="0" data-date="29/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-29"
                                  y="75" rx="2" ry="2" data-count="0" data-date="30/03/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-29"
                                  y="90" rx="2" ry="2" data-count="0" data-date="31/03/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(768, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-30"
                                  y="0" rx="2" ry="2" data-count="0" data-date="01/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-30"
                                  y="15" rx="2" ry="2" data-count="0" data-date="02/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-30"
                                  y="30" rx="2" ry="2" data-count="0" data-date="03/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-30"
                                  y="45" rx="2" ry="2" data-count="0" data-date="04/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-30"
                                  y="60" rx="2" ry="2" data-count="0" data-date="05/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-30"
                                  y="75" rx="2" ry="2" data-count="0" data-date="06/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-30"
                                  y="90" rx="2" ry="2" data-count="0" data-date="07/04/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(784, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-31"
                                  y="0" rx="2" ry="2" data-count="0" data-date="08/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-31"
                                  y="15" rx="2" ry="2" data-count="0" data-date="09/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-31"
                                  y="30" rx="2" ry="2" data-count="0" data-date="10/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-31"
                                  y="45" rx="2" ry="2" data-count="0" data-date="11/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-31"
                                  y="60" rx="2" ry="2" data-count="0" data-date="12/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-31"
                                  y="75" rx="2" ry="2" data-count="0" data-date="13/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-31"
                                  y="90" rx="2" ry="2" data-count="0" data-date="14/04/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(800, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-32"
                                  y="0" rx="2" ry="2" data-count="0" data-date="15/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-32"
                                  y="15" rx="2" ry="2" data-count="0" data-date="16/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-32"
                                  y="30" rx="2" ry="2" data-count="0" data-date="17/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-32"
                                  y="45" rx="2" ry="2" data-count="0" data-date="18/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-32"
                                  y="60" rx="2" ry="2" data-count="0" data-date="19/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-32"
                                  y="75" rx="2" ry="2" data-count="0" data-date="20/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-32"
                                  y="90" rx="2" ry="2" data-count="0" data-date="21/04/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(816, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-33"
                                  y="0" rx="2" ry="2" data-count="0" data-date="22/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-33"
                                  y="15" rx="2" ry="2" data-count="0" data-date="23/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-33"
                                  y="30" rx="2" ry="2" data-count="0" data-date="24/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-33"
                                  y="45" rx="2" ry="2" data-count="0" data-date="25/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-33"
                                  y="60" rx="2" ry="2" data-count="0" data-date="26/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-33"
                                  y="75" rx="2" ry="2" data-count="0" data-date="27/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-33"
                                  y="90" rx="2" ry="2" data-count="0" data-date="28/04/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(832, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-34"
                                  y="0" rx="2" ry="2" data-count="0" data-date="29/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-34"
                                  y="15" rx="2" ry="2" data-count="0" data-date="30/04/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-34"
                                  y="30" rx="2" ry="2" data-count="0" data-date="01/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-34"
                                  y="45" rx="2" ry="2" data-count="0" data-date="02/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-34"
                                  y="60" rx="2" ry="2" data-count="0" data-date="03/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-34"
                                  y="75" rx="2" ry="2" data-count="0" data-date="04/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-34"
                                  y="90" rx="2" ry="2" data-count="0" data-date="05/05/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(848, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-35"
                                  y="0" rx="2" ry="2" data-count="0" data-date="06/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-35"
                                  y="15" rx="2" ry="2" data-count="0" data-date="07/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-35"
                                  y="30" rx="2" ry="2" data-count="0" data-date="08/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-35"
                                  y="45" rx="2" ry="2" data-count="0" data-date="09/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-35"
                                  y="60" rx="2" ry="2" data-count="0" data-date="10/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-35"
                                  y="75" rx="2" ry="2" data-count="0" data-date="11/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-35"
                                  y="90" rx="2" ry="2" data-count="0" data-date="12/05/2024" data-level="0"></rect>
                              </g>
                              <g transform="translate(864, 0)">
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-36"
                                  y="0" rx="2" ry="2" data-count="0" data-date="13/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-36"
                                  y="15" rx="2" ry="2" data-count="0" data-date="14/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-36"
                                  y="30" rx="2" ry="2" data-count="0" data-date="15/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-36"
                                  y="45" rx="2" ry="2" data-count="0" data-date="16/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-36"
                                  y="60" rx="2" ry="2" data-count="0" data-date="17/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-36"
                                  y="75" rx="2" ry="2" data-count="0" data-date="18/05/2024" data-level="0"></rect>
                                <rect class="graph_day" fill="rgba(230, 230 ,230 , 1)" width="11" height="11" x="-36"
                                  y="90" rx="2" ry="2" data-count="0" data-date="19/05/2024" data-level="0"></rect>
                              </g>
                              <text x="-967" y="-8" class="month_name">May</text>
                              <text x="65" y="-8" class="month_name">Jun</text>
                              <text x="129" y="-8" class="month_name">Jul</text>
                              <text x="209" y="-8" class="month_name">Aug</text>
                              <text x="273" y="-8" class="month_name">Sep</text>
                              <text x="337" y="-8" class="month_name">Oct</text>
                              <text x="417" y="-8" class="month_name">Nov</text>
                              <text x="481" y="-8" class="month_name">Dec</text>
                              <text x="561" y="-8" class="month_name">Jan</text>
                              <text x="625" y="-8" class="month_name">Feb</text>
                              <text x="689" y="-8" class="month_name">Mar</text>
                              <text x="769" y="-8" class="month_name">Apr</text>
                              <text x="833" y="-8" class="month_name">May</text>
                              <text text-anchor="start" class="week_name" dx="16" dy="8">Mon</text>
                              <text text-anchor="start" class="week_name" dx="16" dy="23"
                                style="display: none;">Tue</text>
                              <text text-anchor="start" class="week_name" dx="16" dy="38">Wed</text>
                              <text text-anchor="start" class="week_name" dx="16" dy="53"
                                style="display: none;">Thu</text>
                              <text text-anchor="start" class="week_name" dx="16" dy="68">Fri</text>
                              <text text-anchor="start" class="week_name" dx="16" dy="83"
                                style="display: none;">Sat</text>
                              <text text-anchor="start" class="week_name" dx="16" dy="98">Sun</text>
                            </g>
                          </svg>
                          <span class="graph_info_popup" style="display: none;">2 bookings on
                            07/01/2023</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include('inc/footer.php'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>