<body bgcolor= white>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <a href="index.php"><img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded"></a>
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
</nav>
<div class="Form-title-style">
    <h3 class="Form-title">Insert New Record Here </h3>
</div>
<form action="" method="Post">
    <fieldset class="Fieldset">
    <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Id_Transaksi" value="" placeholder="Enter Id Transaksi Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Id_Store" value="" placeholder="Enter Id Store Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Nama_Buyer" value="" placeholder="Enter Nama Buyer Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="date" name="Tgl_Transaksi" value="" placeholder="Enter Tanggal Transaksi (YY-MM-DD) Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-submit-style">
          <center><input class="Form-submit-style" type="submit" name="ins" value="Add Data"
          style="padding: 5px; width : 30%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $idt = $_POST ['Id_Transaksi'];
    $idst = $_POST ['Id_Store'];
    $nb = $_POST ['Nama_Buyer'];
    $tt = $_POST ['Tgl_Transaksi'];
    mysqli_query($con,"insert into transaksi values('$idt','$idst','$nb','$tt')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from transaksi");
?>

<footer>
    <ul>
        <li><a href="transaksi.php">BACK</a></li>
    </ul>
</footer>
