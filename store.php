<body bgcolor= white>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded">
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
</nav>
<div class="Form-title-style">
    <h3 class="Form-title">Insert New Record Here </h3>
</div>
<form action="" method="Post">
    <fieldset class="Fieldset">
    <div class="Form-content-style">
          <input type="text" name="Id_Store" value="" placeholder="Enter Id Store Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Jenis_Kurma" value="" placeholder="Enter Jenis Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Qualitas_Kurma" value="" placeholder="Enter Qualitas Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Harga_Rp_perKg" value="" placeholder="Enter Harga per Kg Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Jumlah_Kg" value="" placeholder="Enter Jumlah (Kg) Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Nama_Pegawai" value="" placeholder="Enter Nama Pegawai Kurma Here"
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
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $idst= $_POST ['Id_Store'];
    $jk = $_POST ['Jenis_Kurma'];
    $qk = $_POST ['Qualitas_Kurma'];
    $hg = $_POST ['Harga_Rp_perKg'];
    $jkg = $_POST ['Jumlah_Kg'];
    $np = $_POST ['Nama_Pegawai'];
    mysqli_query($con,"insert into store values('$idst','$jk','$qk','$hg','$jkg','$np')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from store");
?>

<table class= content-table>
<thead>
    <tr>
        <th>Id_Store</th>
        <th>Jenis_Kurma</th>
        <th>Qualitas_Kurma</th>
        <th>Harga_Rp_perKg</th>
        <th>Jumlah_Kg</th>
        <th>Nama_Pegawai</th>
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
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Jenis_Kurma']; ?></td>
        <td><?php echo $r['Qualitas_Kurma']; ?></td>
        <td><?php echo $r['Harga_Rp_perKg']; ?></td>
        <td><?php echo $r['Jumlah_Kg']; ?></td>
        <td><?php echo $r['Nama_Pegawai']; ?></td>
        <td><a class="text-remove" href = "deletestore.php?i=<?php echo $r['Id_Store']; ?>">Remove</a></td>
        <td><a class="text-update" href = "updatestore.php?i=<?php echo $r['Id_Store']; ?>">Update</a></td>
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