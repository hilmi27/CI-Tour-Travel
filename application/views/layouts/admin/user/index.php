<div class="row">
    <div class="col-md-12">
        <div class="box" style="padding: 10px">
            <div class="box-header">
                <h3 class="box-title">User</h3>
            	<div class="box-tools">

                    <form class="form-inline" action="" method="post">
                        <div class="form-group">
                            <a href="<?php echo site_url('admin/user/add'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> 
                            <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </form>
                </div>
            </div><br>
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr style="background-color:#ccc;">
						<th><center>No.</center></th>
						<th><center>Nama</center></th>
                        <th><center>Foto</center></th>
						<th><center>Username</center></th>
                        <th><center>Level</center></th>
						<th><center>Opsi</center></th>
                    </tr>
                    <?php
                    $no = $offset;
                    // $no = 0;
                    foreach($data as $u){ ?>
                    <tr>
						<td style="vertical-align:middle;text-align:center"><center><?php echo ++$no; ?></center></td>
						<td style="vertical-align:middle;text-align:center"><center><?php echo $u->nama ?></center></td>
                        <td style="vertical-align:middle;text-align:center">  <center>
                            <img src="<?php echo base_url('resources/upload/user/'.$u->gambar) ?>" width='100' height='100'>
                        </center></td>
						<td style="vertical-align:middle;text-align:center"><center><?php echo $u->username ?></center></td>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo $u->level ?></center></td>
						<td style="vertical-align:middle;text-align:center"><center>
                            <a href="<?php echo site_url('admin/user/edit/'.$u->id_user); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/user/remove/'.$u->id_user); ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Apakah Anda Yakin ?')"><span class="fa fa-trash"></span> Hapus</a>
                        </center></td>
                    </tr>
                    <?php } ?>
                </table><br>
                <?php echo $halaman; ?>
                <div class="box-tools">
                    
                </div>              
            </div>
        </div>
    </div>
</div>
