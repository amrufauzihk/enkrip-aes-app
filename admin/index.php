<?php include ('template/top.php') ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Selamat Datang</b></h1>
    <h1 class="w3-xxxlarge w3-text-orange"><b>
        <?php 
                echo $_SESSION['nama'];
        ?>
    </b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
  </div>
</div>
<?php include ('template/bottom.php') ?>