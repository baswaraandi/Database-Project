<body bgcolor= white>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <a href="index.php"><img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded"></a>
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
</nav>
<h1 class="Title-menu">TABLE TRANSAKSI</h1>

<?php
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $idt = $_POST ['Id_Transaksi'];
    $idst = $_POST ['Id_Store'];
    $nb = $_POST ['Nama_Buyer'];
    $tt = $_POST ['Tgl_Transaksi'];
    mysqli_query($con,"insert into transaksi values('$idt','$idst','$nb','$tt')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from transaksi");
?>

<table class = content-table>
<thead>
    <tr>
        <th>Id_Transaksi</th>
        <th>Id_Store</th>
        <th>Nama_Buyer</th>
        <th>Tgl_Transaksi</th>
        <th>Remove</th>
        <th>Update</th>
    </tr>
</thead>
<?php
while($r = mysqli_fetch_array($s))
{
?>
<tbody>
    <tr>
        <td><?php echo $r['Id_Transaksi']; ?></td>
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Nama_Buyer']; ?></td>
        <td><?php echo $r['Tgl_Transaksi']; ?></td>
        <td><a class="text-remove" href = "deletetransaksi.php?i=<?php echo $r['Id_Transaksi']; ?>">Remove</a></td>
        <td><a class="text-update" href = "updatetransaksi.php?i=<?php echo $r['Id_Transaksi']; ?>">Update</a></td>
    </tr>
</tbody>
<?php
}
?>
</table>
<section>
    <a class="Menu-back" href="index.php">BACK</a>
    <a class="Menu-add" href="edittransaksi.php">ADD</a>
</section>
