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
          <input type="text" name="Id_Stock" value="<?php echo $i; ?>">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Id_Supplier" value="" placeholder="Enter Id Supplier Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Tgl_Ambil" value="" placeholder="Enter Tanggal Ambil Here (YY-MM-DD)"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="submit" name="ins" value="Edit Data"
          style="padding: 5px; width : 30%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $i = $_POST ['Id_Stock'];
    $ids = $_POST ['Id_Supplier'];
    $ta = $_POST ['Tgl_Ambil'];
    mysqli_query($con,"update provide set Id_Supplier = '$ids', Tgl_Ambil = '$ta' where Id_Stock ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
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
<footer>
    <ul>
        <li><a href="index.php">BACK</a></li>
    </ul>
</footer>