<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pemesanan Paket Wisata</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
                <a href="<?php echo site_url('admin/pemesanan/index')?>" class="btn btn-danger">Kembali</a> 
                <h3 class="box-title">Pencarian Pemesanan</h3>
            	<div class="box-tools">

                    <form class="form-inline" action="<?php echo site_url('admin/pemesanan/cari');?>" method="get">
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
                <table class="table table-striped table-bordered table-hover" >
                    <tr style="background-color:#ccc;">
						<th><center>No.</center></th>
						<th><center>Nama Pemesan</center></th>
						<th><center>Nama Paket</center></th>
						<th><center>Jumlah</center></th>
						
						<th><center>Tanggal Trip</center></th>
						<th><center>Opsi</center></th>
                    </tr>

                            
                    <?php 
                     
                        $no = 0;

                    foreach($pemesanan as $p){ ?>

                     <tr>
                        <td><center><?php echo ++$no; ?></center></td>
                        <td><center><?php echo $p->nama_pemesan ?></center></td>
                        <td><center>
                             <?php 
                            $paket = $this->Paket_wisatum_model->get_paket_wisatum($p->nama_paket);
                         
                            echo $paket->nama_paketwisata
                            ?>

                         </center></td>
                        <td><center><?php echo $p->jumlah_anggota ?></center></td>
                        <td><center><?php echo $p->tanggal_pemesanan ?></center></td>
                        <td><center>
                            <a href="<?php echo site_url('admin/pemesanan/show/'.$p->id_pemesanan) ?>" class="btn btn-success btn-xs"><span class="fa fa-tv"></span> Show</a> 
                            <!-- <a href="<?php echo site_url('admin/pemesanan/edit/'.$p->id_pemesanan) ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></span> Edit</a>  -->
                            <a href="<?php echo site_url('admin/pemesanan/remove/'.$p->id_pemesanan) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('are you sure')"><span class="fa fa-trash"></span> Delete</a>
                        </center></td>
                    </tr>
                    <?php } ?>

                     <?php 
                    if(count($pemesanan)==0){
                      echo "<tr><td colspan='8' align='center'>Tidak Ditemukan Data Dalam Pencarian</td></tr>";
                    }
                    ?> 
                </table><br>
               
            </div>
        </div>
    </div>
</div>
