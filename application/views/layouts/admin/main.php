<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Genpi Banyuwangi</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-fileupload.min.css');?>">
        <!-- <link rel="stylesheet" href="<?php echo site_url('resources/css/main.css');?>"> -->
      
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="Main" title="genpi Banyuwangi" class="logo">
                    <span class="logo-lg"></span>
                </a>
               
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        
          <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    
                                <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                         <img src="<?php echo site_url('resources/upload/user/'.$this->session->userdata('gambar'));?>" class="img-circle" alt="User Image">
                                        <p>

                                            <?php echo $this->session->userdata('nama'); ?>

                                        </p>
                                       
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                       
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                     <ul class="sidebar-menu">
                        <li class="header">
                          <center><a class="navbar-brand" href="#"><marquee ><span>

                      <?php
                            $tanggal = mktime(date('m'), date("d"), date('Y'));

                      // echo "Today is ". date("l") .", ". date("d-m-Y", $tanggal );

                      date_default_timezone_set("Asia/Jakarta");

                      $jam = date ("H:i:s");
                      // echo " " . $jam . " " ." </b> ";

                      $a = date ("H");

                      if (($a>=6) && ($a<=11)) {

                        echo " <b> Selamat Pagi </b>";

                      }else if(($a>=11) && ($a<=15)){

                        echo " Selamat  Siang ";

                      }elseif(($a>15) && ($a<=18)){

                        echo " Selamat Sore ";

                      }else{

                        echo " <b> Selamat Malam </b>";
                      }

                            ?>
                           </span></marquee>
                          </a>
                        </center>

                        </li>
                  <!-- sidebar menu -->
                   
                    <?php if($this->session->userdata('level') == "admin"){ ?>

                        <li>
                            <a href="<?php echo site_url('admin/dashboard');?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/pemesanan/index');?>">
                                <i class="fa fa-desktop"></i> <span>Pemesanan Paket</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/pemesanan_guide/index');?>">
                                <i class="fa fa-desktop"></i> <span>Pemesanan Guide</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/konfirmasi_p/index');?>">
                                <i class="fa fa-desktop"></i> <span>Konfirmasi Paket</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/konfirmasi_t/index');?>">
                                <i class="fa fa-desktop"></i> <span>Konfirmasi Guide</span>
                            </a>
                        </li>
          	            <li>
                            <a href="<?php echo site_url('admin/penginapan/index');?>">
                                <i class="fa fa-desktop"></i> <span>Penginapan</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/restaurant/index');?>">
                                <i class="fa fa-desktop"></i> <span>Restaurant</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/paket_wisatum/index');?>">
                                <i class="fa fa-desktop"></i> <span>Paket Wisata</span>
                            </a>
                        </li>
						<li>
                            <a href="<?php echo site_url('admin/tour_agent/index');?>">
                                <i class="fa fa-desktop"></i> <span>Tour Agent</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/tour_guide/index');?>">
                                <i class="fa fa-desktop"></i> <span>Tour Guide</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/galeri/index');?>">
                                <i class="fa fa-desktop"></i> <span>Galeri</span>
                            </a>
                        </li>
                        <li class="treeview">
                          <a href="#">
                            <i class="fa fa-desktop"></i> <span>Laporan</span>
                            <span class="pull-right-container">
                              <i class="fa fa-chevron-down"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li ><a href="<?php echo site_url('admin/LP_paket/index');?>"><i class="fa fa-bus"></i> Pemesanan Paket Wisata</a></li>
                            <li><a href="<?php echo site_url('admin/LP_guide/index');?>"><i class="fa fa-users"></i>Pemesanan Tour Guide</a></li>
                            <li><a href="<?php echo site_url('admin/L_Paketwisata/index');?>"><i class="fa fa-users"></i>Paket wisata</a></li>
                            <li><a href="<?php echo site_url('admin/L_Tourguide/index');?>"><i class="fa fa-users"></i>Tour Guide</a></li>
                            <!-- <li><a href="<?php echo site_url('admin/L_Pemesanpaket/index');?>"><i class="fa fa-users"></i>Pemesan Paket</a></li> -->
                            <!-- <li><a href="<?php echo site_url('admin/L_Pemesanguide/index');?>"><i class="fa fa-users"></i>Pemesan Guide</a></li> -->
                          </ul>
                        </li>
						
                        <li>
                            <a href="<?php echo site_url('admin/user/index');?>">
                                <i class="fa fa-desktop"></i> <span>User</span>
                            </a>
                        </li>
                       <!--  <li>
                            <a href="<?php echo site_url('admin/sk/index');?>">
                                <i class="fa fa-desktop"></i> <span>SK</span>
                            </a>
                        </li> -->
                    <?php } elseif($this->session->userdata('level') == "touragent"){ ?>

                                <li>
                                    <a href="<?php echo site_url('admin/LP_per_paket/index');?>">
                                        <i class="fa fa-desktop"></i> <span>Laporan Pemesanan Paket</span>
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="<?php echo site_url('admin/paket_wisatum/index');?>">
                                        <i class="fa fa-desktop"></i> <span>Paket Wisata</span>
                                    </a>
                                </li> -->


                    <?php } elseif($this->session->userdata('level') == "tourguide"){ ?>
                                <li>
                                    <a href="<?php echo site_url('admin/LP_per_guide/index');?>">
                                        <i class="fa fa-desktop"></i> <span>laporan Pemesanan Guide</span>
                                    </a>
                                </li>

                    <?php }  ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
                
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
             
                <a> &copy;Copyright 2018.</a>
             
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
        <!-- CK Editor -->
        <script type="text/javascript" src="<?php echo site_url('resources/js/ckeditor/ckeditor.js');?>"></script>

        <script src="<?php echo site_url('resources/js/bootstrap-fileupload/bootstrap-fileupload.min.js');?>"></script>
        
    </body>
</html>
