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
	
    <link href="assets/css/select2.min.css" rel="stylesheet" >
	<link href="assets/css/checkbox3.min.css" rel="stylesheet" >
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <a  href="admin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a class="active-menu" href="inputguru.php"><i class="fa fa-edit"></i>Input Data Guru </a>
                    </li>

                    <li>
                        <a href="dataguru.php"><i class="fa fa-table"></i>Data Guru</a>
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
                             Update Data Guru
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Update Data Guru</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
                 <?php
    include "konek.php";
    $no =$_GET['no'];
    $data = mysqli_query($konek, "SELECT*FROM guru WHERE no='$no'");
    $data;
?>
 <?php
foreach ($data as $x) { ?>
                       <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                 
<form action="edit.php" method="POST">

          <center><font color="white" face="algerian">
      </font>
      </center>

  <!-- Material form login -->
   <font color="black">
    <form>
  <div class="form-group">
    <label>NO</label>
    <input type="text" value="<?php echo $x['no']; ?>" class="form-control" name="no">
  </div>    
  <div class="form-group">
    <label>NUPTK</label>
    <input type="text" value="<?php echo $x['nuptk']; ?>" class="form-control" name="nuptk">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">NAMA</label>
    <input type="text" value="<?php echo $x['nama']; ?>" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">TEMPAT TANGGAL LAHIR</label>
    <input type="text" value="<?php echo $x['ttl']; ?>" class="form-control" name="ttl">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">STATUS GURU</label>
    <input type="text" value="<?php echo $x['statusguru']; ?>" class="form-control" name="statusguru">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">KUALIFIKASI PENDIDIKAN TERAKHIR</label>
    <input type="text" value="<?php echo $x['kpt']; ?>" class="form-control" name="kpt">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">KELAS YANG DIAMPU</label> 
    <input type="text" value="<?php echo $x['kelasdiampu']; ?>" class="form-control" name="kelasdiampu">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">MASA KERJA TMT MENJADI GURU</label>
    <input type="text" value="<?php echo $x['menjadiguru']; ?>" class="form-control" name="menjadiguru">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">JUMLAH JAM MENGEJAR/MINGGU</label>
    <input type="text" value="<?php echo $x['jumlahjam']; ?>" class="form-control" name="jumlahjam">
  </div>
   <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">SUBMIT</button>
  
</form>
                <?php } ?>                 </div>
                               
                            </div>
                        </div>
                    </div>
               
			
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
	<script src="assets/js/select2.full.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	  $(".selectbox").select2();
	});
	</script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
	
		
   
</body>
</html>
