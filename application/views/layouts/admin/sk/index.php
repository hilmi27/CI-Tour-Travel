

<div class="row">
<section class="content-header">
      <div id="container">

      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Saran & Kritik</li>
      </ol>
    </div>
    </section>

    <div class="col-md-12">
        <div class="box" style="padding: 20px">
            <div class="box-header">
                <h3 class="box-title">Saran dan Kritik</h3>
              
            </div>
            <div class="box-body">
                
                <table class="table table-striped table-bordered table-hover" >
                    <tr style="background-color:#ccc;">
                        <th width="5%"><center>No.</center></th>
                        <th width="25%"><center> Nama</center></th>
                        <th width="5%"><center> Nilai</center></th>
                        <th width="65%"><center>Saran & Kritik</center></th>
                    </tr>
                  





                    <?php 
                    $no = $offset;
                    foreach($data as $sk){ ?>
                    <tr>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo ++$no; ?></center></td>
                        <td style="vertical-align:middle;text-align:center"><center><?php echo $sk->nama ?></center></td>
                        
                       <td style="vertical-align:middle;text-align:center"><center><?php echo $sk->nilai ?></center></td>
                       <td style="vertical-align:middle;text-align:center"><center><?php echo $sk->sk ?></center></td>
                    </tr>
                    <?php } ?>
                </table><br>

               <?php echo $halaman; ?>
                
                                
            </div>




            
        </div>
    </div>
</div>
