<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Paket Wisata</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
               
            	<div class="box-tools">

                    <form class="form-inline" action="<?php echo site_url('admin/Paket_wisatum/cari');?>" method="get">
                         <a href="<?php echo site_url('admin/paket_wisatum/add'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> 
                        <div class="form-group">
                            <input type="text" name="cari" class="form-control" placeholder="Pencarian">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </form>                    
                </div>
            </div><br><br>
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <tr style="background-color:#ccc;">
						<th width="10px"><center> No.</center></th>
						<th width="30px"><center>Nama Paket</center></th>
						<!-- <th>Fasilitas</th> -->
						<th width="20px"><center>Harga</center></th>
						<th width="15px"><center>Gambar</center></th>
						
						<th width="15px"><center>Tour Agent</center></th>
						<th width="10px"><center>Opsi</center></th>
                    </tr>

                            
                    <?php 
                    if (count($data)>0) {
                        $no = $offset;
                    }
                   
                    foreach($data as $p){ ?>

                    <tr>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo ++$no;?></center></td>
						
						<td style="vertical-align:middle;text-align:center"><center><?php echo $p->nama_paketwisata ?></center></td>
						<td style="vertical-align:middle;text-align:center"><center><?php echo 'Rp.'.number_format($p->harga, 2,',','.') ?></center></td>
						
                        <td><center>
                            <img src="<?php echo base_url('resources/upload/paket_wisata/'.$p->gambar); ?>" width='150' height='100'>
                        </center></td>

						

						<td style="vertical-align:middle;text-align:center"><center>
                            <?php 
                            $agent = $this->Tour_agent_model->get_tour_agent($p->id_touragent);
                            echo $agent->nama_touragent
                            ?>
                                
                            </center></td>
						<td style="vertical-align:middle;text-align:center"><center>
                           
                            <a href="<?php echo site_url('admin/paket_wisatum/edit/'.$p->id_paketwisata) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a> 
                            <a href="<?php echo site_url('admin/paket_wisatum/remove/'.$p->id_paketwisata) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Apakah Anda Yakin ?')"><span class="fa fa-trash"></span></a>
                        </center></td>
                    </tr>
        <?php } ?>
                </table>
                <br>
                <div class="box-tools">
                   <?php echo $halaman; ?>
                   </div>   
            </div>
        </div>
    </div>
</div>
