<?php
include "koneksi.inc.php";
$sql="SELECT * FROM bubku_tamu ORDER BY nama;";
$qry=mysqli_query($koneksi,$sql) or die("Proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>Nama</th>
<th>Email</th>
<th>isi</th>";

$no=1;
while ($hasil=mysqli_fetch_row($qry)) {
	echo "<tr> <td>$no</td>
	<td>.$hasil[1]</td>
	<td>.$hasil[2]</td>
	<td>.$hasil[3]</td>
	</tr>";

	$no++;
}
echo"</table>";
?>
<a href="form.html">kembali</a>