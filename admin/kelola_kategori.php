<?php include ('template/top.php') ?>
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Kelola Kategori</b></h1>
        <hr style="width:50px;border:5px solid orange" class="w3-round">
    </div>
    <a href="tambah_kategori.php" class="w3-button w3-orange" style="margin: 15px">+ Tambah</a>
    <table class="w3-table-all">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php 
            $no = 1;
            $qry = mysqli_query($mysqli, "SELECT * FROM ref_kategori_dokumen WHERE id_user = $ID_USER");
            while ($data = mysqli_fetch_array($qry)) { ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data['kategori'] ?></td>
                    <td>
                        <a href="edit_kategori.php?id=<?= $data['id'] ?>" class="w3-button w3-deep-orange">Edit</a>
                        <a href="controller.php?page=kategori&action=delete&id=<?= $data['id'] ?>" onclick="onClickDelete()" class="w3-button w3-orange">Hapus</a>
                    </td>
                </tr>
        <?php } ?>
        
    </table>
  
</div>
<?php include ('template/bottom.php') ?>