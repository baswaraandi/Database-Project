<?php

$id = $_GET['i'];
echo $id;

$con = mysqli_connect("localhost","root","","kurma");
mysqli_query($con,"delete from stock where Id_Stock='$id'");

header("location:stock.php");

?>