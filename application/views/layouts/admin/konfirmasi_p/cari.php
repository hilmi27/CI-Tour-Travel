<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Konfirmasi Pemesanan Paket Wisata</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <a href="<?php echo site_url('admin/konfirmasi_p/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a> 
            	<div class="box-tools">

                    <form class="form-inline" action="<?php echo site_url('admin/konfirmasi_p/cari');?>" method="get">
                        
                        <div class="form-group">
                            <input type="text" name="cari" class="form-control" placeholder="Pencarian">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </form>
                    
                </div>
            </div><br>
            <div class="box-body">
                <table class="table table-striped  table-hover">
                    <tr>
                        <th><center>No.</center></th>
                        <th><center> Invoice</center></th>
                        <!-- <th><center>Nama</center></th> -->
                        <th><center>Bukti Pembayaran</center></th>
                        <th><center>Status</center></th>
                        <th><center> Opsi</center><th>
                        <!-- <th>Validasi</th> -->
                    </tr>

                            
                    <?php 
                     
                        $no = 0;

                    foreach($konfirmasi_p as $kp){ ?>

                    <tr>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo ++$no;?></center></td>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo $kp->invoice ?></center></td>
                        <!-- <td style="vertical-align:middle;text-align:center"><center><?php echo $cekpesan->nama_pemesan ?></center></td> -->
                        <td><center>
                            <img src="<?php echo base_url('resources/upload/bukti_pembayaran/'.$kp->gambar); ?>" width='150' height='100'>
                        </center></td>
                        <td style="vertical-align:middle;text-align:center"><center>
                        <?php
                        if ($kp->konfirm == 1) {
                           echo '<label class="label-success" style="color:white; padding:3px 10px;">Valid</label>';
                        } else {
                           echo '<label class="label-danger" style="color:white; padding:3px 10px;">Tidak Valid</label>';
                        }
                        ?>
                     </center></td>
                        <td style="vertical-align:middle;text-align:center"><center>
                            <!-- <a href="<?php echo site_url('admin/konfirmasi_p/show/'.$kp->id_konfirmasi); ?>" class="btn btn-success btn-xs"><span class="fa fa-tv"></span> Show</a> -->
                            <a href="<?php echo site_url('admin/konfirmasi_p/validasi/'.$kp->id_konfirmasi); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></span> Validasi</a> 
                            
                        </center></td>
                    </tr>
        <?php } ?>
                </table>
                <br>
               
            </div>
        </div>
    </div>
</div>
