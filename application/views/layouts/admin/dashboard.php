<div class="row">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </div>
    </section>
    <!-- Main content -->
    
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><div class="count"><?php echo  $ppaket ?></div></h3>

              <p>Pemesanan Paket</p>
            </div>
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>
            <a href="<?php echo site_url('admin/pemesanan/index'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><div class="count"><?php echo  $pguide ?></div></h3>

              <p>Pemesanan Guide</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>

            <a href="<?php echo site_url('admin/pemesanan_guide/index'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><div class="count"><?php echo  $kpaket ?></div></h3>

              <p>Konfirmasi Pemesanan Paket</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="<?php echo site_url('admin/konfirmasi_p/index'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><div class="count"><?php echo  $kguide ?></div></h3>

              <p>Konfirmasi Pemesanan Guide</p>
            </div>
            <div class="icon">
              <i class="fa fa-credit-card"></i>
            </div>
            <a href="<?php echo site_url('admin/konfirmasi_t/index'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
  </div>

  