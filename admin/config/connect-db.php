<?php

  $mysqli = mysqli_connect("db4free.net", "adryan", "Muhammadadryan@9523", "db_aes", 3306); 
  
  if(!$mysqli){
  	die('error: '. mysqli_connect_error());
  }

?>