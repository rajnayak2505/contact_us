<?php

include('dbconnect.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$city = $_REQUEST['city'];
$msg = $_REQUEST['message'];


//Inserting data to table

$query = mysqli_query($db_connect, "INSERT INTO user(name, email, phone, city, message) VALUES('$name','$email','$phone','$city','$msg')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

header('location:index.php?note=success');

?>
