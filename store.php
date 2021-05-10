<body bgcolor= #b8977e>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Store" value="" placeholder="Enter Id Store Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Jenis_Kurma" value="" placeholder="Enter Jenis Kurma Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Qualitas_Kurma" value="" placeholder="Enter Qualitas Kurma Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Harga_Rp_perKg" value="" placeholder="Enter Harga per Kg Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Jumlah_kg" value="" placeholder="Enter Jumlah (Kg) Kurma Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Nama_Pegawai" value="" placeholder="Enter Nama Pegawai Kurma Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="submit" name="ins" value="Edit Data"
          style="padding: 5px; width : 50%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","admin","kurma");
    $id = $_POST ['Id_Store'];
    $jk = $_POST ['Jenis_Kurma'];
    $qk = $_POST ['Qualitas_Kurma'];
    $har = $_POST ['Harga_Rp_perKg'];
    $jk = $_POST ['Jumlah_Kg'];
    $np = $_POST ['Nama_Pegawai'];
    mysqli_query($con,"insert into stock values('$id','$jk','$qk','$har','$jk','$np')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from store");
?>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<table border = 5>
    <tr>
        <th>Id_Store</th>
        <th>Jenis_Kurma</th>
        <th>Qualitas_Kurma</th>
        <th>Harga_Rp_perKg</th>
        <th>Jumlah_Kg</th>
        <th>Nama_Pegawai</th>
    </tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
    <tr>
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Jenis_Kurma']; ?></td>
        <td><?php echo $r['Qualitas_Kurma']; ?></td>
        <td><?php echo $r['Harga_Rp_perKg']; ?></td>
        <td><?php echo $r['Jumlah_Kg']; ?></td>
        <td><?php echo $r['Nama_Pegawai']; ?></td>
    </tr>
<?php
}
?>
</table>