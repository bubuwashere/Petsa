<!DOCTYPE html>
<html>
<head>
  <title>Input Data Hewan</title>
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
<div class="container">
<div class="form-daftar">
<h2>Masukkan Data Hewan</h2>
              <?php
                    include_once("../config.php");
                    // Check If form submitted, insert user data into database.
                    if (isset($_POST['datahewan'])) 
                    {
                        $foto_hewan = $_POST['foto_hewan'];
                        $nama_hewan = $_POST['nama_hewan'];
                        $jenis_hewan = $_POST['jenis_hewan'];
                        
                            // Insert user data into database
                            $result   = mysqli_query($conn, "INSERT INTO data_search(foto_hewan, nama_hewan ,jenis_hewan) VALUES('$foto_hewan','$nama_hewan','$jenis_hewan')");

                            // check if user data inserted successfully.
                            if ($result) 
                            {
                                echo "<br><br>Data berhasil dikirim.";
                            } 
                            else 
                            {
                                echo "<br><br>Data gagal dikirim." . mysqli_error($conn);
                            }
                        }

                ?>
<form action="datahewan.php" method="post">
        <div class="boxfoto">
        <label>foto hewan<input type="file" name="foto_hewan" required></label><br>
        </div>
        <label>nama hewan<input type="text" name="nama_hewan" required></label><br>
        <label>jenis hewan <input type="text" name="jenis_hewan" required></label><br>
    <div class="button-section">
        <br/>
     <input class="button" type="submit" name="datahewan" >
     
    </div>
</form>
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