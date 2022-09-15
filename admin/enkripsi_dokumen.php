<?php include ('template/top.php') ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Enkripsi Dokumen</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
  </div>
    <a href="tambah_enkrip.php" class="w3-button w3-orange" style="margin: 15px">+ Tambah</a>
    <table class="w3-table-all">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama File</th>
            <th>Dokumen</th>
            <th><center>Aksi</th>
        </tr>
        <?php 
          $no = 1;
          $qry = mysqli_query($mysqli, "SELECT a.*, b.kategori FROM tb_dokumen a LEFT JOIN ref_kategori_dokumen b ON a.id_kategori = b.id WHERE a.id_user = $ID_USER");
          while ($data = mysqli_fetch_array($qry)) { ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $data['kategori'] ?></td>
              <td><?= $data['nama_file'] ?></td>
              <td><img onclick="JavaScript:window.location.href='download.php?file=<?= $data['dokumen'].'.rda' ?>'" src="https://play-lh.googleusercontent.com/1EjZ4I1xWdQNN44skn8tJLcsynQotyIbmVi9ZX53fMgGNP95G2PQ3EgqeQXzUOXNmTk" width="50" alt=""></td>
              <td><center>
                  <!-- <a href="" class="w3-button w3-deep-orange">Edit</a> -->
                  <a href="controller.php?page=dokumen&action=delete&id=<?= $data['id'] ?>" onclick="onClickDelete()" class="w3-button w3-orange">Hapus</a>
              </td>
            </tr>
        <?php $no++; } ?>
        
    </table>
  
</div>
<?php include ('template/bottom.php') ?>