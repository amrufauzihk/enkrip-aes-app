<?php include ('template/top.php') ?>
<header class="w3-container w3-orange w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">REGISTER</h1>
  <p class="w3-xlarge"></p>
  <form action="proses_register.php" method="POST">
  <div class="" style="display: flex; align-items: center; flex-direction: column;">
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="nama_lengkap" type="text" placeholder="Masukkan Nama Lengkap">
          </div>
      </div>
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card "></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="username" type="text" placeholder="Masukkan Username">
          </div>
      </div>
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="email" type="text" placeholder="Masukkan email">
          </div>
      </div>
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="password" type="password" placeholder="Masukkan Password">
          </div>
      </div>
  </div>
  <button type="submit" class="w3-button w3-deep-orange w3-padding-large w3-large w3-margin-top"><i class="w3-large fa fa-file"></i> Register</button>
  </form>
</header>
<?php include ('template/bottom.php') ?>