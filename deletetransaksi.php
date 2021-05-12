<?php

$id = $_GET['i'];
echo $id;

$con = mysqli_connect("localhost","root","admin","kurma");
mysqli_query($con,"delete from transaksi where Id_Transaksi='$id'");

header("location:transaksi.php");

?>