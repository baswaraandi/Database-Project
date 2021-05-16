<body bgcolor= white>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <a href="index.php"><img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded"></a>
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
</nav>
<h1 class="Title-menu">TABLE PROVIDE</h1>
<?php
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $id = $_POST ['Id_Stock'];
    $ids = $_POST ['Id_Supplier'];
    $ta = $_POST ['Tgl_Ambil'];
    mysqli_query($con,"insert into provide values('$id','$ids','$ta')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from provide");
?>

<table class = content-table>
<thead>
    <tr>
        <th>Id_Stock</th>
        <th>Id_Supplier</th>
        <th>Tgl_Ambil</th>
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
        <td><?php echo $r['Id_Supplier']; ?></td>
        <td><?php echo $r['Tgl_Ambil']; ?></td>
        <td><a class="text-remove" href = "deleteprov.php?i=<?php echo $r['Id_Stock']; ?>">Remove</a></td>
        <td><a class="text-update" href = "updateprov.php?i=<?php echo $r['Id_Stock']; ?>">Update</a></td>
    </tr>
</tbody>
<?php
}
?>
</table>
<section>
    <a class="Menu-back" href="index.php">BACK</a>
    <a class="Menu-add" href="editprov.php">ADD</a>
</section>