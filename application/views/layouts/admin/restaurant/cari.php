<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Restaurant</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              
            	<div class="box-tools">
                    <form class="form-inline" action="<?php echo site_url('admin/Restaurant/cari');?>" method="get">
                         <a href="<?php echo site_url('admin/restaurant/index'); ?>" class="btn btn-info"><i class="fa fa-tripadvisor"></i>Restaurant</a> 
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
						<th><center> Alamat</center></th>
						<th><center> No Telp</center></th>
						<th><center> Gambar</center></th>
						<th><CENTER>Opsi</CENTER></th>
                    </tr>
                    <?php 
                    if (count($restaurant)>0) {
                    $no = 0;
                    foreach($restaurant as $r){ ?>
                    <tr>
                        <td><?php echo ++$no;?></td>
						<td><center><?php echo $r->nama_restaurant ?></center></td>
						<td><center><?php echo $r->alamat ?></center></td>
						<td><center><?php echo $r->no_telp ?></center></td>
						<td><center>
                            <img src="<?php echo base_url('resources/upload/restaurant/'.$r->gambar) ?>" width='150' height='100'>
                        </center></td>
						<td><center>
                            <a href="<?php echo site_url('admin/restaurant/edit/'.$r->id_restaurant) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                           <a href="<?php echo site_url('admin/restaurant/remove/'.$r->id_restaurant) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('are you sure')"><span class="fa fa-trash"></span> Delete</a>
                        </center></td>
                    </tr>
                    <?php }}else{ ?>
                        <tr>
                            <td colspan="5" align="center">Tidak Ada Data</td>
                        </tr>
                    <?php } ?>
                </table>
               
                                 
            </div>
        </div>
    </div>
</div>
