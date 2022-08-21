<?php include ('template/top.php') ?>
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Edit Kategori</b></h1>
        <hr style="width:50px;border:5px solid orange" class="w3-round">
    </div>
    <a href="kelola_kategori.php" class="w3-button w3-orange" style="margin: 15px">< Kembali</a>
    <form class="w3-container" action="controller.php?page=kategori&action=update" method="POST">
        <?php 
            $ID = $_GET['id'];
            $qry = mysqli_query($mysqli, "SELECT * FROM ref_kategori_dokumen WHERE id = $ID");
            $data = mysqli_fetch_array($qry);
        ?>
        <label>Kategori</label>
        <input type="hidden" name="id_user" value="<?= $ID_USER ?>">
        <input type="hidden" name="id" value="<?= $ID ?>">
        <input class="w3-input" name="kategori" type="text" value="<?= $data['kategori'] ?>">
        <input class="w3-button w3-deep-orange w3-container" name="submit" type="submit">
    </form>
  
</div>
<?php include ('template/bottom.php') ?>