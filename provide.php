<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from provide");
?>
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
