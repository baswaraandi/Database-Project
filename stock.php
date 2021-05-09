<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from stock");
?>
<table border = 5>
    <tr>
        <th>Id_Stock</th>
        <th>Jenis_Kurma</th>
        <th>Qualitas_Kurma</th>
        <th>Ketersediaan_Kg</th>
        <th>Edit<th>
    </tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
    <tr>
        <td><?php echo $r['Id_Stock']; ?></td>
        <td><?php echo $r['Jenis_Kurma']; ?></td>
        <td><?php echo $r['Qualitas_Kurma']; ?></td>
        <td><?php echo $r['Ketersediaan_Kg']; ?></td>
        <td><a href = "update.php?i=<?php echo $r['id']; ?>">Update</a></td>
    </tr>
<?php
}
?>
</table>
