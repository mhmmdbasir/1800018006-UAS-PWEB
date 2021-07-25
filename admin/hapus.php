<?php
include "konek.php";
// menyimpan data id kedalam variabel
$no  = $_GET['no'];
// query SQL untuk insert data
$query="DELETE from guru where no='$no'";
echo $query;
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header('location:dataguru.php');
?>