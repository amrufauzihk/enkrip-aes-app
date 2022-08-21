<?php include ('template/top.php') ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Dekripsi Dokumen</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
  </div>
    <!-- <a href="" class="w3-button w3-orange" style="margin: 15px">+ Buka Kunci</a> -->
    <form class="w3-container" action="dekripsi_proses.php" enctype="multipart/form-data" method="POST">
        <label>Pilih File</label>
        <input name="id_user" type="hidden" value="<?= $ID_USER; ?>">
        <input class="w3-input" name="dokumen" type="file">
        <label>Masukkan Password</label>
        <input class="w3-input" name="password" type="password">
        <input class="w3-button w3-deep-orange w3-container" name="submit" type="submit">
    </form>
  
</div>
<?php include ('template/bottom.php') ?>