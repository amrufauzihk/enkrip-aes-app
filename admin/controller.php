<?php
    
    include 'config/connect-db.php';
    include 'config/base-url.php';
    include 'config/auth.php';
 
	$page    = $_GET['page'];
	$action  = $_GET['action'];

	/* KATEGORI */
	if($page == "kategori" && $action == "insert")
	{

		 $id_user = $_POST['id_user'];
		 $kategori = $_POST['kategori'];

		$result = mysqli_query($mysqli, "INSERT INTO ref_kategori_dokumen SET
											id_user = '$id_user', 
											kategori = '$kategori'"); 

		  if($result){ 
		      echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/kelola_kategori.php" </script>';
		  }else{
		      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		  }

	}elseif($page == "kategori" && $action == "update")
	{

		  $ID = $_POST['id'];
		  $id_user = $_POST['id_user'];
		  $kategori = $_POST['kategori'];
 
		 $result = mysqli_query($mysqli, "UPDATE ref_kategori_dokumen SET
											 id_user = '$id_user', 
											 kategori = '$kategori' WHERE id = $ID"); 
 
		   if($result){ 
			   echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/kelola_kategori.php" </script>';
		   }else{
			   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		   }
	
	}elseif($page == "kategori" && $action == "delete")
	{

		$ID = $_GET['id'];

		$result = mysqli_query($mysqli, "DELETE FROM ref_kategori_dokumen WHERE id = $ID") or die(mysqli_error($mysqli));

		if($result){ 
			echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/kelola_kategori.php" </script>';
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		}

	}

	/* USER */
	if($page == "users" && $action == "insert")
	{

		$nama_lengkap = $_POST['nama_lengkap'];
		$email        = $_POST['email'];
		$username     = $_POST['username'];
		$pass         = md5($_POST['password']);
		$status         = $_POST['status'];

		$result = mysqli_query($mysqli, "INSERT INTO tb_users SET 
										nama_lengkap = '$nama_lengkap',
										email = '$email',
										username = '$username',
										password = '$pass',
										status = $status"); 

		  if($result){ 
		      echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/kelola_user.php" </script>';
		  }else{
		      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		  }

	}elseif($page == "users" && $action == "update")
	{

		  $ID = $_POST['id'];
		  $nama_lengkap = $_POST['nama_lengkap'];
		  $email        = $_POST['email'];
		  $username     = $_POST['username'];
		  $password     = $_POST['password'];
		  $status       = $_POST['status'];

		  if ($password == '') {
			$result = mysqli_query($mysqli, "UPDATE tb_users SET 
										  nama_lengkap = '$nama_lengkap',
										  email = '$email',
										  username = '$username',
										  status = $status WHERE id = $ID"); 
		  } else {
			$pass = md5($password);
			$result = mysqli_query($mysqli, "UPDATE tb_users SET 
										  nama_lengkap = '$nama_lengkap',
										  email = '$email',
										  username = '$username',
										  password = '$pass',
										  status = $status WHERE id = $ID"); 
		  }
  
			if($result){ 
				echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/kelola_user.php" </script>';
			}else{
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			}
	}elseif($page == "users" && $action == "delete")
	{

		$ID = $_GET['id'];

		$result = mysqli_query($mysqli, "DELETE FROM tb_users WHERE id = $ID") or die(mysqli_error($mysqli));

		if($result){ 
			echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/kelola_user.php" </script>';
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		}

	}

	
?>