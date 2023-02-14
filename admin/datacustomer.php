<!DOCTYPE html>
<html>
<head>
	<title>Data Customer</title>
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
                    <th scope="col">Id</th>
                    <th scope="col"><b>Nama</b></td>
                    <th scope="col"><b>Email</b></td>
                    <th scope="col"><b>No Telepon</b></td>
                    <th scope="col"><b>Tempat Tanggal Lahir</b></td>
                    <th scope="col"><b>Password</b></td>

                  </tr>
                </thead>
                <tbody>
                  <?php
            include_once("../config.php");
            $results = mysqli_query($conn, "SELECT * FROM data_user");
              while ($res = mysqli_fetch_array($results)):
            ?>
              <tr>
                <td scope="row"> <?=$res['id'] ?>
                <td> <?=$res['nama'] ?>
                <td> <?=$res['email']?> </td>
                <td> <?=$res['no_telepon']?></td>
                <td> <?=$res['tempat_tanggal_lahir']?> </td>
                <td> <?=$res['password']?> </td>
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