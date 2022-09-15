<?php

  $mysqli = mysqli_connect("localhost", "root", "", "db_aes", "3306"); 
  
  if(!$mysqli){
    die('error: '. mysqli_connect_error());
  }

?>