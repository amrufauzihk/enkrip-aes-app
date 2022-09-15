<?php
    include 'config/connect-db.php';
    include 'config/base-url.php';
    include "AES.php";

    $ID_USER 		 = $_POST['id_user'];
    $password1		 = md5($_POST["password"]);
    $password		 = substr($password1, 0, 16);
    // $nama_file       = $_POST['nama_file'];
    // $id_kategori     = $_POST['id_kategori'];

    $file_name1   = $_FILES['dokumen']['name'];
    $file_name = explode(".", $file_name1);
    //upload file
    echo $file_name[0]; 
    $sql1   = "SELECT * FROM tb_dokumen WHERE dokumen='$file_name[0]' AND password='$password' AND id_user='$ID_USER'";
    $query1  = mysqli_query($mysqli, $sql1) or die(mysqli_error());

    $result = mysqli_num_rows($query1);
    // echo var_dump($result);
    if ($result > 0) {
        $data = mysqli_fetch_array($query1);
        echo("<script language='javascript'>
        window.location.href='dekripsi_detail.php?id=".$data['id']."';
        window.alert('Dekripsi Berhasil..');
        </script>");
    } else {
        echo("<script language='javascript'>
        window.location.href='dekripsi_dokumen.php';
        window.alert('Dekripsi Tidak Berhasil. Pastikan password dan file upload secara benar.');
        </script>");
    }
    