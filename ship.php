<body bgcolor= white>
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
          <input type="text" name="Id_Supplier" value="" placeholder="Enter Id Supplier Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Id_Store" value="" placeholder="Enter Id Store Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Tgl_Kirim" value="" placeholder="Enter Tanggal Kirim Here (YY-MM-DD)"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Tgl_Sampai" value="" placeholder="Enter Tanggal Sampai Here (YY-MM-DD)"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <input type="text" name="Jasa_Kirim" value="" placeholder="Enter Jasa Kirim  Here"
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
    $ids = $_POST ['Id_Supplier'];
    $idst = $_POST ['Id_Store'];
    $tk = $_POST ['Tgl_Kirim'];
    $ts = $_POST ['Tgl_Sampai'];
    $jk = $_POST ['Jasa_Kirim'];
    mysqli_query($con,"insert into ship values('$ids','$idst','$tk','$ts','$jk')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from ship");
?>

<table class = content-table>
<thead>
    <tr>
        <th>Id_Supplier</th>
        <th>Id_Store</th>
        <th>Tgl_Kirim</th>
        <th>Tgl_Sampai</th>
        <th>Jasa_Kirim</th>
    </tr>
</thead>
<?php
while($r = mysqli_fetch_array($s))
{
?>
<tbody>
    <tr>
        <td><?php echo $r['Id_Supplier']; ?></td>
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Tgl_Kirim']; ?></td>
        <td><?php echo $r['Tgl_Sampai']; ?></td>
        <td><?php echo $r['Jasa_Kirim']; ?></td>
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