<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from ship");
?>
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