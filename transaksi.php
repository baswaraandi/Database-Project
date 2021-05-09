<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from transaksi");
?>
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