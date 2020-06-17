<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/konfirmasi_p/index'); ?>" class="btn btn-info"><i class="fa  fa-arrow-circle-left"></i> Kembali</a>
              	<h3 class="box-title"> Konfirmasi Pemesanan Paket Wisata</h3>
            </div>
        </div>
		
			<div class="box box-info">
			<div class="box-body">

				<table class="table table-bordered">
                    <tr>
                        <th><center> Tgl Konfirmasi</center></th>
						<th><center> Invoice</center></th>
                        <th><center> Nama</center></th>
                        <th><center> Jumlah</center></th>
                        
                        <th><center> Tgl Transfer </center></th>
                        <th><center> Bank</center></th>
                        <th><center> Status </center></th>
                        
                    </tr>
                    
                    <tr>
                        <td><center><?php echo $show->tgl_sekarang ?></center></td>
                        <td><center><?php echo $show->invoice ?></center></td>
                        <td><center><?php echo $show->nama ?></center></td>
                        <td><center><?php echo $show->jumlah ?></center></td>
                        <td><center><?php echo $show->tgl_kirim ?></center></td>
                        <td><center><?php echo $show->bank ?></center></td>
                        <td><center><?php echo $show->konfirm ?></center></td>
                        
						
                    </tr>
     
                </table>

			
			</div>
			
		</div>
    </div>
</div>