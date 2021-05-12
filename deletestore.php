<?php

$idst = $_GET['i'];
echo $idst;

$con = mysqli_connect("localhost","root","","kurma");
mysqli_query($con,"delete from store where Id_Store='$idst'");

header("location:store.php");

?>