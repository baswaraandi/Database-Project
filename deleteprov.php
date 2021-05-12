<?php

$id = $_GET['i'];
echo $id;

$con = mysqli_connect("localhost","root","","kurma");
mysqli_query($con,"delete from provide where Id_Stock='$id'");

header("location:provide.php");

?>