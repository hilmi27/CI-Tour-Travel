<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penginapan</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                
                <div class="box-tools">

                    
                   
                    <form class="form-inline" action="<?php echo site_url('admin/Penginapan/cari');?>" method="get">
                         <a href="<?php echo site_url('admin/penginapan/index'); ?>" class="btn btn-info"><i class="fa fa-tripadvisor"></i>Penginapan</a> 
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
                        <th><center> Alamat </center></th>
                        <th><center> No Telp </center></th>
                        <th><center> Gambar </center></th>
                        <th><center>Opsi</center></th>
                    </tr>
                    <?php 
                   $no = 0;
                    foreach($penginapan as $p){ ?>
                    <tr>
                        <td><?php echo ++$no;?></td>
                        <td><center><?php echo $p->nama_penginapan ?></center></td>
                        <td><center><?php echo $p->alamat?></center></td>
                        <td><center><?php echo $p->no_telp ?></center></td>
                        <td><center>
                            <img src="<?php echo base_url('resources/upload/penginapan/'.$p->gambar); ?>" width='150' height='100'>
                        </center></td>
                        <td><center>
                            <a href="<?php echo site_url('admin/penginapan/edit/'.$p->id_penginapan); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/penginapan/remove/'.$p->id_penginapan); ?>" class="btn btn-danger btn-xs" onclick="return confirm ('are you sure')"><span class="fa fa-trash"></span> Delete</a>
                        </center></td>
                    </tr>
                    <?php } ?>
                </table>        
            </div>
        </div>
    </div>
</div>
