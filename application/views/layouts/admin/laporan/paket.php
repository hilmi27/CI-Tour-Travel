

<div class="row">
<section class="content-header">
      <div id="container">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>
      </ol>
    </div>
</section>

<div class="col-md-12">
        <div class="box" >
            <div class="box-header">
              <?php echo form_open('admin/L_Paketwisata'); ?>
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


        <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
                <h3 class="box-title">Laporan Paket Wisata</h3>
                <div class="box-tools">
                   <form class="form-inline" action="" method="post">
                        <div class="form-group">
                            <a href="<?php echo site_url('admin/l_paketwisata/cetak/'); ?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i></a>
                        </div>
                    
                    </form>
                </div>
            </div><br>

            <div class="box-body" >
                <table class="table table-bordered">
                    <tr style="background-color:#ccc;">
                        <th><center>No.</center></th>
                        <th><center>Nama Paket Wisata</center></th>
                        <th><center>Total Pemesanan</center></th>
                    </tr>
                    <?php 
                    $no=0;
                    foreach($paket as $p){ ?>
                    <tr>
                        <td><center><?php echo ++$no;?></center></td>
                        <td><center>
                             <?php 
                            echo $p['nama_paketwisata'];
                         
                            ?>
                        </center></td>
                        <td><center>
                        <?php
                            $paket = $this->Pemesanan_model->laporanfilterpaket($p['id_paketwisata'],$bulan,$tahun);
                            echo count($paket);
                        ?>
                        </center></td>
                        
                    </tr>

                    <?php } ?>

                    

                    <?php 
                    if(count($paket)==0){
                      echo "<tr><td colspan='7' align='center'>Tidak Ada data</td></tr>";
                    }
                    ?>
                </table>
               
                <br>
                <?php 
                if(count($paket)==0){

                }
                ?>
            </div>
        </div>
    </div>
    </div>

