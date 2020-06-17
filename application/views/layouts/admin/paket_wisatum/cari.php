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
        <div class="box">
            <div class="box-header">
                
            	<div class="box-tools">

                    <form class="form-inline" action="<?php echo site_url('admin/Paket_wisatum/cari');?>" method="get">
                        <a href="<?php echo site_url('admin/paket_wisatum/index'); ?>" class="btn btn-info"><i class="fa fa-tripadvisor"></i>Paket Wisata</a> 
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
                <table class="table table-striped  table-hover">
                    <tr>
						<th>No.</th>
						<th><center>Nama Paket</center></th>
						<!-- <th>Fasilitas</th> -->
						<th><center>Harga</center></th>
						<th><center>Gambar</center></th>
						
						<th><center>Tour Agent</center></th>
						<th><center>Opsi</center></th>
                    </tr>

                            
                    <?php 
                     
                        $no = 1;

                    foreach($paket_wisata as $p){ ?>

                    <tr>
                        <td><?php echo $no++;?></td>
						
						<td><center><?php echo $p->nama_paketwisata ?></center></td>
						<td><center><?php echo $p->harga ?></center></td>
						
                        <td><center>
                            <img src="<?php echo base_url('resources/upload/paket_wisata/'.$p->gambar); ?>" width='150' height='100'>
                        </center></td>

						

						<td><center>
                            <?php 
                            $agent = $this->Tour_agent_model->get_tour_agent($p->id_touragent);
                            echo $agent->nama_touragent ?>

                            <!-- <?php echo $p->nama_touragent ?> -->
                                
                            </center></td>
						<td><center>
                            <a href="<?php echo site_url('admin/paket_wisatum/show/'.$p->id_paketwisata) ?>" class="btn btn-success btn-xs"><span class="fa fa-tv"></span> Show</a> 
                            <a href="<?php echo site_url('admin/paket_wisatum/edit/'.$p->id_paketwisata) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/paket_wisatum/remove/'.$p->id_paketwisata) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('are you sure')"><span class="fa fa-trash"></span> Delete</a>
                        </center></td>
                    </tr>
        <?php } ?>
                </table>
                <br>
               
            </div>
        </div>
    </div>
</div>
