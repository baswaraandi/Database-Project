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
          <input type="text" name="Nama_Supplier" value="" placeholder="Enter Nama Supplier Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Tgl_Masuk" value="" placeholder="Enter Tanggal Masuk Here (YY-MM-DD)"
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
    $id = $_POST ['Id_Supplier'];
    $ns = $_POST ['Nama_Supplier'];
    $tm = $_POST ['Tgl_Masuk'];
    mysqli_query($con,"insert into stock values('$id','$ns','$tm')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from supplier");
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
        <th>Nama_Supplier</th>
        <th>Tgl_Masuk</th>
    </tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
    <tr>
        <td><?php echo $r['Id_Supplier']; ?></td>
        <td><?php echo $r['Nama_Supplier']; ?></td>
        <td><?php echo $r['Tgl_Masuk']; ?></td>
    </tr>
<?php
}
?>
</table>