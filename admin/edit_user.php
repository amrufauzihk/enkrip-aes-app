<?php include ('template/top.php') ?>
<div class="w3-main" style="margin-left:340px;margin-right:40px">
    <?php 
        $ID = $_GET['id'];
        $qry = mysqli_query($mysqli, "SELECT * FROM tb_users WHERE id=$ID");
        $data = mysqli_fetch_array($qry);
    ?>
    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Edit User</b></h1>
        <hr style="width:50px;border:5px solid orange" class="w3-round">
    </div>
    <a href="kelola_user.php" class="w3-button w3-orange" style="margin: 15px">< Kembali</a>
    <form class="w3-container" action="controller.php?page=users&action=update" enctype="multipart/form-data" method="POST">
        <label>Nama Lengkap</label>
        <input name="id" type="hidden" value="<?= $ID ?>">
        <input class="w3-input" name="nama_lengkap" type="text" value="<?= $data['nama_lengkap'] ?>">
        <label>Username</label>
        <input class="w3-input" name="username" type="text" value="<?= $data['username'] ?>">
        <label>Email</label>
        <input class="w3-input" name="email" type="text" value="<?= $data['email'] ?>">
        <label>Password (di isi jika berubah)</label>
        <input class="w3-input" name="password" type="password">
        <label>Status</label>
        <select class="w3-select" name="status">
            <option value="" disabled selected>-- PILIH --</option>
            <option value="1" <?php if($data['status'] == 1){echo"selected";} ?> >ADMIN</option>
            <option value="2" <?php if($data['status'] == 2){echo"selected";} ?> >USER</option>
        </select>
        <input class="w3-button w3-deep-orange w3-container" name="submit" type="submit">
    </form>
  
</div>
<?php include ('template/bottom.php') ?>