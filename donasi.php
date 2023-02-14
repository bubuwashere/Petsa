<!DOCTYPE html>
<html>
<head>
  <title>Donasi</title>
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
<div class="container-donasi">
  <div class="kiri-donasi">
<div class="form-donasi">
           <?php
                    include_once("config.php");
                    // Check If form submitted, insert user data into database.
                    if (isset($_POST['donasi'])) 
                    {
                        $nama = $_POST['nama'];
                        $no_telepon = $_POST['no_telepon'];
                        $pesan = $_POST['pesan'];
                        $jenis_donasi = $_POST['jenis_donasi'];
                        $jumlah_donasi = $_POST['jumlah_donasi'];

                            // Insert user data into database
                            $result   = mysqli_query($conn, "INSERT INTO data_donasi(nama, no_telepon ,pesan, jenis_donasi, jumlah_donasi) VALUES('$nama','$no_telepon','$pesan', '$jenis_donasi','$jumlah_donasi')");

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
<form action="donasi.php" method="post">
<h2>Donasi</h2>
        <p>Nama<br>
<input type="text" name="nama" placeholder="masukkan nama">
        </p>

        <p>No Telepon<br>
<input type="text" name="no_telepon" placeholder="masukkan no telepon">
        </p>

        <p>Pesan<br>
<input type="text" name="pesan" placeholder="masukkan pesan" maxlength="100">
        </p>

       
    </div>
</div>
  <!--bagian kanan-->
   <div class="kanan-donasi">
<div class="form-donasi">

          <p>Jenis Donasi<br>
  <select name="jenis_donasi">    
      <option >Pribadi</option>
      <option>Kelompok</option>
  </select>
        </p>

        <p>Jumlah Donasi(Rp) <br>
  <input type="text" name="jumlah_donasi" placeholder="masukkan jumlah donasi" maxlength="100">
        </p>
     

    <div>
    <input style=" color: #FFFFFF; background-color: #C4A092; border-color: #C4A092; border-radius: 10%; font-size: large; padding: 10px;margin-top: 10px;" class="button" type="submit" name="donasi" value="DONASI">

    </div>
</form>   
          <h3 style="text-align: right;">Contact Us</h3>
          <p style="text-align: right;">&#9993;petsa@gmail.com</p>
          <p style="text-align: right;">&#9742; +6222-567-312</p>     
    </div>
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
<audio controls><source src="audio.mp3" type="audio/mp3"></audio>
<button type="button" class="btn btn-default navbar-btn">Sign in</button>





-->

