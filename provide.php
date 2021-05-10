<body bgcolor= #b8977e>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Stock" value="" placeholder="Enter Id Stock Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Supplier" value="" placeholder="Enter Id Supplier Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Tgl_Ambil" value="" placeholder="Enter Tanggal Ambil Here (YY-MM-DD)"
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
    $id_st = $_POST ['Id_Stock'];
    $id_sup = $_POST ['Id_Supplier'];
    $ta = $_POST ['Tgl_Ambil'];
    mysqli_query($con,"insert into stock values('$id_st','$id_sup','$ta')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from provide");
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
        <th>Id_Stock</th>
        <th>Id_Supplier</th>
        <th>Tgl_Ambil</th>
    </tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
    <tr>
        <td><?php echo $r['Id_Stock']; ?></td>
        <td><?php echo $r['Id_Supplier']; ?></td>
        <td><?php echo $r['Tgl_Ambil']; ?></td>
    </tr>
<?php
}
?>
</table>
