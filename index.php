<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WallHints - Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style_lr.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <?php
      session_start();
      $secret_token = "JspzLvfNEnHQA1Zcjm1j";

      if (isset($_COOKIE['wallhints_login'])) {
        list($c_username,$cookie_hash) = explode(',',$_COOKIE['wallhints_login']);
        if (md5($c_username.$secret_token) == $cookie_hash) {
          $_SESSION['username'] = $c_username;
          header("refresh:0; url=http://localhost/wordpress/application/dashboard.php");
        }
      }
     ?>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="http://localhost/wordpress/application/register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                      <img src="images/logo_name.png" alt="">
                      <div id="error_div" class="w3-panel w3-red w3-display-container" style="display: none">
                        <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-large w3-display-topright">&times;</span>
                        <h5>Error!</h5>
                        <small id="error" style="color: #ffffff"></small>
                      </div>
                        <h2 class="form-title">Sign in</h2>
                        <form action="" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" id="remember-me" value="remember_me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php
      if (isset($_POST['signin'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

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

          $sql = "SELECT * FROM `wp_app_users` WHERE `email` = '$email' LIMIT 1";

          $result = $conn->query($sql);

          if ($result->num_rows == 0) {
            $error_msg = "Email is not registered.";
            echo "<script>document.getElementById('error_div').style.display='block'</script>";
          }
          else {
            while($row = $result->fetch_assoc()) {
              $pass_hash = $row['password'];
              $username = $row['name'];
            }

            if (password_verify($pass, $pass_hash)) {
              // Auth Cookie
              $_SESSION['login'] = 'login';
              if (isset($_POST['remember_me'])) {
                setcookie('wallhints_login', $username.','.md5($username.$secret_token));
              }
              $_SESSION['username'] = $username;
              $_SESSION['email'] = $email;
              $_SESSION['pass_hash'] = $pass_hash;
            }
            else {
              $error_msg = "Invalid credentials.";
              echo "<script>document.getElementById('error_div').style.display='block'</script>";
            }
          }
        }
        if ($error_msg == "") {
            header("refresh:0; url=http://localhost/wordpress/application/dashboard.php");
        }
      }
    ?>

    <script type="text/javascript">
      document.getElementById('error').innerHTML = "<?php echo $error_msg ?>";
    </script>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
