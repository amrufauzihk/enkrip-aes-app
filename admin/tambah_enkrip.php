<?php include ('template/top.php') ?>
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Tambah Enkripsi</b></h1>
        <hr style="width:50px;border:5px solid orange" class="w3-round">
    </div>
    <a href="enkripsi_dokumen.php" class="w3-button w3-orange" style="margin: 15px">< Kembali</a>
    <form id="form-id" class="w3-container" action="enkripsi_proses.php" enctype="multipart/form-data" method="POST">
        <label>Pilih Kategori</label>
        <input type="hidden" name="id_user" value="<?= $ID_USER ?>">
        <select class="w3-select" name="id_kategori">
            <option value="" disabled selected>-- PILIH --</option>
            <?php 
                $qry = mysqli_query($mysqli, "SELECT * FROM ref_kategori_dokumen WHERE id_user = $ID_USER");
                while ($data = mysqli_fetch_array($qry)) { ?>
                    <option value="<?= $data['id'] ?>"><?= $data['kategori'] ?></option>
            <?php } ?>
        </select>
        <label>Nama File</label>
        <input class="w3-input" name="nama_file" type="text">
        <label>Pilih File (Harus PDF)</label>
        <input id="input-file" class="w3-input" name="dokumen" type="file" accept="application/pdf">
        <label>Masukkan Password</label>
        <input class="w3-input" name="password" type="password">
        <input class="w3-button w3-deep-orange w3-container" name="submit" type="submit">
    </form>
  
</div>
<?php include ('template/bottom.php') ?>
<script src="../jquery/jquery.min.js"></script>

<script type="text/javascript">
    $(function(){
        $("#input-file").on('change', function(event) {
            var file = event.target.files[0];

            if(!file.type.match('application/pdf*')) {
                alert("only PDF File");
                $("#form-id").get(0).reset();
                return;
            }
        });
    });
</script>