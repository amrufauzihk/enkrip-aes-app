<?php include ('template/top.php') ?>
<header class="w3-container w3-orange w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">UPLOAD DOKUMEN RECOVERY</h1>
  <p class="w3-xlarge"></p>
  <div class="" style="display: flex; align-items: center; flex-direction: column;">
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-file"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="file_name" type="file" placeholder="Masukkan File">
          </div>
      </div>
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="kata_kunci" type="password" placeholder="Masukkan Kata Kunci">
          </div>
      </div>
  </div>
  <button class="w3-button w3-deep-orange w3-padding-large w3-large w3-margin-top"><i class="w3-large fa fa-refresh"></i> Recovery File</button>
</header>
<?php include ('template/bottom.php') ?>