<?php

	include'konek.php';

	$no = $_POST['no'];
	$nuptk = $_POST['nuptk'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$statusguru = $_POST['statusguru'];
	$kpt = $_POST['kpt'];
	$kelasdiampu = $_POST['kelasdiampu'];
	$menjadiguru = $_POST['menjadiguru'];
	$jumlahjam = $_POST['jumlahjam'];

	$query = mysqli_query($konek,
		"INSERT INTO guru (no,nuptk,nama,ttl,statusguru,kpt,kelasdiampu,menjadiguru,jumlahjam)
		VALUES ('$no','$nuptk','$nama','$ttl','$statusguru','$kpt','$kelasdiampu','$menjadiguru','$jumlahjam') ");

	//cek apakah udah diinput atau belum
	echo $query;
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header('location:dataguru.php');

?>