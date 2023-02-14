<!DOCTYPE html>
<html>
<head>
	<title>Data Penitipan</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
  <link rel="icon" href="../assets/image/ikon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

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

 <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><b>ID Hewan</b></td>
                    <th scope="col"><b>Nama Hewan</b></td>
                    <th scope="col"><b>Foto Hewan</b></td>
                    <th scope="col"><b>Catatan</b></td>
                    <th scope="col"><b>Jenis Hewan</b></td>
                    <th scope="col"><b>Usia Hewan</b></td>
                    <th scope="col"><b>Gender Hewan</b></td>
                    <th scope="col"><b>Status Kesehatan</b></td>
                    <th scope="col"><b>Lokasi</b></td>
                    <th scope="col"><b>Alasan</b></td>
                    <th scope="col"><b>Jangka Waktu</b></td> 
                  </tr>
                </thead>
                <tbody>
                  <?php
            include_once("../config.php");
            $results = mysqli_query($conn, "SELECT * FROM data_titip");
              while ($res = mysqli_fetch_array($results)):
            ?>
              <tr>
                <td scope="row"><?=$res['id']?> </td>
                <td> <?=$res['nama_hewan']?> </td>
                <td > <?='<img src="../image/'.$res['foto'] .'" style="width: 120px; height:120px ">'?>
                <td> <?=$res['catatan']?></td>
                <td> <?=$res['jenis']?> </td>
                <td> <?=$res['usia']?> </td>
                <td> <?=$res['gender']?> </td>
                <td> <?=$res['status_kesehatan']?> </td>
                <td> <?=$res['lokasi']?> </td>
                <td> <?=$res['alasan']?> </td>
                <td> <?=$res['jangka_waktu']?> </td>
              </tr>
            <?php 
            endwhile;
             ?>
                </tbody>
        
      </table>

<main>
  
<br/>

</div>
  <!--bagian kanan-->
    <div class="kontainer2">

    </div>
</div>
</div>
</main>

<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
  <footer >
<div class="container2" >
  <div class="box4" >
    <img src="../assets/image/logo.png" width="100%" >
  </footer>
</div>
</div>

  </body>
</html>



<!--
<audio controls><source src="audio.mp3" type="audio/mp3"></audio>
<button type="button" class="btn btn-default navbar-btn">Sign in</button>





-->

