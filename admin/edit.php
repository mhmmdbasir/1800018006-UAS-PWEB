<?php
include "konek.php";
// menyimpan data kedalam variabel
$no = $_POST['no'];
$nuptk = $_POST['nuptk'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$statusguru = $_POST['statusguru'];
$kpt = $_POST['kpt'];
$kelasdiampu = $_POST['kelasdiampu'];
$menjadiguru = $_POST['menjadiguru'];
$jumlahjam = $_POST['jumlahjam'];


echo $no;
// query SQL untuk insert data
$query="UPDATE guru SET no='$no', nuptk='$nuptk',nama='$nama',ttl='$ttl',statusguru='$statusguru',kpt='$kpt',kelasdiampu='$kelasdiampu',menjadiguru='$menjadiguru',jumlahjam='$jumlahjam' where no='$no'";
mysqli_query($konek, $query);
echo $query;
// mengalihkan ke halaman index.php
header("location:dataguru.php");
?>