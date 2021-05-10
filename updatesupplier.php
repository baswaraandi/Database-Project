<body bgcolor= white>
<?php $i = $_GET['i'];?>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Supplier" value="<?php echo $i; ?>"> 
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
          <input type="submit" name="up" value="Change Data"
          style="padding: 5px; width : 50%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","admin","kurma");
    $i = $_POST ['Id_Supplier'];
    $ns = $_POST ['Nama_Supplier'];
    $tm = $_POST ['Tgl_Masuk'];
    mysqli_query($con,"update supplier set Nama_Supplier = '$ns', Tgl_Masuk = '$tm' where Id_Supplier ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Di Update.....<div>";
    header("location:supplier.php");
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from supplier");
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
<table class = content-table>
    <thead>
        <tr>
            <th>Id_Supplier</th>
            <th>Nama_Supplier</th>
            <th>Tgl_Masuk</th>
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
            <td><?php echo $r['Id_Supplier']; ?></td>
            <td><?php echo $r['Nama_Supplier']; ?></td>
            <td><?php echo $r['Tgl_Masuk']; ?></td>
            <td><a href = "deletesupplier.php?i=<?php echo $r['Id_Stock']; ?>">Remove</a></td>
            <td><a href = "updatesupplier.php?i=<?php echo $r['Id_Stock']; ?>">Update</a></td>
        </tr>
    </tbody>
<?php
}
?>
</table>