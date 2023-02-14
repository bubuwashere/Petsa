<!DOCTYPE html>
<html>
<head>
	<title>List Hewan</title>
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

</div>
  <!--bagian kanan-->
    <div class="kontainer2">
          <div class="box3">
            <?php
            include_once("config.php");
            $i = 0;
            $results = mysqli_query($conn, "SELECT * FROM data_search");
              while ($res = mysqli_fetch_array($results)):
                if($i%5 == 0):
            ?>
                <div class="kotak">
            <?php 
                endif;
             ?>

              <div>
                <?='<img src="./image/'.$res['foto_hewan'] .'" style="width: 120px; height:120px ">'?>
                <h5 style="text-align: left;">Nama: <?=$res['nama_hewan']?> <br>Jenis : <?=$res['jenis_hewan']?></h5> 
             
              </div>
            <?php 
                if($i%5 == 4):
             ?>
                </div>
                <br><br><br>
             <?php 
                endif;
              ?>

            <?php 
              ++$i;
            endwhile;
             ?>
    </div>
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
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>

  <footer >
<div class="container2" >
  <div class="box4" >
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

