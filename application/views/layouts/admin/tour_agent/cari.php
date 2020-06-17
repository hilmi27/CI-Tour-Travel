<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tour Agent</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                
            	<div class="box-tools">
                    <form class="form-inline" action="<?php echo site_url('admin/Tour_agent/cari');?>" method="get">
                         <a href="<?php echo site_url('admin/tour_agent/index'); ?>" class="btn btn-info"><i class="fa fa-tripadvisor"></i>Paket Wisata</a> 
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
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th><center> Nama</center></th>
						<th><center> Email</center></th>
						<th><center> Alamat</center></th>
						<th><center> No Telp</center></th>
						<th><center>Opsi</center></th>
                    </tr>
                    <?php 
                    if (count($tour_agent)>0) {
                    $no = 0;
                    foreach($tour_agent as $t){ ?>
                    <tr>
                        <td><?php echo ++$no;?></td>
						<td><center><?php echo $t->nama_touragent ?></center></td>
						<td><center><?php echo $t->email ?></center></td>
						<td><center><?php echo $t->alamat ?></center></td>
						<td><center><?php echo $t->no_telp ?></center></td>
						<td><center>
                            <a href="<?php echo site_url('admin/tour_agent/edit/'.$t->id_touragent) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/tour_agent/remove/'.$t->id_touragent) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('are you sure')"><span class="fa fa-trash"></span> Delete</a>
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
