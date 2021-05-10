<body bgcolor= white>
<?php $i = $_GET['i'];?>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Stock" value="<?php echo $i; ?>"> 
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
          <input type="text" name="Asal_Negara" value="" placeholder="Enter Asal Negara Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Ketersediaan_Kg" value="" placeholder="Enter Ketersediaan(KG) Kurma Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="submit" name="up" value="Change Now"
          style="padding: 5px; width : 50%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","admin","kurma");
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
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from stock");
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
            <th>Id_Stock</th>
            <th>Jenis_Kurma</th>
            <th>Qualitas_Kurma</th>
            <th>Asal_Negara</th>
            <th>Ketersediaan_Kg</th>
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
            <td><?php echo $r['Id_Stock']; ?></td>
            <td><?php echo $r['Jenis_Kurma']; ?></td>
            <td><?php echo $r['Qualitas_Kurma']; ?></td>
            <td><?php echo $r['Asal_Negara']; ?></td>
            <td><?php echo $r['Ketersediaan_Kg']; ?></td>
            <td><a href = "delete.php?i=<?php echo $r['Id_Stock']; ?>">Remove</a></td>
            <td><a href = "update.php?i=<?php echo $r['Id_Stock']; ?>">Update</a></td>
        </tr>
    </tbody>
<?php
}
?>
</table>
