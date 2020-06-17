

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
        <div class="box" style="padding: 20px">
            <div class="box-header">
                <h3 class="box-title">Laporan Pemesan Tour Guide</h3>
               
            
            
         
            </div><br>

            <div class="box-body" >
                <table class="table table-bordered">
                    <tr style="background-color:#ccc;">
                        <th><center>No.</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Jumlah Pemesan</center></th>
                    </tr>
                    <?php 
                    $no=0;
                    foreach($guide as $g){ ?>
                    <tr>
                        <td><center><?php echo ++$no;?></center></td>
                        <td><center>
                             <?php 
                            $guide = $this->Pemesanan_tourguide_model->laporanpemesan($g->alamat);
                            // echo count($guide);
                            echo $g->alamat
                            // echo $guide;
                             ?>
                        </center></td>
                        <td><center>
                        <?php
                            $guide = $this->Pemesanan_tourguide_model->laporanpemesan($g->id_pemesananguide);
                            echo count($guide);
                            // echo $g->nama_pemesan
                        ?>
                        </center></td>
                        
                    </tr>

                    <?php } ?>

                    

                    
                </table>
               
                
            </div>
        </div>
    </div>
    </div>

