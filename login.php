
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
  <link rel="icon" href="assets/image/ikon.png">
</head>
<body>
<header>
  <div id="header">
      <nav>
        <ul class="nav-header">
          <a href="index.html" id="logo"><img src="assets/image/ikon.png" width="60px"></a>
          <h3 style="color: #e39cab; font-family: ">PETSA</h3>
        </ul>
      </nav>
<br>
<hr>
  </div>
</header>

<main>
<br/>
<br/>
<div class="container">
<div class="kiri-login">
<img src="assets/image/login.jpg" width="100%">
</div>
<div class="kanan-login">
    <div class="form-login">
<h2>Log In!</h2>
            <?php
                    // Start PHP session at the beginning 
                    session_start();

                    // Create database connection using config file
                    include_once("config.php");

                    // If form submitted, collect username and password from form
                    if (isset($_POST['login'])) {
                        $email    = $_POST['email'];
                        $password = $_POST['password'];

                        // Check if a user exists with given username & password
                        $result = mysqli_query($conn, "select * from data_user where email='$email' and password='$password'");

                        // Count the number of user/rows returned by query 
                        $user_matched = mysqli_num_rows($result);

                        // Check If user matched/exist, store user username in session and redirect to sample page-1
                        if ($user_matched > 0) {

                            $_SESSION["email"] = $email;
                            header("location: index.php");
                        } else {
                          $result = mysqli_query($conn, "select * from data_admin where email_admin='$email' and password_admin='$password'");
                          if(mysqli_num_rows($result)>0){
                            $_SESSION["email"] = $email;
                            header("location: admin/indexadmin.php");
                          } else {
                            echo "<br><br>email or password is wrong <br/><br/>";
                          }
                          
                        }
                    }
                ?>
<form action="login.php" method="post">
    <div class="inner-wrap">
        <label>Email Address </label>
        <br>
        <input type="email" name="email">
        <br>
        <label>Password <input type="password" name="password"></label>
      </div>
    <div class="button-section">
      <br>
    <input type="submit" name="login" value="Login">
    </div>
    <br/>
    <p>Belum punya akun?
    <a href="register.php" id="daftar">Klik disini</a></p>
</form>
      </div>
</main>

<br>
<div class="container2">
  <div class="box4">
  <footer>
    <img src="assets/image/logo.png" width="100%" >
  </footer>
</div>
</div>

  </body>
</html>



<!--

-->

