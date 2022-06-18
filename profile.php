<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>WallHints - My Profile</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   <script type="text/javascript">
     function logoff() {
       document.cookie = 'wallhints_login=delete; expires=Thu, 01 Jan 1970 00:00:00 UTC;';
       window.location.replace("http://localhost/wordpress/application/");
     }
   </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <?php
    session_start();
    $secret_token = "JspzLvfNEnHQA1Zcjm1j";
    if (isset($_COOKIE['wallhints_login'])) {
      list($c_username,$cookie_hash) = explode(',',$_COOKIE['wallhints_login']);
      $username = $_SESSION['username'];
      if (md5($username.$secret_token) == $cookie_hash) {
        //Do Nothing
      }
      else {
        header("refresh:0; url=http://localhost/wordpress/application/");
      }
    }
    elseif ($_SESSION['login'] == 'login') {
      //Do Nothing
    }
    else {
      header("refresh:0; url=http://localhost/wordpress/application/");
    }
   ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="images/logo_name.png" height="55" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">


                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/1.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php echo $_SESSION['username'] ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="stocks.php"
                              aria-expanded="false">
                              <i class="fas fa-chart-line" aria-hidden="true"></i>
                              <span class="hide-menu">Stocks Predictor</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="crypto.php"
                              aria-expanded="false">
                              <i class=" fab fa-bitcoin" aria-hidden="true"></i>
                              <span class="hide-menu">Crypto Predictor</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="forex.php"
                              aria-expanded="false">
                              <i class="far fa-money-bill-alt" aria-hidden="true"></i>
                              <span class="hide-menu">ForEx Predictor</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="far fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <button onclick="logoff()" class="btn d-grid btn-danger text-white" style="width: 100%">Log Off</button>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                          <a href="http://localhost/wordpress/"> <i class="fas fa-arrow-left"></i> Back to WallHints Homepage</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">My Profile page</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <img src="plugins/images/users/1.jpg"
                                                class="thumb-lg img-circle" alt="img">
                                        <h4 class="text-white mt-2"><?php echo $_SESSION['username'] ?></h4>
                                        <h5 class="text-white mt-2"><?php echo $_SESSION['email'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                              <div id="error_div" class="w3-panel w3-red w3-display-container" style="display: none">
                                <span onclick="this.parentElement.style.display='none'"
                                class="w3-button w3-large w3-display-topright">&times;</span>
                                <h5>Error!</h5>
                                <small id="error" style="color: #ffffff"></small>
                              </div>
                                <form class="form-horizontal form-material" action="profile.php" method="post">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Full Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="name" placeholder="<?php echo $_SESSION['username'] ?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" placeholder="<?php echo $_SESSION['email'] ?>"
                                                class="form-control p-0 border-0" name="email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password" name="pass" value="" class="form-control p-0 border-0" placeholder="Set New Password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" name="update" value="update">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <?php
                      if (isset($_POST['update'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $oldEmail = 0;
                        $error_msg = "";

                        if (strlen($name) == 0 and strlen($email) == 0 and strlen($pass) == 0) {
                          // Do Nothing
                        }
                        else {
                          if (strlen($name) < 1) {
                              $name = $_SESSION['username'];
                          }
                          if (strlen($email) < 1) {
                              $email = $_SESSION['email'];
                              $oldEmail = 1;
                          }
                          if (strlen($pass) < 1) {
                              $pass = $_SESSION['pass_hash'];
                          }
                          if (strlen($pass) < 6) {
                              $error_msg = "Password must be atleast 6 characters long.";
                              echo "<script>document.getElementById('error_div').style.display='block'</script>";
                          }
                          else {
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "wallhints";

                            $conn = new mysqli($server, $username, $password, $database);

                            if ($conn->connect_error) {
                                $error_msg = "Connection error. Try again later.";
                                echo "<script>document.getElementById('error_div').style.display='block'</script>";
                            }

                            $sql = "SELECT * FROM `app_users` WHERE `email` = '$email'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0 and $oldEmail == 0) {
                              $error_msg = "Email already registered. Sign in or try another email.";
                              echo "<script>document.getElementById('error_div').style.display='block'</script>";
                            }
                            else {
                              $pass = password_hash($pass, PASSWORD_DEFAULT);
                              $ex_email = $_SESSION['email'];
                              $sql = "update `app_users` SET `name`='$name',`email`='$email',`password`='$pass' WHERE `email` = '$ex_email'";
                              if ($conn->query($sql) === TRUE) {
                                //Do Nothing
                              } else {
                                $error_msg = "Connection error. Try again later.";
                                echo "<script>document.getElementById('error_div').style.display='block'</script>";
                              }
                              $conn->close();
                            }
                          }
                        }
                      }
                     ?>
                     <script type="text/javascript">
                       document.getElementById('error').innerHTML = "<?php echo $error_msg ?>";
                     </script>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2022 © WallHints
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>
