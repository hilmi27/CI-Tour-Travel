<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pemesanan Paket Wisata</li>
      </ol>
    </div>
    </section>

<div class="col-md-12">
        <div class="box" >
            <div class="box-header">
              <?php echo form_open('admin/Pemesanan'); ?>
                <div class="form-group col-md-3 col-sm-12">
                  <select class="form-control select2" style="width: 100%;" name="bulan">
                    <option value="01" <?php if($bulan=='01'){ echo "selected"; } ?>>Januari</option>
                    <option value="02" <?php if($bulan=='02'){ echo "selected"; } ?>>Febuari</option>
                    <option value="03" <?php if($bulan=='03'){ echo "selected"; } ?>>Maret</option>
                    <option value="04" <?php if($bulan=='04'){ echo "selected"; } ?>>April</option>
                    <option value="05" <?php if($bulan=='05'){ echo "selected"; } ?>>Mei</option>
                    <option value="06" <?php if($bulan=='06'){ echo "selected"; } ?>>Juni</option>
                    <option value="07" <?php if($bulan=='07'){ echo "selected"; } ?>>Juli</option>
                    <option value="08" <?php if($bulan=='08'){ echo "selected"; } ?>>Agustus</option>
                    <option value="09" <?php if($bulan=='09'){ echo "selected"; } ?>>September</option>
                    <option value="10" <?php if($bulan=='10'){ echo "selected"; } ?>>Oktober</option>
                    <option value="11" <?php if($bulan=='11'){ echo "selected"; } ?>>November</option>
                    <option value="12" <?php if($bulan=='12'){ echo "selected"; } ?>>Desember</option>
                  </select>
                </div>

                <div class="form-group col-md-2 col-sm-12">
                  <select class="form-control select2" style="width: 100%;" name="tahun">
                    <option value="2018" <?php if($tahun=='2018'){ echo "selected"; } ?>>2018</option>
                    <option value="2019" <?php if($tahun=='2019'){ echo "selected"; } ?>>2019</option>
                    <option value="2020" <?php if($tahun=='2020'){ echo "selected"; } ?>>2020</option>
                    <option value="2021" <?php if($tahun=='2021'){ echo "selected"; } ?>>2021</option>
                    <option value="2022" <?php if($tahun=='2022'){ echo "selected"; } ?>>2022</option>
                    <option value="2023" <?php if($tahun=='2023'){ echo "selected"; } ?>>2023</option>
                    <option value="2024" <?php if($tahun=='2024'){ echo "selected"; } ?>>2024</option>
                    <option value="2025" <?php if($tahun=='2025'){ echo "selected"; } ?>>2025</option> 
                  </select>
                </div>

               <div class="form-group col-md-3 col-sm-12">
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>
               
                <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
              <?php echo form_close(); ?>
             </div>                 
            </div>         
        </div>



    <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
                <h3 class="box-title">Pemesanan Paket Wisata</h3>
            	<div class="box-tools">
                   <form class="form-inline" action="<?php echo site_url('admin/pemesanan/cari');?>" method="get">
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
                <table class="table table-bordered table-striped">
                    <tr style="background-color:#ccc;">
						<th width="3px"><center>No.</center></th>
                        <!-- <th><center>ID</center></th> -->
                        <th width="3px"><center>Invoice</center></th>
                        <th width="5"><center> Tanggal pemesanan</center></th>
                        <th width="15px"><center> Nama</center></th>
                        <th width="26"><center> Alamat</center></th>
                        <th width="25px"><center> Paket</center></th>
                        <th width="3"><center> Jumlah</center></th>
                        <!-- <th width="20px"><center> Harga</center></th> -->
						<th width="10px"><center>Status</center></th>
						<th width="10"><center>Opsi</center></th>
                    </tr>

                    <?php 
                    $no = $offset;
                    // $no = 0;
                    foreach($data as $p){ ?>
                    <tr>
                        <td><center><?php echo ++$no; ?></center></td>
                        <!-- <td><center><?php echo $p->id_pemesanan ?></center></td> -->
                         <td><center><?php echo $p->invoice ?></center></td>
                         <td><center><?php echo $p->tanggal_sekarang ?></center></td>
                        <td><center><?php echo $p->nama_pemesan ?></center></td>
                        <td><center><?php echo $p->alamat ?></center></td>
                        <td style="vertical-align:middle;text-align:center"><center>
                            <?php 
                            $paket = $this->Paket_wisatum_model->get_paket_wisatum($p->nama_paket);
                         
                            echo $paket->nama_paketwisata
                            ?>
                                
                            </center></td>

                          

                        <td><center><?php echo $p->jumlah_anggota ?> pax</center></td>
                        <!-- <td><center><?php echo 'Rp. '.number_format($p->total, 2,',','.') ?></center></td> -->
						<td style="vertical-align:middle;text-align:center"><center>
                        <?php
                        if ($p->status == 1) {
                           echo '<label class="label-success" style="color:white; padding:3px 10px;">Sudah Konfirmasi</label>';
                        } 
                        else if ($p->status == 2) {
                           echo '<label class="label-danger" style="color:white; padding:3px 10px;">Sudah Konfirmasi</label>';
                        } 
                        else  {
                           echo '<label class="label-primary" style="color:white; padding:3px 10px;">Belum Konfirmasi</label>';
                        } 
                        ?>
                     </center></td>
						<td><center>
                            <a href="<?php echo site_url('admin/pemesanan/show/'.$p->id_pemesanan) ?>" class="btn btn-success btn-xs"><span class="fa fa-eye"></span> </a> 
                            <!-- <a href="<?php echo site_url('admin/pemesanan/edit/'.$p->id_pemesanan) ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></span></a>  -->
                            <a href="<?php echo site_url('admin/pemesanan/remove/'.$p->id_pemesanan) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Apakah Anda Yakin ?')"><span class="fa fa-trash"></span></a>
                        </center></td>
                    </tr>
                    <?php } ?>
                    <?php 
                    if(count($data)==0){
                      echo "<tr><td colspan='8' align='center'>Tidak Ada data</td></tr>";
                    }
                    ?> 
                </table><br>
                <?php echo $halaman; ?>
            </div>
        </div>
    </div>
</div>
