<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kurma";
    $con = mysqli_connect("localhost","root","","kurma");
    
?>

<link rel="stylesheet" href="admin-style.css">
<nav>
    <img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded">
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
    <h1 class="Admin-mode">Admin Mode</h1>
</nav>
<section class="Column-paragraph">
    <img class="Index-pic" src="assets/stock.png" alt="stock">
    <center><a class="Index-title" href = "stock.php"> View stock</a> </center>
    <img class="Index-pic" src="assets/provide.png" alt="provide">
    <center><a class="Index-title" href = "provide.php"> View provide</a> </center>
    <img class="Index-pic" src="assets/supplier.png" alt="supplier">
    <center><a class="Index-title" href = "supplier.php"> View supplier</a> </center>
</section>
<section class="Column-paragraph">
    <img class="Index-pic" src="assets/ship.jpg" alt="ship">
    <center><a class="Index-title" href = "ship.php"> View ship</a> </center>
    <img class="Index-pic" src="assets/store.jpg" alt="store">
    <center><a class="Index-title" href = "store.php"> View store</a> </center>
    <img class="Index-pic" src="assets/transaksi.jpg" alt="transaksi">
    <center><a class="Index-title" href = "transaksi.php"> View transaksi</a> </center>
</section>