

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
        <div class="box">
            <div class="box-header">

                 <div class="form-group col-md-3 col-sm-12">
                
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Januari</option>
                    <option>Febuari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                  </select>
                  </div>

               <div class="form-group col-md-3 col-sm-12">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">2018</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                  <option>2023</option>
                  <option>2024</option>
                  <option>2025</option> 
                </select>
              </div>

              <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
             </div>                 
            </div>         
        </div>

        <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Pemesanan Paket Wisata</h3>
                <div class="box-tools">
                   <form class="form-inline" action="" method="post">
                        <div class="form-group">
                            <a href="#" class="btn btn-success" target="_blank"><i class="fa fa-print"></i></a>
                        </div>
                    
                    </form>
                </div>
            
            
         
            </div><br>

            <div class="box-body">
                <table class="table table-striped">
                    <tr>
            <th>No.</th>
                        <th><center> Invoice</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Paket</center></th>
                        <th><center> Jumlah Kursi</center><th>
                        <th><center>Jumlah Transfer</center></th>
            <!-- <th>Validasi</th> -->
                    </tr>
                    <?php 
                    if (count($data)>0) {
                        $no = $offset;
                    }
                    foreach($data as $p){ ?>
                    <tr>
                        <td><?php echo ++$no;?></td>
                        <td><center><?php echo $p->invoice ?></center></td>
                        <td><center><?php echo $p->nama_pemesan ?></center></td>
                        <td><center><?php echo $p->alamat ?></center></td>
                        <td><center><?php echo $p->nama_paket ?></center></td>
                        <td><center><?php echo $p->jumlah_anggota ?></center></td>
                        <td><center>tes</center></td>
                    </tr>
                    <?php } ?>
                </table>
                        <br>
                <div class="box-tools">
                   <?php echo $halaman; ?>
                   </div>
            </div>
        </div>
    </div>

<br><br><br>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">

                 <div class="form-group col-md-3 col-sm-12">
                
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Januari</option>
                    <option>Febuari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                  </select>
                  </div>

               <div class="form-group col-md-3 col-sm-12">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">2018</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                  <option>2023</option>
                  <option>2024</option>
                  <option>2025</option> 
                </select>
              </div>

              <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
             </div>                 
            </div>         
        </div>

        <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Pemesanan Tour Guide</h3>
                <div class="box-tools">
                   <form class="form-inline" action="" method="post">
                        <div class="form-group">
                            <a href="#" class="btn btn-success" target="_blank"><i class="fa fa-print"></i></a>
                        </div>
                    
                    </form>
                </div>
            
            
         
            </div><br>

            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th><center> Invoice</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Tour Guide</center></th>
                        <th><center>Jumlah Transfer</center></th>
            
                    </tr>
                    <?php 
                    if (count($ps_guide)>0) {
                        $no = $offset;
                    }
                    foreach($ps_guide as $t){ ?>
                    <tr>
                        <td><?php echo ++$no;?></td>
                        <td><center><?php echo $t->invoice ?></center></td>
                        <td><center><?php echo $t->nama_pemesan ?></center></td>
                        <td><center><?php echo $t->alamat ?></center></td>
                        <td><center><?php echo $t->id_tourguide ?></center></td>
                        <td><center>tes</center></td>
                    </tr>
                    <?php } ?>
                </table>
                        <br>
                <div class="box-tools">
                   <?php echo $page; ?>
                   </div>
            </div>
        </div>
    </div>
    </div>

