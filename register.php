<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
  <link rel="icon" href="assets/image/ikon.png">
</head>
<body>
<header>
  <div id="header">
      <nav>
        <ul class="nav-header">
          <a href="index.html" id="logo"><img src="assets/image/logo.png" width="175px"></a>
          <button><a href="login.php">LOGIN</a></button>
        </ul>
      </nav>
<br>
<hr>
  </div>
</header>
<main>
<div class="container">
<div class="form-daftar">
<h2>Daftar</h2>
              <?php
                    include_once("config.php");
                    // Check If form submitted, insert user data into database.
                    if (isset($_POST['register'])) 
                    {
                        $nama = $_POST['nama'];
                        $ttl = $_POST['ttl'];
                        $email = $_POST['email'];
                        $no_telepon = $_POST['no_telepon'];
                        $password = $_POST['password'];

                        // If email already exists, throw error
                        $email_result = mysqli_query($conn, "select 'email' from data_user where email='$email' and password='$password'");

                        // Count the number of row matched 
                        $user_matched = mysqli_num_rows($email_result);

                        // If number of user rows returned more than 0, it means email already exists
                        if ($user_matched > 0) 
                        {
                            echo "<strong>Error: </strong> email already exists '$email'.";
                        } 
                        else 
                        {
                            // Insert user data into database
                            $result   = mysqli_query($conn, "INSERT INTO data_user(nama, tempat_tanggal_lahir ,email, no_telepon, password) VALUES('$nama','$ttl','$email', '$no_telepon','$password')");

                            // check if user data inserted successfully.
                            if ($result) 
                            {
                                echo "<br><br>Registrasi berhasil.";
                            } 
                            else 
                            {
                                echo "<br><br>Registrasi gagal. Silahkan Coba Lagi." . mysqli_error($conn);
                            }
                        }
                    }

                ?>
<form action="register.php" method="post">

        <label>Full Name<input type="text" name="nama" required></label><br>
        <label>Birthday<input type="date" name="ttl" required></label><br>
        <label>Email<input type="email" name="email" required></label><br>
        <label>Phone Number <input type="text" name="no_telepon" required></label><br>
        <label>Password <input type="password" name="password" required></label><br>
    <div class="button-section">
        <br/>
     <input class="button" type="submit" name="register" value="Register">
     
    </div>
</form>

</main>
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

