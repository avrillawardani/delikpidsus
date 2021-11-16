<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DELIK PIDSUS</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/summernote/summernote-bs4.min.css">
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url();?>asset/index3.html" class="brand-link">
          <img src="<?php echo base_url();?>asset/dist/img/kejaksaan.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">DELIK PIDSUS</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <!--  <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/index.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/index3.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v3</p>
                    </a>
                  </li>
                </ul>
              </li> -->
              <li class="nav-item treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-align-left"></i>
                  <p>
                    Register Perkara (RP)
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>index.php/read/RP1" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-1) Register Penerimaan Laporan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>index.php/read/RP2" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-2) Register Perkara Tahapan Penyelidikan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>index.php/read/RP3" class="nav-link">
                      <!--  <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-3) Register Perkara Tahap Penyidikan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>index.php/read/RP4" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-4) Register Permintaan Keterangan/Panggilan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>index.php/read/RP5" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-5) Buku Perkara Jaksa Kegiatan Penyidikan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/fixed-topnav.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-6) Register Pemberitahuan Dimulainya Penyidikan/Dihentikannya penyidikan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/fixed-footer.html" class="nav-link">
                      <!--  <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-7) Register Penerimaan Berkas Perkara Tahap Pertama</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/collapsed-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-8) Register Pemeriksaan Tambahan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/collapsed-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-9) Register Tahap Penuntutan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/collapsed-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-10) Register Perkara Tahap Penuntutan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/collapsed-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-11) Register Upaya Hukum dan Grasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/collapsed-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-12) Register Pelaksanaan Putusan/Pidana Bersyarat dan Gugurnya Kewenangan Mengeksekusi Serta Pelepasan Bersyarat</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/collapsed-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-13) Register Perkara Acara Pemeriksaan Cepat dan Eksekusi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/collapsed-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RP-14) Register/Buku Perkara Jaksa Penuntut Umum</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Register Tahanan (RT)
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>index.php/#" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RT-1) Register Tahanan Tahap Penyidikan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/top-nav-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RT-2) Register Surat Perpanjangan Penahanan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/boxed.html" class="nav-link">
                      <!--  <i class="far fa-circle nav-icon"></i> -->
                      <p>(RT-3) Register Tahanan Perkara Tahap Penuntutan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Register Benda Sitaan/Barang Bukti (RB)
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>index.php/#" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RB-1) Register Benda Sitaan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>asset/layout/top-nav-sidebar.html" class="nav-link">
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                      <p>(RB-2) Register Barang Bukti dan Barang Temuan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Admin
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/daftar_admin" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Daftar Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>asset/layout/top-nav-sidebar.html" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <?php echo $contents; ?>
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.1.0
        </div>
      </footer>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
    $("input[type='radio']").change(function() {
    if ($(this).val() == "other") {
    $("#otherAnswer3").show();
    $("#otherAnswer4").hide();
    } else {
    $("#otherAnswer3").hide();
    $("#otherAnswer4").show();
    }
    });
    });
    </script>
    <script>
    $(document).ready(function() {
    $("input[type='radio']").change(function() {
    if ($(this).val() == "other1") {
    $("#otherAnswer1").show();
    $("#otherLabel1").show();
    $("#otherAnswer1b").show();
    $("#otherLabel1b").show();
    $("#otherAnswer1c").show();
    $("#otherLabel1c").show();
    } else {
    $("#otherAnswer1").hide();
    $("#otherLabel1").hide();
    $("#otherAnswer1b").hide();
    $("#otherLabel1b").hide();
    $("#otherAnswer1c").hide();
    $("#otherLabel1c").hide();
    }
    });
    });
    </script>
    <script>
    $(document).ready(function() {
    $("input[type='radio']").change(function() {
    if ($(this).val() == "other2") {
    $("#otherAnswer1").show();
    $("#otherLabel1").show();
    $("#otherAnswer1b").show();
    $("#otherLabel1b").show();
    $("#otherAnswer1c").show();
    $("#otherLabel1c").show();
    $("#otherAnswer1d").show();
    $("#otherLabel1d").show();
    $("#otherAnswer2").hide();
    $("#otherLabel2").hide();
    $("#otherAnswer2b").hide();
    $("#otherLabel2b").hide();
    $("#otherAnswer2c").hide();
    $("#otherLabel2c").hide();
    } else {
    $("#otherAnswer1").hide();
    $("#otherLabel1").hide();
    $("#otherAnswer1b").hide();
    $("#otherLabel1b").hide();
    $("#otherAnswer1c").hide();
    $("#otherLabel1c").hide();
    $("#otherAnswer1d").hide();
    $("#otherLabel1d").hide();
    $("#otherAnswer2").show();
    $("#otherLabel2").show();
    $("#otherAnswer2b").show();
    $("#otherLabel2b").show();
    $("#otherAnswer2c").show();
    $("#otherLabel2c").show();
    }
    });
    });
    </script>
    <script>
    $(document).ready(function() {
    $("input[type='radio']").change(function() {
    if ($(this).val() == "diteruskan") {
    $("#otherAnswer0").show();
    $("#otherAnswer5").hide();
    } else {
    $("#otherAnswer0").hide();
    $("#otherAnswer5").show();
    }
    });
    });
    </script>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url();?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url();?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url();?>asset/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>asset/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>asset/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>asset/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url();?>asset/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url();?>asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url();?>asset/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url();?>asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>asset/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?php echo base_url();?>asset/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>asset/dist/js/pages/dashboard.js"></script>
  </body>
</html>