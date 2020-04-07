<?php
include "koneksi.inc.php";
$nama=$_POST['nama'];
$email=$_POST['email'];
$isi=$POST['isi'];

$sql="INSERT INTO bubku_tamu (nama,email,isi) VALUES ('$nama','$email','$isi')";
mysqli_query($koneksi,$sql) or die("koneksi gagal");
mysqli_close();
header("location: form.html")
?>
