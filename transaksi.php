<body bgcolor= #b8977e>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Transaksi" value="" placeholder="Enter Id Transaksi Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Store" value="" placeholder="Enter Id Store Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Nama_Buyer" value="" placeholder="Enter Nama Buyer Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Tgl_Transaksi" value="" placeholder="Enter Tanggal Transaksi (YY-MM-DD) Here"
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
    $id_t = $_POST ['Id_Transaksi'];
    $id_s = $_POST ['Id_Store'];
    $nb = $_POST ['Nama_Buyer'];
    $tt = $_POST ['Tgl_Transaksi'];
    mysqli_query($con,"insert into stock values('$id_t','$id_s','$nb','$tt')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from transaksi");
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
        <th>Id_Transaksi</th>
        <th>Id_Store</th>
        <th>Nama_Buyer</th>
        <th>Tgl_Transaksi</th>
    </tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
    <tr>
        <td><?php echo $r['Id_Transaksi']; ?></td>
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Nama_Buyer']; ?></td>
        <td><?php echo $r['Tgl_Transaksi']; ?></td>
    </tr>
<?php
}
?>
</table>