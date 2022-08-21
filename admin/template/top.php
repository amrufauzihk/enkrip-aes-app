<?php include('config/auth.php'); ?>
<?php include('config/connect-db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AES Enkrip APP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="icon" href="https://play-lh.googleusercontent.com/1EjZ4I1xWdQNN44skn8tJLcsynQotyIbmVi9ZX53fMgGNP95G2PQ3EgqeQXzUOXNmTk">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.w3-button {margin: 15px 0}
</style>
</head>
<body>
<?php 
  $ID_USER = $_SESSION['id_user'];
?>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-orange w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Enkrip AES<br>App</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <?php 
      if ($_SESSION['status'] == 'ADMIN') { ?>
        <a href="kelola_user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kelola Users</a> 
    <?php  } else { ?>
        <a href="kelola_kategori.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kategori Dokumen</a> 
        <a href="enkripsi_dokumen.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Enkripsi Dokumen</a> 
        <a href="dekripsi_dokumen.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dekripsi Dokumen</a> 
    <?php  } ?>
    <a href="config/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
    </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-orange w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-orange w3-margin-right" onclick="w3_open()">&#9776;</a>
  <span>Enkrip AES App</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
