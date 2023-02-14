<!DOCTYPE html>

<html>
<head>
	<title>Data Donasi</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
  <link rel="icon" href="assets/image/ikon.png">
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
                    <th scope="col">Id Donasi</th>
                    <th scope="col"><b>Nama</b></td>
                    <th scope="col"><b>no telepon</b></td>
                    <th scope="col"><b>Pesan</b></td>
                    <th scope="col"><b>Jenis Donasi</b></td>
                    <th scope="col"><b> Jumlah Donasi (RP) </b></td>
                  </tr>
                </thead>
                <tbody>
                  <?php
            include_once("../config.php");
            $results = mysqli_query($conn, "SELECT * FROM data_donasi");
              while ($res = mysqli_fetch_array($results)):
            ?>
              <tr>

                <td scope="row" > <?=$res['id']?> </td>
                <td><?=$res['nama']?> </td>
                <td> <?=$res['no_telepon']?></td>
                <td> <?=$res['pesan']?> </td>
                <td> <?=$res['jenis_donasi']?> </td>
                <td> <?=$res['jumlah_donasi']?> </td>
              </tr>
            <?php 
            endwhile;
             ?>
                </tbody>
        
      </table>
            
      

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
