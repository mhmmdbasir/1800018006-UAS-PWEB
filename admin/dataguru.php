<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong></i> <center>ADMIN</center></strong></a>
                
        <div id="sideNav" href="">
        <i class="fa fa-bars icon"></i> 
        </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
               
              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="admin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="inputguru.php"><i class="fa fa-edit"></i>Input Data Guru </a>
                    </li>

                    <li>
                        <a class="active-menu" href="dataguru.php"><i class="fa fa-table"></i>Data Guru</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Data Guru
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Data Guru</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
    include "konek.php";
    $data = mysqli_query($konek, "SELECT*FROM guru order by no asc");

?>
<br><br>
<div class="container">
<div class="table table-responsive table-sma">

<table class="table">
  <tr>
    <th class="table-dark">NO</th>
    <th class="table-dark">NUPTK</th>
    <th class="table-dark">NAMA</th>
    <th class="table-dark">TEMPAT TANGGAL LAHIR</th>
    <th class="table-dark">STATUS GURU</th>
    <th class="table-dark">KUALIFIKASI PENDIDIKAN TERAKHIR</th> 
    <th class="table-dark">KELAS YANG DIAMPU</th>
    <th class="table-dark">MASA KERJA TMT MENJADI GURU</th>
    <th class="table-dark">JUMLAH JAM MENGAJAR/MINGGU</th>
    <th class="table-dark">FITUR</th>
    </th>   

    </tr>
    <?php
    foreach ($data as $x) { ?>
        
        <tr>
            <td class="table-light"><?php echo $x['no']; ?></td>
            <td class="table-light"><?php echo $x['nuptk']; ?></td>
            <td class="table-light"><?php echo $x['nama']; ?></td>
            <td class="table-light"><?php echo $x['ttl']; ?></td>
            <td class="table-light"><?php echo $x['statusguru']; ?></td>
            <td class="table-light"><?php echo $x['kpt']; ?></td>
            <td class="table-light"><?php echo $x['kelasdiampu']; ?></td>
            <td class="table-light"><?php echo $x['menjadiguru']; ?></td>
            <td class="table-light"><?php echo $x['jumlahjam']; ?></td>
            <td class="table-light">
                <a href="updateguru.php?no=<?php echo $x['no']; ?>">Update</a>
                <a href="hapus.php?no=<?php echo $x['no']; ?> ">Hapus</a>
            </td>
        </tr>

    <?php } ?>
</table>

                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
          
                      <!-- End  Basic Table  -->
                </div>
            </div>
                <!-- /. ROW  -->
           
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
