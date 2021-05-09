<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from supplier");
?>
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