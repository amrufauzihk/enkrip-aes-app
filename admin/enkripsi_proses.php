<?php
    include 'config/connect-db.php';
    include 'config/base-url.php';
    include "AES.php";

    $ID_USER 		 = $_POST['id_user'];
    $password1		 = md5($_POST["password"]);
    $password		 = substr($password1, 0, 16);
    $nama_file       = $_POST['nama_file'];
    $id_kategori     = $_POST['id_kategori'];

    $file_tmpname   = $_FILES['dokumen']['tmp_name'];
    //untuk nama file url
    $file           = rand(1000,100000)."-".$_FILES['dokumen']['name'];
    $new_file_name  = strtolower($file);
    $final_file     = str_replace(' ','-',$new_file_name);
    //untuk nama file
    $filename       = rand(1000,100000)."-".pathinfo($_FILES['dokumen']['name'], PATHINFO_FILENAME);
    $new_filename  = strtolower($filename);
    $finalfile     = str_replace(' ','-',$new_filename);
    $size           = filesize($file_tmpname);
    $size2          = (filesize($file_tmpname))/1024;
    $info           = pathinfo($final_file );
    $file_source		= fopen($file_tmpname, 'rb');
    $ext            = $info["extension"];

    //upload file
    
    if( $ext=="docx" || $ext=="doc" || $ext=="txt" || $ext=="pdf" || $ext=="xls" || $ext=="xlsx" || $ext=="ppt" || $ext=="pptx"){
    }else{
        echo("<script language='javascript'>
        window.location.href='encrypt.php';
        window.alert('Maaf, file yang bisa dienkrip hanya word, excel, text, ppt ataupun pdf.');
        </script>");
        exit();
    }

    if($size2>3084){
        echo("<script language='javascript'>
        window.location.href='home.php?encrypt';
        window.alert('Maaf, file tidak bisa lebih besar dari 3MB.');
        </script>");
        exit();
    }

    $sql1   = "INSERT INTO tb_dokumen SET
                                    id_user = '$ID_USER', 
                                    id_kategori = '$id_kategori',
                                    nama_file = '$nama_file',
                                    dokumen = '$finalfile',
                                    password= '$password'";
    $query1  = mysqli_query($mysqli, $sql1) or die(mysqli_error());

    // $sql2   = "select * from file where file_url =''";
    // $query2  = mysqli_query($connect, $sql2) or die(mysqli_error());

    
    // $sql3   = "UPDATE tb_dokumen SET file_url ='$file_url' WHERE file_url=''";
    // $query3  = mysqli_query($connect, $sql3) or die(mysqli_error());
    
    $url   = $finalfile.".rda";
    $file_url = "proses/enrkipsi_file/$url";
    $file_output		= fopen($file_url, 'wb');

    $mod    = $size%16;
    if($mod==0){
        $banyak = $size / 16;
    }else{
        $banyak = ($size - $mod) / 16;
        $banyak = $banyak+1;
    }

    if(is_uploaded_file($file_tmpname)){
        ini_set('max_execution_time', -1);
        ini_set('memory_limit', -1);
        $aes = new AES($password);

        for($bawah=0;$bawah<$banyak;$bawah++){
            $data    = fread($file_source, 16);
            $cipher  = $aes->encrypt($data);
            fwrite($file_output, $cipher);
        }
        fclose($file_source);
        fclose($file_output);

        $dirUpload = "proses/dekripsi_file/";
        move_uploaded_file($file_tmpname, $dirUpload.$finalfile.".pdf");
        echo("<script language='javascript'>
        window.location.href='enkripsi_dokumen.php';
        window.alert('Enkripsi Berhasil..');
        </script>");
    }else{
        echo("<script language='javascript'>
        window.location.href='enkripsi_dokumen.php';
        window.alert('Encrypt file mengalami masalah..');
        </script>");
        
        // echo var_dump($_FILES['dokumen']['tmp_name']);  
    }