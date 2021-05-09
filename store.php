<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from store");
?>
<table border = 5>
    <tr>
        <th>Id_Store</th>
        <th>Jenis_Kurma</th>
        <th>Qualitas_Kurma</th>
        <th>Harga_Rp_perKg</th>
        <th>Jumlah_Kg</th>
        <th>Nama_Pegawai</th>
    </tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
    <tr>
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Jenis_Kurma']; ?></td>
        <td><?php echo $r['Qualitas_Kurma']; ?></td>
        <td><?php echo $r['Harga_Rp_perKg']; ?></td>
        <td><?php echo $r['Jumlah_Kg']; ?></td>
        <td><?php echo $r['Nama_Pegawai']; ?></td>
    </tr>
<?php
}
?>
</table>