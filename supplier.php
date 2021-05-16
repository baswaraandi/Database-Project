<body bgcolor= white>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <a href="index.php"><img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded"></a>
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
</nav>
<h1 class="Title-menu">TABLE SUPPLIER</h1>

<?php
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $ids = $_POST ['Id_Supplier'];
    $ns = $_POST ['Nama_Supplier'];
    $tm = $_POST ['Tgl_Masuk'];
    mysqli_query($con,"insert into supplier values('$ids','$ns','$tm')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from supplier");
?>

<table class = content-table>
    <thead>
        <tr>
            <th>Id_Supplier</th>
            <th>Nama_Supplier</th>
            <th>Tgl_Masuk</th>
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
            <td><?php echo $r['Id_Supplier']; ?></td>
            <td><?php echo $r['Nama_Supplier']; ?></td>
            <td><?php echo $r['Tgl_Masuk']; ?></td>
            <td><a class="text-remove" href = "deletesupplier.php?i=<?php echo $r['Id_Supplier']; ?>">Remove</a></td>
            <td><a class="text-update" href = "updatesupplier.php?i=<?php echo $r['Id_Supplier']; ?>">Update</a></td>
        </tr>
    </tbody>
<?php
}
?>
</table>
<section>
    <a class="Menu-back" href="index.php">BACK</a>
    <a class="Menu-add" href="editsupplier.php">ADD</a>
</section>