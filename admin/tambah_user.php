<?php include ('template/top.php') ?>
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Tambah User</b></h1>
        <hr style="width:50px;border:5px solid orange" class="w3-round">
    </div>
    <a href="kelola_user.php" class="w3-button w3-orange" style="margin: 15px">< Kembali</a>
    <form class="w3-container" action="controller.php?page=users&action=insert" enctype="multipart/form-data" method="POST">
        <label>Nama Lengkap</label>
        <input class="w3-input" name="nama_lengkap" type="text">
        <label>Username</label>
        <input class="w3-input" name="username" type="text">
        <label>Email</label>
        <input class="w3-input" name="email" type="text">
        <label>Password</label>
        <input class="w3-input" name="password" type="password">
        <label>Status</label>
        <select class="w3-select" name="status">
            <option value="" disabled selected>-- PILIH --</option>
            <option value="1">ADMIN</option>
            <option value="2">USER</option>
        </select>
        <input class="w3-button w3-deep-orange w3-container" name="submit" type="submit">
    </form>
  
</div>
<?php include ('template/bottom.php') ?>