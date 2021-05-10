<body bgcolor= #b8977e>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Supplier" value="" placeholder="Enter Id Supplier Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Store" value="" placeholder="Enter Id Store Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Tgl_Kirim" value="" placeholder="Enter Tanggal Kirim Here (YY-MM-DD)"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Tgl_Sampai" value="" placeholder="Enter Tanggal Sampai Here (YY-MM-DD)"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Jasa_Kirim" value="" placeholder="Enter Jasa Kirim  Here"
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
    $id_stock = $_POST ['Id_Supplier'];
    $id_store = $_POST ['Id_Store'];
    $tk = $_POST ['Tgl_Kirim'];
    $ts = $_POST ['Tgl_Sampai'];
    $jk = $_POST ['Jasa_Kirim'];
    mysqli_query($con,"insert into stock values('$id_stock','$id_store','$tk','$ts','$jk')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from ship");
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
        <th>Id_Supplier</th>
        <th>Id_Store</th>
        <th>Tgl_Kirim</th>
        <th>Tgl_Sampai</th>
        <th>Jasa_Kirim</th>
    </tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
    <tr>
        <td><?php echo $r['Id_Supplier']; ?></td>
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Tgl_Kirim']; ?></td>
        <td><?php echo $r['Tgl_Sampai']; ?></td>
        <td><?php echo $r['Jasa_Kirim']; ?></td>
    </tr>
<?php
}
?>
</table>