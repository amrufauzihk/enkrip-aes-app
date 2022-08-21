<?php include ('template/top.php') ?>
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Detail File</b></h1>
        <hr style="width:50px;border:5px solid orange" class="w3-round">
    </div>
    <a href="dekripsi_dokumen.php" class="w3-button w3-orange" style="margin: 15px">< Kembali</a>
    <table class="w3-table-all">
        <?php 
            $ID = $_GET['id'];
            $qry = mysqli_query($mysqli, "SELECT * FROM tb_dokumen a LEFT JOIN ref_kategori_dokumen b ON a.id_kategori = b.id WHERE a.id = $ID");
            $data = mysqli_fetch_array($qry);
        ?>
        <tr>
            <th>Nama File</th>
            <th>:</th>
            <th><?= $data['nama_file'] ?></th>
        </tr>
        <tr>
            <th>Kategori</th>
            <th>:</th>
            <th><?=$data['kategori'] ?></th>
        </tr>
        <tr>
            <th>Dokumen</th>
            <th>:</th>
            <th><a href="proses/dekripsi_file/<?= $data['dokumen'].'.pdf'; ?>" target="_blank" rel="noopener noreferrer">Lihat Dokumen</a></th>
        </tr>
        
        
    </table>
  
</div>
<?php include ('template/bottom.php') ?>