<?php include ('template/top.php') ?>
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Tambah Kategori</b></h1>
        <hr style="width:50px;border:5px solid orange" class="w3-round">
    </div>
    <a href="kelola_kategori.php" class="w3-button w3-orange" style="margin: 15px">< Kembali</a>
    <form class="w3-container" action="controller.php?page=kategori&action=insert" method="POST">
        <label>Masukkan Kategori</label>
        <input type="hidden" name="id_user" value="<?= $ID_USER ?>">
        <input class="w3-input" name="kategori" type="text">
        <input class="w3-button w3-deep-orange w3-container" name="submit" type="submit">
    </form>
  
</div>
<?php include ('template/bottom.php') ?>