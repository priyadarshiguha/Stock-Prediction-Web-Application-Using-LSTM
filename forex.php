<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
  <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
  <meta name="robots" content="noindex,nofollow">
  <title>WallHints - ForEx Predictor</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="shortcut icon" href="images/favicon.png">
  <!-- Custom CSS -->
  <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
  <!-- Custom CSS -->
  <link href="css/style.min.css" rel="stylesheet">
  <script type="text/javascript">
    function logoff() {
      document.cookie = 'wallhints_login=delete; expires=Thu, 01 Jan 1970 00:00:00 UTC;';
      window.location.replace("http://localhost/wordpress/application/");
    }
  </script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>
  <?php
  session_start();
  $secret_token = "JspzLvfNEnHQA1Zcjm1j";
  if (isset($_COOKIE['wallhints_login'])) {
    list($c_username, $cookie_hash) = explode(',', $_COOKIE['wallhints_login']);
    $username = $_SESSION['username'];
    if (md5($username . $secret_token) == $cookie_hash) {
      //Do Nothing
    } else {
      header("refresh:0; url=http://localhost/wordpress/application/");
    }
  } elseif ($_SESSION['login'] == 'login') {
    //Do Nothing
  } else {
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
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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
          <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav ms-auto d-flex align-items-center">


            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li>
              <a class="profile-pic" href="profile.php">
                <img src="plugins/images/users/1.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium"><?php echo $_SESSION['username'] ?></span></a>
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
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false">
                <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="stocks.php" aria-expanded="false">
                <i class="fas fa-chart-line" aria-hidden="true"></i>
                <span class="hide-menu">Stocks Predictor</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="crypto.php" aria-expanded="false">
                <i class=" fab fa-bitcoin" aria-hidden="true"></i>
                <span class="hide-menu">Crypto Predictor</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="forex.php" aria-expanded="false">
                <i class="far fa-money-bill-alt" aria-hidden="true"></i>
                <span class="hide-menu">ForEx Predictor</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                <i class="far fa-user" aria-hidden="true"></i>
                <span class="hide-menu">Profile</span>
              </a>
            </li>
            <li class="text-center p-20 upgrade-btn">
              <button onclick="logoff()" class="btn d-grid btn-danger text-white" style="width: 100%">Log Off</button>
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
            <h4 class="page-title">ForEx Predictor</h4>
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
        <!-- Search -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <h3 class="box-title">Predict ForEx Currencies</h3>
              <form action="" method="GET">
                <div class="row g-2">
                  <div class="col-md">
                    <div class="form-floating">
                      <input type="text" name="symbol" class="form-control" id="floatingInputGrid" placeholder="0" required list="forex_list">
                      <label for="floatingInputGrid">Search for ForEx</label>
                      <datalist id="forex_list">
                        <?php
                        if (($handle = fopen("forex_list.csv", "r")) !== FALSE) {
                          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            echo "<option value='$data[0]'>$data[1]</option>";
                          }
                          fclose($handle);
                        }
                        ?>
                      </datalist>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-floating">
                      <select class="form-select" name="duration" id="floatingSelectGrid" aria-label="Floating label select example" required>
                        <option selected value="5D">5 Days</option>
                        <option value="1M">1 Month</option>
                        <option value="6M">6 Months</option>
                        <option value="1Y">1 Year</option>
                        <option value="5Y">5 Years</option>
                        <option value="MAX">Max</option>
                      </select>
                      <label for="floatingSelectGrid">Select Range</label>
                    </div>
                  </div>
                  <div class="col-md">
                    <button type="submit" name="search" value="search" class="btn btn-primary" style="height: 100%">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row" id="summary" style="display: none">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <h3 class="box-title">Market Summary</h3>
              <div id="chart_div" style="width: 100%; height: 500px;"></div>
              <div class="text-center">
                <form action="" method="POST">
                  <button type="submit" name="predict" value="predict" class="btn btn-success">Get Predictions</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="accuracy" style="display: none">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <h3 class="box-title">Prediction Accuracy</h3>
              <div id="acc_div" style="width: 100%; height: 500px;"></div>
            </div>
          </div>
        </div>
        <div class="row" id="future" style="display: none">
          <?php
          if (isset($_GET['search'])) {
            $symbol = $_GET['symbol'];
            $duration = $_GET['duration'];

            $command = escapeshellcmd("getstockdata.py $symbol $duration");
            $output = shell_exec($command);
            echo "<script>document.getElementById('summary').style.display = 'block'</script>";
          }

          if (isset($_POST['predict'])) {
            $command = escapeshellcmd("predict.py $symbol");
            $output = shell_exec($command);
            echo "<script>document.getElementById('accuracy').style.display = 'block'</script>";
            echo "<script>document.getElementById('future').style.display = 'block'</script>";
          }
          ?>
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <h3 class="box-title">Predictions For Next 7 Days</h3>
              <div class="table-responsive">
                <table class="table no-wrap table-hover">
                  <thead>
                    <tr>
                      <th class="border-top-0">Date</th>
                      <th class="border-top-0">Predicted Close Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (($handle = fopen("temp_predicted.csv", "r")) !== FALSE) {
                      $data = fgetcsv($handle, 1000, ",") !== FALSE;
                      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . $data[1] . "</td>";
                        echo "<td>" . $data[2] . "</td>";
                        echo "</tr>";
                      }
                      fclose($handle);
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          <?php
          $traces = array();
          if (($handle = fopen("temp_short_data.csv", "r")) !== FALSE) {
            $data = fgetcsv($handle, 1000, ",") !== FALSE;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              array_push($traces, array($data[0], $data[4], $data[2], $data[3], $data[1]));
            }
            fclose($handle);
          }
          ?>

          var trace1 = {
            x: [
              <?php
              foreach ($traces as $row) {
                echo "'" . $row[0] . "',";
              }
              ?>
            ],
            close: [
              <?php
              foreach ($traces as $row) {
                echo $row[1] . ",";
              }
              ?>
            ],
            high: [
              <?php
              foreach ($traces as $row) {
                echo $row[2] . ",";
              }
              ?>
            ],
            low: [
              <?php
              foreach ($traces as $row) {
                echo $row[3] . ",";
              }
              ?>
            ],
            open: [
              <?php
              foreach ($traces as $row) {
                echo $row[4] . ",";
              }
              ?>
            ],
            increasing: {
              line: {
                color: 'green'
              }
            },
            decreasing: {
              line: {
                color: 'red'
              }
            },
            type: 'candlestick',
            xaxis: 'x',
            yaxis: 'y',
            name: '<?php echo $symbol; ?>'
          };

          var data = [trace1];

          var layout = {
            title: '<?php echo "$symbol Market Summary. Period: $duration"; ?>',

            dragmode: 'zoom',

            showlegend: true,
            xaxis: {
              rangeslider: {
                visible: false
              }
            }
          };

          Plotly.newPlot("chart_div", data, layout);

          <?php
          $traces = array();
          if (($handle = fopen("temp_statistics.csv", "r")) !== FALSE) {
            $data = fgetcsv($handle, 1000, ",") !== FALSE;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              array_push($traces, array($data[0], $data[1], $data[2]));
            }
            fclose($handle);
          }
          ?>

          var trace1 = {
            type: "scatter",
            mode: "lines",
            name: 'Actual',
            x: [
              <?php
              foreach ($traces as $row) {
                echo $row[0] . ",";
              }
              ?>
            ],
            y: [
              <?php
              foreach ($traces as $row) {
                echo $row[1] . ",";
              }
              ?>
            ],
            line: {
              color: '#17BECF'
            }
          }
          var trace2 = {
            type: "scatter",
            mode: "lines",
            name: 'Predicted',
            x: [
              <?php
              foreach ($traces as $row) {
                echo $row[0] . ",";
              }
              ?>
            ],
            y: [
              <?php
              foreach ($traces as $row) {
                echo $row[2] . ",";
              }
              ?>
            ],
            line: {
              color: '#7F7F7F'
            }
          }

          var data = [trace1, trace2];

          var layout = {
            title: '<?php echo "$symbol Price Prediction Accuracy"; ?>',
          };

          Plotly.newPlot('acc_div', data, layout);
        </script>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center" style="width: 95%; position: absolute; bottom: 10px;"> 2022 © WallHints
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
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>