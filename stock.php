<body bgcolor= white>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <a href="index.php"><img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded"></a>
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
</nav>
<h1 class="Title-menu">TABLE STOCK</h1>

<?php
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $id = $_POST ['Id_Stock'];
    $jk = $_POST ['Jenis_Kurma'];
    $qk = $_POST ['Qualitas_Kurma'];
    $an = $_POST ['Asal_Negara'];
    $kk = $_POST ['Ketersediaan_Kg'];
    mysqli_query($con,"insert into stock values('$id','$jk','$qk','$an','$kk')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from stock");
?>

<table class="content-table">
    <thead>
        <tr>
            <th>Id_Stock</th>
            <th>Jenis_Kurma</th>
            <th>Qualitas_Kurma</th>
            <th>Asal_Negara</th>
            <th>Ketersediaan_Kg</th>
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
            <td><?php echo $r['Id_Stock']; ?></td>
            <td><?php echo $r['Jenis_Kurma']; ?></td>
            <td><?php echo $r['Qualitas_Kurma']; ?></td>
            <td><?php echo $r['Asal_Negara']; ?></td>
            <td><?php echo $r['Ketersediaan_Kg']; ?></td>
            <td><a class="text-remove" href = "deletestock.php?i=<?php echo $r['Id_Stock']; ?>">Remove</a></td>
            <td><a class="text-update" href = "updatestock.php?i=<?php echo $r['Id_Stock']; ?>">Update</a></td>
        </tr>
    </tbody>
<?php
}
?>
</table>
<section>
    <a class="Menu-back" href="index.php">BACK</a>
    <a class="Menu-add" href="editstock.php">ADD</a>
</section>


