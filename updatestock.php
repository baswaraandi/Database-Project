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
          <input type="text" name="Jenis_Kurma" value="" placeholder="Enter Jenis Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Qualitas_Kurma" value="" placeholder="Enter Qualitas Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Asal_Negara" value="" placeholder="Enter Asal Negara Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Ketersediaan_Kg" value="" placeholder="Enter Ketersediaan(KG) Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="submit" name="up" value="Change Now"
          style="padding: 5px; width : 30%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $i  = $_POST ['Id_Stock'];
    $jk = $_POST ['Jenis_Kurma'];
    $qk = $_POST ['Qualitas_Kurma'];
    $an = $_POST ['Asal_Negara'];
    $kk = $_POST ['Ketersediaan_Kg'];
    mysqli_query($con,"update stock set Jenis_Kurma = '$jk', Qualitas_Kurma = '$qk', Asal_Negara = '$an', Ketersediaan_Kg = '$kk' where Id_Stock ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Di Update.....<div>";
    header("location:stock.php");
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from stock");
?>

<table class = content-table>
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
            <td><a class="text-remove" href = "delete.php?i=<?php echo $r['Id_Stock']; ?>">Remove</a></td>
            <td><a class="text-update" href = "update.php?i=<?php echo $r['Id_Stock']; ?>">Update</a></td>
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