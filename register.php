<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WallHints - Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style_lr.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                      <img src="images/logo_name.png" alt="">
                      <div id="error_div" class="w3-panel w3-red w3-display-container" style="display: none">
                        <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-large w3-display-topright">&times;</span>
                        <h5>Error!</h5>
                        <small id="error" style="color: #ffffff"></small>
                      </div>
                        <h2 class="form-title">Sign up</h2>

                        <form action="register.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re_pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>

                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="http://localhost/wordpress/application/" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    if (isset($_POST['signup'])) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $re_pass = $_POST['re_pass'];
      $error_msg = "";

      if (strlen($pass) < 6) {
          $error_msg = "Password must be atleast 6 characters long.";
          echo "<script>document.getElementById('error_div').style.display='block'</script>";
      }
      elseif (strcmp($pass, $re_pass) != 0) {
          $error_msg = "Please make sure your passwords match.";
          echo "<script>document.getElementById('error_div').style.display='block'</script>";
      }
      else {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "wallhints";

        $conn = new mysqli($server, $username, $password, $database);

        if ($conn->connect_error) {
            $error_msg = "DB Connection error. Try again later.";
            echo "<script>document.getElementById('error_div').style.display='block'</script>";
        }

        $sql = "SELECT * FROM `wp_app_users` WHERE `email` = '$email'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $error_msg = "Email already registered. Sign in or try another email.";
          echo "<script>document.getElementById('error_div').style.display='block'</script>";
        }
        else {
          $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
          $sql = "insert into `wp_app_users` (`name`, `email`, `password`) values ('$name', '$email', '$pass_hash')";
          if ($conn->query($sql) === TRUE) {
            //Do Nothing
          } else {
            $error_msg = "SQL Connection error. Try again later.";
            echo "<script>document.getElementById('error_div').style.display='block'</script>";
          }
          $conn->close();
        }

        if ($error_msg == "") {
            header("refresh:0; url=http://localhost/wordpress/application/");
        }
      }
    }
    ?>

    <script type="text/javascript">
      document.getElementById('error').innerHTML = "<?php echo $error_msg ?>";
    </script>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
