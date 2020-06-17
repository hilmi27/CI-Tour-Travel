<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Pemesanan</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Pemesanan Paket Wisata</h3>
                <div class="box-tools">
                   <form class="form-inline" action="" method="post">
                        <div class="form-group">
                            <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>ID Pemesanan</th>
                        
                        <th>ID Paket Wisata</th>
                        
                        <th>Actions</th>
                    </tr>

                    <?php 
                    $no = 1;
                    foreach($detail_pemesanan as $d){ ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_pemesanan']; ?></td>
                        <td><?php echo $d['id_paketwisata']; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/detail_pemesanan/edit/'.$d['id_pemesanan']); ?>" class="btn btn-success btn-xs"><span class="fa fa-tv"></span> Show</a> 
                            <a href="<?php echo site_url('admin/detail_pemesanan/edit/'.$d['id_pemesanan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/detail_pemesanan/remove/'.$d['id_pemesanan']); ?>" class="btn btn-danger btn-xs" onclick="return confirm ('are you sure')"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                   <div class="box-tools">
                    <a href="<?php echo site_url('admin/detail_pemesanan/add'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> 
                </div>                 
            </div>
        </div>
    </div>
</div>
