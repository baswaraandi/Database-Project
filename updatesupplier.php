<body bgcolor= white>
<?php $i = $_GET['i'];?>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded">
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
    <h1 class="Admin-mode">Admin Mode</h1>
</nav>
<div class="Form-title-style">
    <h3 class="Form-title">Insert New Record Here </h3>
</div>
<form action="" method="Post">
    <fieldset>
    <div class="Form-content-style">
          <input type="text" name="Id_Supplier" value="<?php echo $i; ?>"> 
      </div>
      <div class="Form-content-style">
          <input type="text" name="Nama_Supplier" value="" placeholder="Enter Nama Supplier Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Tgl_Masuk" value="" placeholder="Enter Tanggal Masuk Here (YY-MM-DD)"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="submit" name="up" value="Change Data"
          style="padding: 5px; width : 30%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $i = $_POST ['Id_Supplier'];
    $ns = $_POST ['Nama_Supplier'];
    $tm = $_POST ['Tgl_Masuk'];
    mysqli_query($con,"update supplier set Nama_Supplier = '$ns', Tgl_Masuk = '$tm' where Id_Supplier ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Di Update.....<div>";
    header("location:supplier.php");
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
            <td><a class="text-remove" href = "deletesupplier.php?i=<?php echo $r['Id_Stock']; ?>">Remove</a></td>
            <td><a class="text-update" href = "updatesupplier.php?i=<?php echo $r['Id_Stock']; ?>">Update</a></td>
        </tr>
    </tbody>
<?php
}
?>
</table>
<footer>
    <ul>
        <li><a href="index.php">BACK</a></li>
    </ul>
</footer>