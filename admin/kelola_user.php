<?php include ('template/top.php') ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Kelola User</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
  </div>
  <a href="tambah_user.php" class="w3-button w3-orange" style="margin: 15px">+ Tambah</a>
    <table class="w3-table-all">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
        <?php 
            $no = 1;
            $qry = mysqli_query($mysqli, "SELECT * FROM tb_users");
            while($data = mysqli_fetch_array($qry)){ ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data['nama_lengkap']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['username']; ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $data['id']; ?>" class="w3-button w3-deep-orange">Edit</a>
                        <a href="controller.php?page=users&action=delete" class="w3-button w3-orange">Hapus</a>
                    </td>
                </tr>
        <?php $no++; } ?>
    </table>
  
</div>

<?php include ('template/bottom.php') ?>