<?php
    include("../config.php");
    session_start();
    if (!isset($_SESSION["email"])) 
    {
        header("location: ../login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Menu Admin</title>
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
  <link rel="icon" href="assets/image/ikon.png">
</head>
<body>
<header>
  <div id="wrapper">
  <div id="header">
      <nav>
        <ul class="nav-header">
          <a href="index.html" id="logo"><img src="../assets/image/ikon.png" width="60px"></a>
          <h3 style="color: #e39cab; font-family: ">PETSA</h3>
          <li><a href="indexadmin.php">MENU</a></li>
          <li><a href="datacustomer.php">DATA CUSTOMER</a></li>
          <li><a href="datadonasi.php">DATA DONASI</a></li>
          <li><a href="datatitip.php">DATA PENITIPAN</a></li>          
          <li><a href="dataadopsi.php">DATA ADOPSI</a></li>
          <li><a href="datahewan.php">INPUT DATA</a></li>
          <li><a href="../admin/datalisthewan.php">LIST HEWAN</a></li>
          <button><a href="../logout.php">LOGOUT</a></button>
        </ul>
      </nav>
<br>
<hr>
  </div>
</header>

<main>
<div class="container-menu">

  <img src="../assets/image/menu.png" width="100%" margin="auto">
</main>
<br>
<div class="container2">
  <div class="box4">
  <footer>
    <img src="../assets/image/logo.png" width="100%" >
  </footer>
</div>
</div>

</body>
</html>



<!--





-->

