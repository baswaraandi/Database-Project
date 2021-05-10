<?php

$id = $_GET['i'];
echo $id;

$con = mysqli_connect("localhost","root","admin","kurma");
mysqli_query($con,"delete from supplier where Id_Supplier='$id'");

header("location:supplier.php");

?>