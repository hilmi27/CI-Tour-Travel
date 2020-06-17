<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tour Guide</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
               
            	<div class="box-tools">
                    <form class="form-inline" action="<?php echo site_url('admin/Tour_guide/cari');?>" method="get">
                         <a href="<?php echo site_url('admin/tour_guide/index'); ?>" class="btn btn-info"><i class="fa fa-tripadvisor"></i>Paket Wisata</a> 
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
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th><center> Nama</center></th>
						
						<!-- <th>No Telp</th> --> 
						<th><center> Bahasa</center></th>
						<th><center> Gambar</center></th>
                        <th><center> Harga</center></th>
                        <th><center> Status</center></th>
						<th><center>Opsi</center></th>
                    </tr>
                    <?php 
                    if (count($tour_guide)>0) {
                    $no = 0;
                    foreach($tour_guide as $t){ ?>
                    <tr>
                        <td><?php echo ++$no;?></td>
						<td><center><?php echo $t->nama_tourguide ?></center></td>
						<td><center><?php echo $t->bahasa ?></center></td>
						<td><center>
                            <img src="<?php echo base_url('resources/upload/tour_guide/'.$t->gambar) ?>" width='100' height='100'>
                        </center></td>
                        <td><center><?php echo $t->harga ?></center></td>

                       <td style="vertical-align:middle;text-align:center"><center>
                        <?php
                        if ($t->status == 1) {
                           echo '<label class="label-success" style="color:white; padding:3px 10px;">Aktif</label>';
                        } else {
                           echo '<label class="label-danger" style="color:white; padding:3px 10px;">Tidak Aktif</label>';
                        }
                        ?>
                     </center></td>

						<td><center>
                            <a href="<?php echo site_url('admin/tour_guide/edit/'.$t->id_tourguide) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            
                            <a href="<?php echo site_url('admin/tour_guide/remove/'.$t->id_tourguide) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('are you sure')"><span class="fa fa-trash"></span> Delete</a>
                        </center></td>
                    </tr>
                    <?php }} else { ?>
                        <tr>
                            <td colspan="5" align="center">Tidak Ada Data</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
