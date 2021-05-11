<body bgcolor= white>
<?php $i = $_GET['i'];?>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Store"  value="<?php echo $i; ?>">
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
          <input type="text" name="Jumlah_Kg" value="" placeholder="Enter Jumlah (Kg) Kurma Here"
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
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","admin","kurma");
    $i= $_POST ['Id_Store'];
    $jk = $_POST ['Jenis_Kurma'];
    $qk = $_POST ['Qualitas_Kurma'];
    $hg = $_POST ['Harga_Rp_perKg'];
    $jkg = $_POST ['Jumlah_Kg'];
    $np = $_POST ['Nama_Pegawai'];
    mysqli_query($con,"update stock set Jenis_Kurma = '$jk', Qualitas_Kurma = '$qk', Harga_Rp_perKg = '$hg', Jumlah_Kg = '$jkg', Nama_Pegawai = '$np' where Id_Store ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from store");
?>
<style>
    .content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
    .content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
    .content-table th,
    .content-table td {
    padding: 12px 15px
}
    .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

    .content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

    .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
    .content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

</style>
<table class= content-table>
<thead>
    <tr>
        <th>Id_Store</th>
        <th>Jenis_Kurma</th>
        <th>Qualitas_Kurma</th>
        <th>Harga_Rp_perKg</th>
        <th>Jumlah_Kg</th>
        <th>Nama_Pegawai</th>
        <th>Remove<th>
        <th>Update<th>
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
        <td><a href = "deletestore.php?i=<?php echo $r['Id_Store']; ?>">Remove</a></td>
        <td><a href = "updatestore.php?i=<?php echo $r['Id_Store']; ?>">Update</a></td>
    </tr>
</tbody>
<?php
}
?>
</table>