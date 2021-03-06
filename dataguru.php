<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>TK TUNAS RIMBA</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/stylee.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="kontak.html" class="about_taitall">tk tunas rimba</a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Beranda</a>
                     </li>
                     <li  class="dropdown">
                       <a class="nav-link" data-toggle="dropdown" href="#"><font color="white">Profil</font>
                       <span class="caret"></span></a>
                       <ul class="dropdown-menu"> 
                         <li><a href="identitas.html">Identitas</a></li>
                         <li><a href="sejarah.html">Sejarah</a></li>
                         <li><a href="visimisi.html">Visi & Misi</a></li>
                       </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="dataguru.php">Data Guru</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="kontak.html">Kontak</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="admin/auth.php">Admin</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- contact section start -->
      <?php
          include "konek.php";
          $data = mysqli_query($konek, "SELECT*FROM guru order by no asc");

      ?>
            <div class="table table-responsive">

      <table class="table table-bordered table-striped">
        <tr>
          <th>NO</th>
          <th>NUPTK</th>
          <th>NAMA</th>
          <th>TEMPAT TANGGAL LAHIR</th>
          <th>STATUS GURU</th>
          <th>KUALIFIKASI PENDIDIKAN TERAKHIR</th> 
          <th>KELAS YANG DIAMPU</th>
          <th>MASA KERJA TMT MENJADI GURU</th>
          <th>JUMLAH JAM MENGAJAR/MINGGU</th>
          </tr>
          <?php
          foreach ($data as $x) { ?>
              
              <tr>
                  <td><?php echo $x['no']; ?></td>
                  <td><?php echo $x['nuptk']; ?></td>
                  <td><?php echo $x['nama']; ?></td>
                  <td><?php echo $x['ttl']; ?></td>
                  <td><?php echo $x['statusguru']; ?></td>
                  <td><?php echo $x['kpt']; ?></td>
                  <td><?php echo $x['kelasdiampu']; ?></td>
                  <td><?php echo $x['menjadiguru']; ?></td>
                  <td><?php echo $x['jumlahjam']; ?></td>
              </tr>

          <?php } ?>
      </table>
      </div>
      <!-- contact section end -->
     <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">TK Tunas Rimba</h3>
                  <p class="footer_text">TK Tunas Rimba di dirikan pada tahun 1997 dalam naungan yayasan Tunas rimba PT. Inhutani ll. Setelah Inhutani habis kontraknya di serahkan ke desa dan dalam naungan yayasan tunas rimba</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="beranda.html">Beranda</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="galeri.html">Galeri</a></li>
                        <li><a href="#">Pegawai</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Profil</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="sejarah.html">Sejarah</a></li>
                        <li><a href="identitas.html">Identitas</a></li>
                        <li><a href="visimisi.html">Visi & Misi</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Kontak</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address : Jl. Valgoson Ds. Teluk Kepayang, Rt. 8 Kec. Kusan hulu Kab. Tanah Bumbu</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : 082148699897</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : rimbatunas875@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> TK TUNAS RIMBA</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>     
   </body>
</html> 