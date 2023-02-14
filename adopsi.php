<!DOCTYPE html>
<html>
<head>
	<title>Adopsi Hewan</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
  <link rel="icon" href="assets/image/ikon.png">
</head>
<body>
<header>
  <div id="wrapper">
  <div id="header">
      <nav>
        <ul class="nav-header">
          <a href="index.html" id="logo"><img src="assets/image/ikon.png" width="60px"></a>
          <h3 style="color: #e39cab; font-family: ">PETSA</h3>
          <li><a href="index.php">MENU</a></li>
          <li><a href="donasi.php">DONASI</a></li>
          <li><a href="titip.php">TITIP HEWAN</a></li>          
          <li><a href="adopsi.php">ADOPSI</a></li>
          <li><a href="listhewan.php">LIST HEWAN</a></li>
          <button><a href="logout.php">LOGOUT</a></button>
        </ul>
      </nav>
<br>
<hr>
  </div>
</header>

<main>

<br/>
                <?php
                    include_once("config.php");
                    // Check If form submitted, insert user data into database.
                    if (isset($_POST['adopsi'])) 
                    {
                        $foto_adopter = $_POST['foto_adopter'];
                        $nama_adopter = $_POST['nama_adopter'];
                        $no_telepon = $_POST['no_telepon'];
                        $lokasi_adopter = $_POST['lokasi_adopter'];
                        $nama_hewan = $_POST['nama_hewan'];
                        $jenis_hewan = $_POST['jenis_hewan'];
                        $usia_hewan = $_POST['usia_hewan'];
                        $gender_hewan = $_POST['gender_hewan'];

                            // Insert user data into database
                            $result   = mysqli_query($conn, "INSERT INTO data_adopsi(foto_adopter, nama_adopter, no_telepon, lokasi_adopter, nama_hewan, jenis_hewan, usia_hewan, gender_hewan) VALUES('$foto_adopter','$nama_adopter','$no_telepon', '$lokasi_adopter','$nama_hewan','$jenis_hewan','$usia_hewan','$gender_hewan')");

                            // check if user data inserted successfully.
                            if ($result) 
                            {
                                echo "<br><br>data berhasil dikirim.";
                            } 
                            else 
                            {
                                echo "<br><br>data gagal dikirim." . mysqli_error($conn);
                            }
                        }

                ?>
<form action="adopsi.php" method="post">
<div class="container-th">
  <div class="kiri-th">
  <br/>
              <div class="boxfoto">
                  <div>
            <label for="foto">Tambahkan foto Adopter</label>
            <input type="file" id="foto" name="foto_adopter"></div>
                  </div>
              </div>
  <!--bagian kanan-->
    <div class="kanan-th">
<div class="form-th">
        <p>Nama Adopter<br>
<input style="color: black" type="text" name="nama_adopter">
        </p>

        
        <p>No Telepon<br>
<input style="color: black" type="text" name="no_telepon">
        </p>

        <p>Lokasi Adopter<br>
<input style="color: black" type="text" name="lokasi_adopter">
        </p>

        <p>Nama Hewan Yang Ingin di Adopsi<br>
      <input style="color: black" type="text" name="nama_hewan">
        </p>


   <p>Jenis Hewan Yang Ingin Di Adopsi<br>
<input style="color: black" type="text" name="jenis_hewan">
        </p>

          <p>Usia Hewan
  <select name="usia_hewan">    
      <option >0-<1</option>
      <option>1-<3</option>
      <option>3-<5</option>
      <option>5-<7</option>
      <option>7></option>
  </select>
        </p>

        <p>Gender Hewan
  <select name="gender_hewan">    
      <option >Jantan</option>
      <option>Betina</option>
  </select>
        </p>


    <div class="button-section">
      <br>
    <input type="submit" name="adopsi" value="SUBMIT DATA">
    </div>

</form> 
    <h3 style="text-align: right;">Contact Us</h3>
      <p style="text-align: right;">&#9993;petsa@gmail.com</p>
      <p style="text-align: right;">&#9742; +6222-567-312</p>
</div>
</div>
</div>
</div>
</main>

<br/><br/>
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

