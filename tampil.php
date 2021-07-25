<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
   body{
    background-image: url(datapegawai.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-repeat: no-repeat;

  margin: 0;
  padding: 0;
   }


  </style>
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/pencarian.js"></script>
</body>
</html>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark danger-navbar">
    <div class="container">
      <a class="navbar-brand" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong><font color="orange">RUMAH MAKAN PADANG</font></strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home1.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah1.php" target="_blank">Login Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Data Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah2.php" target="_blank">Login Menu</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="tampil1.php" target="_blank">Data Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah3.php" target="_blank">Login Pesanan</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="tampil2.php" target="_blank">Data Pesanan</a>
          </li>
        </ul>

        
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <br><br>
<?php
	include "konek.php";
	$data = mysqli_query($konek, "SELECT*FROM karyawan");

?>
<br><br>
<div class="container">
<div class="table table-responsive table-sma">

<table class="table">
  <tr>
    <th class="table-dark">ID KARYAWAN</th>
    <th class="table-dark">NAMA KARYAWAN</th>
    <th class="table-dark">NO HP</th>
    <th class="table-dark">ALAMAT</th>
    <th class="table-dark">JENIS PEKERJAAN</th> 
    <th class="table-dark">FITUR</th>
    </th>   

    </tr>
	<?php
	foreach ($data as $x) { ?>
		
		<tr>
			<td class="table-light"><?php echo $x['id_karyawan']; ?></td>
			<td class="table-light"><?php echo $x['nama']; ?></td>
			<td class="table-light"><?php echo $x['no_hp']; ?></td>
			<td class="table-light"><?php echo $x['alamat']; ?></td>
      <td class="table-light"><?php echo $x['janis_pekerjaan']; ?></td>
			<td class="table-light">
				<a href="update.php?id_karyawan=<?php echo $x['id_karyawan']; ?>">Update</a>
				<a href="hapus.php?id_karyawan=<?php echo $x['id_karyawan']; ?> ">Hapus</a>
			</td>
		</tr>

	<?php } ?>
</table>
</div>
</div>
