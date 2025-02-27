<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>American Election</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon.png"
    />
    <link
      rel="stylesheet"
      href="./vendor/owl-carousel/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./vendor/owl-carousel/css/owl.theme.default.min.css"
    />
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
      <!--**********************************
            Nav header start
        ***********************************-->
      <div class="nav-header">
        <a href="" class="brand-logo">
          <img class="logo-abbr" src="./images/logo.png" alt="" />
          <img class="logo-compact" src="./images/logo-text.png" alt="" />
          <img class="brand-title" src="./images/logo-text.png" alt="" />
        </a>

        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span
            ><span class="line"></span>
          </div>
        </div>
      </div>
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
      <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                <div class="search_bar dropdown">
                  <span
                    class="search_icon p-3 c-pointer"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-magnify"></i>
                  </span>
                  <div class="dropdown-menu p-0 m-0">
                    <form>
                      <input
                        class="form-control"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                      />
                    </form>
                  </div>
                </div>
              </div>

              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown notification_dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-bell"></i>
                    <div class="pulse-css"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <ul class="list-unstyled">
                      <li class="media dropdown-item">
                        <span class="success"><i class="ti-user"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Martin</strong> has added a
                              <strong>customer</strong> Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="primary"
                          ><i class="ti-shopping-cart"></i
                        ></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Jennifer</strong> purchased Light
                              Dashboard 2.0.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="danger"><i class="ti-bookmark"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Robin</strong> marked a
                              <strong>ticket</strong> as unsolved.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="primary"><i class="ti-heart"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>David</strong> purchased Light Dashboard
                              1.0.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="success"><i class="ti-image"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong> James.</strong> has added a<strong
                                >customer</strong
                              >
                              Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                    </ul>
                    <a class="all-notification" href="#"
                      >See all notifications <i class="ti-arrow-right"></i
                    ></a>
                  </div>
                </li>
                <li class="nav-item dropdown header-profile">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-account"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="./app-profile.html" class="dropdown-item">
                      <i class="icon-user"></i>
                      <span class="ml-2">Profile </span>
                    </a>
                    <a href="./email-inbox.html" class="dropdown-item">
                      <i class="icon-envelope-open"></i>
                      <span class="ml-2">Inbox </span>
                    </a>
                    <a href="./page-login.html" class="dropdown-item">
                      <i class="icon-key"></i>
                      <span class="ml-2">Logout </span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.layout.sidebar')
      <!--**********************************
            Sidebar end
        ***********************************-->

      <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Voter</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>ID</th>
                                                <th>Vote time</th>
                                                <th>Date</th>
                                                <th>Candidtae</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($voter as $h)
                                            <tr>
                                                <th>{{$h->id}}</th>
                                                <th>{{$h->user->name}}</th>
                                                <th>{{$h->user->gender}}</th>
                                                <th>{{$h->user->nationalId}}</th>
                                                <th>{{$h->created_at->format('h:i A')}}</th>
                                                <th>{{$h->created_at->format('Y:m:d')}}</th>
                                                <th>{{$h->candidate->name}}</th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!--**********************************
            Footer start
        ***********************************-->
      <div class="footer">
        <div class="copyright">
          <p>
            Copyright © Designed &amp; Developed by
            <a href="#" target="_blank">Quixkit</a> 2019
          </p>
          <p>
            Distributed by
            <a href="https://themewagon.com/" target="_blank">Themewagon</a>
          </p>
        </div>
      </div>
      <!--**********************************
            Footer end
        ***********************************-->

      <!--**********************************
           Support ticket button start
        ***********************************-->

      <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>

    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>

    <script src="./js/dashboard/dashboard-1.js"></script>
  </body>
</html>
