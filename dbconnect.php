<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'contactus';


$db_connect = mysqli_connect($db_host,$db_username,$db_password,$db_name) or die();

// check fann_get_total_connections

if(mysqli_connect_error())
{
  echo 'failed to connect to MYSQL:'.mysqli_connect_error();
}
else {
//   echo 'connection successful';
}

 ?>
