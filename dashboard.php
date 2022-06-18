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
  <title>WallHints - Dashboard</title>
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

    function search() {
      window.location.replace("http://localhost/wordpress/application/stocks.php");
    }
  </script>

  <style media="screen">
    tr,
    th {
      text-align: left;
    }
  </style>
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
            <h4 class="page-title">Dashboard</h4>
          </div>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- PHP data retrieve code -->
      <!-- ============================================================== -->
      <?php
      function colorChange($val, $per)
      {
        if (floatval($val) > 0) {
          return "<span style='color: green'><i class='fas fa-arrow-up'></i>&nbsp;" . round(floatval($val), 2) . "(" . round(floatval($per), 2) . "%)</span>";
        } elseif (floatval($val) < 0) {
          return "<span style='color: red'><i class='fas fa-arrow-down'></i>&nbsp;" . round(floatval($val), 2) . "(" . round(floatval($per), 2) . "%)</span>";
        } else {
          return "<span><i class='fas fa-minus'></i>&nbsp;$val($per%)</span>";
        }
      }

      $stocks = array();
      $crypto = array();
      $forex = array();
      $index = 0;
      $createNewFile = 0;

      if (($handle = fopen("trends.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          if (date("Y/m/d") == $data[0]) {
            // Do Nothing
          } else {
            $createNewFile = 1;
            break;
          }
          $num = count($data);
          $row = array();

          for ($i = 0; $i < $num; $i++) {
            array_push($row, $data[$i]);
          }
          if ($index < 10) {
            $stocks[$index] = $row;
            $index += 1;
          } elseif ($index < 20) {
            $crypto[$index] = $row;
            $index += 1;
          } else {
            $forex[$index] = $row;
            $index += 1;
          }
        }
        fclose($handle);
      } else {
        $createNewFile = 1;
      }

      if ($createNewFile == 1) {
        $fp = fopen('trends.csv', 'w');
        $curl = curl_init();

        //US STOCKS
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://yh-finance.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=AAPL%2CGOOG%2CAMZN%2CMSFT%2CJPM%2CFB%2CTWTR",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: yh-finance.p.rapidapi.com",
            "X-RapidAPI-Key: PASTE YOUR API KEY HERE"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $arr = json_decode($response, true);
          for ($i = 0; $i < 7; $i++) {
            $row = array();
            array_push(
              $row,
              date("Y/m/d"),
              $arr['quoteResponse']['result'][$i]['symbol'],
              $arr['quoteResponse']['result'][$i]['longName'],
              colorChange($arr['quoteResponse']['result'][$i]['regularMarketChange'], $arr['quoteResponse']['result'][$i]['regularMarketChangePercent']),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketOpen']), 2),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayHigh']), 2),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayLow']), 2),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketPreviousClose']), 2),
              $arr['quoteResponse']['result'][$i]['regularMarketVolume']
            );
            fputcsv($fp, $row);
          }
        }

        //IN STOCKS
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://yh-finance.p.rapidapi.com/market/v2/get-quotes?region=IN&symbols=TATAMOTORS.NS%2CICICIBANK.NS%2CHDFCBANK.NS",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: yh-finance.p.rapidapi.com",
            "X-RapidAPI-Key: PASTE YOUR API KEY HERE"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $arr = json_decode($response, true);

          for ($i = 0; $i < 3; $i++) {
            $row = array();
            array_push(
              $row,
              date("Y/m/d"),
              $arr['quoteResponse']['result'][$i]['symbol'],
              $arr['quoteResponse']['result'][$i]['longName'],
              colorChange($arr['quoteResponse']['result'][$i]['regularMarketChange'], $arr['quoteResponse']['result'][$i]['regularMarketChangePercent']),
              "&#8377;" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketOpen']), 2),
              "&#8377;" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayHigh']), 2),
              "&#8377;" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayLow']), 2),
              "&#8377;" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketPreviousClose']), 2),
              $arr['quoteResponse']['result'][$i]['regularMarketVolume']
            );
            fputcsv($fp, $row);
          }
        }

        //CRYPTO
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://yh-finance.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=BTC-USD%2CETH-USD%2CUSDT-USD%2CBNB-USD%2CION-USD%2CUSDC-USD%2CXRP-USD%2CSOL-USD%2CADA-USD%2CLUNA1-USD",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: yh-finance.p.rapidapi.com",
            "X-RapidAPI-Key: PASTE YOUR API KEY HERE"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $arr = json_decode($response, true);

          for ($i = 0; $i < 10; $i++) {
            $row = array();
            array_push(
              $row,
              date("Y/m/d"),
              $arr['quoteResponse']['result'][$i]['symbol'],
              $arr['quoteResponse']['result'][$i]['shortName'],
              colorChange($arr['quoteResponse']['result'][$i]['regularMarketChange'], $arr['quoteResponse']['result'][$i]['regularMarketChangePercent']),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketOpen']), 2),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayHigh']), 2),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayLow']), 2),
              "$" . round(floatval($arr['quoteResponse']['result'][$i]['regularMarketPreviousClose']), 2),
              $arr['quoteResponse']['result'][$i]['regularMarketVolume']
            );
            fputcsv($fp, $row);
          }
        }

        //FOREX
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://yh-finance.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=EURUSD=X%2CINR=X%2CJPY=X%2CGBPUSD=X%2CEURJPY=X%2CEURGBP=X%2C%2CCNY=X",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: yh-finance.p.rapidapi.com",
            "X-RapidAPI-Key: PASTE YOUR API KEY HERE"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $arr = json_decode($response, true);

          for ($i = 0; $i < 7; $i++) {
            $row = array();
            array_push(
              $row,
              date("Y/m/d"),
              $arr['quoteResponse']['result'][$i]['symbol'],
              $arr['quoteResponse']['result'][$i]['shortName'],
              colorChange($arr['quoteResponse']['result'][$i]['regularMarketChange'], $arr['quoteResponse']['result'][$i]['regularMarketChangePercent']),
              round(floatval($arr['quoteResponse']['result'][$i]['regularMarketOpen']), 2),
              round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayHigh']), 2),
              round(floatval($arr['quoteResponse']['result'][$i]['regularMarketDayLow']), 2),
              round(floatval($arr['quoteResponse']['result'][$i]['regularMarketPreviousClose']), 2)
            );
            fputcsv($fp, $row);
          }
        }
        header("refresh:0;");
      }
      ?>
      <!-- ============================================================== -->
      <!-- End PHP data retrieve code -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Trending Stocks-->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
              <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Trending Stocks</h3>
                <span>&nbsp;&nbsp;</span>
                <a href="http://localhost/wordpress/application/stocks.php"><button type="button" class="btn btn-outline-primary" style="border-radius: 50px">Predict Stocks</button></a>
              </div>
              <div class="table-responsive">
                <table class="table no-wrap table-hover">
                  <thead>
                    <tr>
                      <th class="border-top-0">Symbol</th>
                      <th style="width: 50%" class="border-top-0">Name</th>
                      <th class="border-top-0">Change</th>
                      <th class="border-top-0">Open</th>
                      <th class="border-top-0">High</th>
                      <th class="border-top-0">Low</th>
                      <th class="border-top-0">Prev Close</th>
                      <th class="border-top-0">Volume</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                      echo '<tr onmouseover="' . 'this.style.cursor = ' . "'pointer'" . '" onclick="window.location=' . "'http://localhost/wordpress/application/stocks.php?symbol=" . $stocks[$i][1] . "&duration=1M&search=search'" . '">';
                      for ($j = 1; $j < 9; $j++) {
                        echo "<td>" . $stocks[$i][$j] . "</td>";
                      }
                      echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Trending Crypto -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Trending Crpytocurrencies</h3>
                <span>&nbsp;&nbsp;</span>
                <a href="http://localhost/wordpress/application/crypto.php"><button type="button" class="btn btn-outline-primary" style="border-radius: 50px">Predict Cryptocurrencies</button></a>
              </div>
              <div class="table-responsive">
                <table class="table no-wrap table-hover">
                  <thead>
                    <tr>
                      <th class="border-top-0">Symbol</th>
                      <th style="width: 50%" class="border-top-0">Name</th>
                      <th class="border-top-0">Change</th>
                      <th class="border-top-0">Open</th>
                      <th class="border-top-0">High</th>
                      <th class="border-top-0">Low</th>
                      <th class="border-top-0">Prev Close</th>
                      <th class="border-top-0">Volume</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i = 10; $i < 20; $i++) {
                      echo '<tr onmouseover="' . 'this.style.cursor = ' . "'pointer'" . '" onclick="window.location=' . "'http://localhost/wordpress/application/crypto.php?symbol=" . $crypto[$i][1] . "&duration=1M&search=search'" . '">';
                      for ($j = 1; $j < 9; $j++) {
                        echo "<td>" . $crypto[$i][$j] . "</td>";
                      }
                      echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- ============================================================== -->
        <!-- Trending ForEx -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Trending ForEx</h3>
                <span>&nbsp;&nbsp;</span>
                <a href="http://localhost/wordpress/application/forex.php"><button type="button" class="btn btn-outline-primary" style="border-radius: 50px">Predict ForEx</button></a>
              </div>
              <div class="table-responsive">
                <table class="table no-wrap table-hover">
                  <thead>
                    <tr>
                      <th class="border-top-0">Symbol</th>
                      <th style="width: 50%" class="border-top-0">Name</th>
                      <th class="border-top-0">Change</th>
                      <th class="border-top-0">Open</th>
                      <th class="border-top-0">High</th>
                      <th class="border-top-0">Low</th>
                      <th class="border-top-0">Prev Close</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i = 20; $i < 27; $i++) {
                      echo '<tr onmouseover="' . 'this.style.cursor = ' . "'pointer'" . '" onclick="window.location=' . "'http://localhost/wordpress/application/forex.php?symbol=" . $forex[$i][1] . "&duration=1M&search=search'" . '">';
                      for ($j = 1; $j < 8; $j++) {
                        echo "<td>" . $forex[$i][$j] . "</td>";
                      }
                      echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

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