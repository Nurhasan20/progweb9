<?php
include "koneksi.inc.php";
$username=$_POST['username'];
$pass=$_POST['pass'];

$login = mysqli_query("select * from login where username='$username' and password='$pass'");
echo "<table witdh='50%' cellpdding='2' cellspacing='0' border='1'>
<tr>
<th>Nama</th>
<th>Email</th>
<th>isi</th>
</tr>";
mysqli_close();
header("location: cetak.php")
?>
