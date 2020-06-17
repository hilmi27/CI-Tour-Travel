<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rumah Makan</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box" style="padding: 10px">
            <div class="box-header">
              
            	<div class="box-tools">
                    <form class="form-inline" action="<?php echo site_url('admin/Restaurant/cari');?>" method="get">
                         <a href="<?php echo site_url('admin/restaurant/add'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> 
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
                <table class="table table-striped table-bordered">
                    <tr style="background-color:#ccc;">
						<th width="10px"><center>No.</center></th>
						<th width="20px"><center> Nama</center></th>
						<th width="30px"><center> Alamat</center></th>
						<!-- <th><center> No Telp</center></th> -->
						<th width="20px"><center> Gambar</center></th>
						<th width="20px"><CENTER>Opsi</CENTER></th>
                    </tr>
                    <?php 
                    $no = $offset;
                    foreach($data as $r){ ?>
                    <tr>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo ++$no;?></center></td>
						<td style="vertical-align:middle;text-align:center"><center><?php echo $r->nama_restaurant ?></center></td>
						<td style="vertical-align:middle;text-align:center"><center><?php echo $r->alamat ?></center></td>
						<!-- <td style="vertical-align:middle;text-align:center"><center><?php echo $r->no_telp ?></center></td> -->
						<td style="vertical-align:middle;text-align:center"> <center>
                            <img src="<?php echo base_url('resources/upload/restaurant/'.$r->gambar) ?>" width='150' height='100'>
                        </center></td>
						<td style="vertical-align:middle;text-align:center"><center>
                            <a href="<?php echo site_url('admin/restaurant/edit/'.$r->id_restaurant) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                           <a href="<?php echo site_url('admin/restaurant/remove/'.$r->id_restaurant) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Apakah Anda Yakin ?')"><span class="fa fa-trash"></span> Hapus</a>
                        </center></td>
                    </tr>
                    <?php } ?>
                </table>
                <?php echo $halaman; ?>
                                 
            </div>
        </div>
    </div>
</div>
