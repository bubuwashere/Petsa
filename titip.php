<!DOCTYPE html>
<html>
<head>
	<title>TITIP HEWAN</title>
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
                    if (isset($_POST['titip'])) 
                    {
                        $nama_hewan = $_POST['nama_hewan'];
                        $foto = $_POST['foto'];
                        $catatan = $_POST['catatan'];
                        $jenis = $_POST['jenis'];
                        $usia = $_POST['usia'];
                        $gender = $_POST['gender'];
                        $status_kesehatan = $_POST['status_kesehatan'];
                        $lokasi = $_POST['lokasi'];
                        $alasan = $_POST['alasan'];
                        $jangka_waktu = $_POST['jangka_waktu'];

                            // Insert user data into database
                            $result   = mysqli_query($conn, "INSERT INTO data_titip(nama_hewan, foto, catatan, jenis, usia, gender, status_kesehatan, lokasi, alasan, jangka_waktu) VALUES('$nama_hewan','$foto','$catatan', '$jenis','$usia','$gender','$status_kesehatan','$lokasi','$alasan','$jangka_waktu')");

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
<form action="titip.php" method="post">
<div class="container-th">
  <div class="kiri-th">
  <textarea minlength="0" name="nama_hewan" maxlength="300" cols="25" rows="1" placeholder="NAMA HEWAN" font-size="30px"></textarea>
  <br/>
              <div class="boxfoto">
                  <div>
            <label for="foto">Tambahkan foto Hewan</label>
            <input type="file" id="foto" name="foto"></div>
                  </div>
              <br/>
              <div class="boxnote">
              <label for="note">Nama Pemilik dan Kontak Pemilik</label>
              <br/>
              <textarea minlength="0" name="catatan" maxlength="300" cols="25" rows="6" placeholder="nama Pemilik // no telepon"></textarea>
              </div>
              </div>
  <!--bagian kanan-->
    <div class="kanan-th">
<div class="form-th">

        <p>Jenis Hewan <br>
          <input style="color: black" type="text" name="jenis">
        </p>

          <p>Usia
  <select name="usia">    
      <option >0-<1</option>
      <option>1-<3</option>
      <option>3-<5</option>
      <option>5-<7</option>
      <option>7></option>
  </select>
        </p>

        <p>Gender
  <select name="gender">    
      <option >Jantan</option>
      <option>Betina</option>
  </select>
        </p>
        
        <p>Status Kesehatan
  <select name="status_kesehatan">    
      <option>Sehat</option>
      <option>Sakit</option>
  </select>
        </p>

        <p>Lokasi <br>
          <input style="color: black" type="text" name="lokasi">
        </p>

        <p>Alasan <br>
          <input style="color: black" type="text" name="alasan">
        </p>

          <p>Jangka Waktu
  <select name="jangka_waktu">    
      <option >1-3 hari</option>
      <option>4-6 hari</option>
      <option>1 minggu</option>
      <option>1 bulan</option>
  </select>
        </p>

    <span class="privacy-policy">
     <input type="checkbox" name="checkbox">Dengan menyetujui ini, anda telah sepakat untuk mentaati ketentuan kami 
     </span>

    <div class="button-section">
      <br>
    <input type="submit" name="titip" value="TITIP HEWAN">
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

