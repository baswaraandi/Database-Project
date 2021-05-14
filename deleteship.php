<?php

$id = $_GET['i'];
echo $id;

$con = mysqli_connect("localhost","root","","kurma");
mysqli_query($con,"delete from ship where Id_Supplier='$id'");

header("location:ship.php");

?>