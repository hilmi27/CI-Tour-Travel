

<div class="row">
<section class="content-header">
      <div id="container">
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>
      </ol>
    </div>
</section>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <?php 
              if($this->uri->segment(2) == "LP_per_guide"){
                $link1 = site_url('admin/LP_per_guide');
                } else {
                $link1 = site_url('admin/LP_guide');
                    }

              echo form_open($link1);
              

               ?>
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

                <!-- <div class="form-group col-md-3 col-sm-12">
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>

                  <div class="form-group col-md-3 col-sm-12">
                  <input type="text" name="tourguide" class="form-control" placeholder="Tour Guide">
                </div> -->
                <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
              </form>
             </div>                 
            </div>         
        </div>




        <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
                <h3 class="box-title">Laporan Pemesanan Tour Guide</h3>
                <div class="box-tools">
                   <form class="form-inline" action="" method="post">
                        <div class="form-group">
                            <?php 
                            if($this->uri->segment(2) == "LP_per_guide"){
                                $link = site_url('admin/lp_per_guide/cetak/'.$bulan.'/'.$tahun.'/'.$alamat);
                            } else {
                                $link = site_url('admin/lp_guide/cetak/'.$bulan.'/'.$tahun.'/'.$alamat);
                            }
                             ?>
                            <a href="<?php echo $link; ?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i></a>
                        </div>
                    
                    </form>
                </div>
            
            
         
            </div><br>

            <div class="box-body">
                <table class="table table-bordered">
                    <tr style="background-color:#ccc;">
                        <th><center>No.</center></th>
                        <th><center>Tanggal Pemesanan</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Guide</center></th>
                        <th><center>Total</center></th>
        
                    </tr>
                    <?php 
                    $no=0;
                    $jumlah = 0;
                    foreach($laporan as $p){ ?>
                    <tr>
                        <td><center><?php echo ++$no;?></center></td>
                        <td><center><?php echo $p->tanggal_sekarang ?></center></td>
                        <td><center><?php echo $p->nama_pemesan ?></center></td>
                        <td><center><?php echo $p->alamat ?></center></td>
                        <td><center>
                           <?php 
                            $guide = $this->Tour_guide_model->get_tour_guide($p->id_tourguide);
                            echo $guide->nama_tourguide ?>
                        </center></td>
                        <td><center><?php echo 'Rp. '.number_format($p->total, 2,',','.') ?></center></td>
                    </tr>
                    <?php

                    $jumlah = $jumlah + $p->total;
                     } ?>

                    <?php 
                    if(count($laporan)==0){
                      echo "<tr><td colspan='6' align='center'>Tidak Ada data</td></tr>";
                    }
                    ?>
                </table>
                <h6>Jumlah Transaksi: <?php echo count($laporan); ?></h6>
                <h6>Jumlah Pemasukan: <?php echo 'Rp. '.number_format($jumlah, 2,',','.')    ?></h6>
                <br>
                <?php 
                if(count($laporan)==0){

                }
                ?>
            </div>
        </div>
    </div>
    </div>

