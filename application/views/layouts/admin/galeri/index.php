

<div class="row">
<section class="content-header">
      <div id="container">

      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Galeri</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
                
               <div class="box-tools">
                    <form class="form-inline" action="" method="post">
                        <a href="<?php echo site_url('admin/galeri/add'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> 
                        <div class="form-group">
                            <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </form>
                    
                </div>
            </div><br><br>
            <div class="box-body">
                
                <table class="table table-striped table-bordered table-hover" >
                    <tr style="background-color:#ccc;">
                        <th ><center>No.</center></th>
                        <th><center> Nama</center></th>
                        <th><center> Gambar</center></th>
                        <th><center>Opsi</center></th>
                    </tr>
                  





                    <?php 
                    $no = $offset;
                    foreach($data as $g){ ?>
                    <tr>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo ++$no; ?></center></td>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo $g->nama ?></center></td>
                        
                        <td style="vertical-align:middle;text-align:center"><center>
                            <img src="<?php echo base_url('resources/upload/'.$g->gambar) ?>" width='150' height='100'>
                        </center></td>
                        <td style="vertical-align:middle;text-align:center"><center>
                            <a href="<?php echo site_url('admin/galeri/edit/'.$g->id_galeri) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/galeri/remove/'.$g->id_galeri) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Apakah Anda Yakin ?')"><span class="fa fa-trash"></span> Hapus</a>
                        </center></td>
                    </tr>
                    <?php } ?>
                </table><br>

               <?php echo $halaman; ?>
                
                                
            </div>




            
        </div>
    </div>
</div>
