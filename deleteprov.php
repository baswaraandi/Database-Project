<?php

$id = $_GET['i'];
echo $id;

$con = mysqli_connect("localhost","root","admin","kurma");
mysqli_query($con,"delete from provide where Id_Stock='$id'");

header("location:provide.php");

?>