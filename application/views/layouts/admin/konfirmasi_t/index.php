<div class="row">

<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Konfirmasi Pemesanan Guide</li>
      </ol>
    </div>
    </section>

<div class="col-md-12">
        <div class="box" >
            <div class="box-header">
              <?php echo form_open('admin/Konfirmasi_t'); ?>
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
               
                <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
              <?php echo form_close(); ?>
             </div>                 
            </div>         
        </div>


<!-- <div class="col-md-12">
        <div class="box" >
    <div class="box box-info">
            <div class="box-header with-border">
                
                <h3 class="box-title">Konfirmasi Pemesanan Tour Guide</h3>
            </div>
        </div>
    </div>
</div> -->

    <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
                <h3 class="box-title">Konfirmasi Pemesanan Tour Guide</h3>
            	<div class="box-tools">
                   <form class="form-inline" action="<?php echo site_url('admin/Konfirmasi_t/cari');?>" method="get">
                         
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
                <table class="table table-bordered">
                    <tr style="background-color:#ccc;">
						<th><center> No.</center></th>
                        <th><center> Invoice</center></th>
                        <th><center>Bukti Pembayaran</center></th>
                        <th><center>Status</center></th>
                        <th><center> Opsi</center><th>
                    </tr>
                    <?php 
                    if (count($data)>0) {
                        $no = $offset;
                    }
                    foreach($data as $kp){ ?>
                    <tr>
                        <td style="vertical-align:middle;text-align:center"><?php echo ++$no;?></td>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo $kp->invoice ?></center></td>
                        <!-- <td style="vertical-align:middle;text-align:center"><center><?php echo $cekpesan->nama_pemesan ?></center></td> -->
                        <td style="vertical-align:middle;text-align:center"><center>
                            <img src="<?php echo base_url('resources/upload/bukti_pembayaran/'.$kp->gambar); ?>" width='150' height='100'>
                        </center></td>
						<td style="vertical-align:middle;text-align:center"><center>
                        <?php
                        if ($kp->konfirm == 1) {
                           echo '<label class="label-success" style="color:white; padding:3px 10px;">Valid</label>';
                        } else if ($kp->konfirm == 2) {
                           echo '<label class="label-danger" style="color:white; padding:3px 10px;">Tidak Valid</label>';
                        }  else {
                           echo '<label class="label-primary" style="color:white; padding:3px 10px;">Belum Divalidasi</label>';
                        }
                        ?>
                        </center></td>
						<td style="vertical-align:middle;text-align:center"><center>
                            
                            <a href="<?php echo site_url('admin/konfirmasi_t/validasi/'.$kp->id_konfirmasi); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></span> Validasi</a> 
                            
                        </center></td>
                    </tr>
                    <?php } ?>
                    <?php 
                    if(count($data)==0){
                      echo "<tr><td colspan='8' align='center'>Tidak Ada data</td></tr>";
                    }
                    ?> 
                </table>
                        <br>
                <div class="box-tools">
                   <?php echo $halaman; ?>
                   </div>
            </div>
        </div>
    </div>
</div>
