<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/pemesanan/index'); ?>" class="btn btn-danger"><i class="fa  fa-arrow-circle-left"></i> </a>
              	<h3 class="box-title">Pemesanan Paket Wisata</h3>
            </div>
        </div>
		
			<div class="box box-info" style="padding: 20px">
			<div class="box-body">

				<table class="table table-bordered">
                    <tr style="background-color:#ccc;">
						<th><center> Invoice</center></th>
                        <th><center> Nama</center></th>
                        <th><center> Alamat</center></th>
                        
                        <th><center> Email </center></th>
                        <th><center> No Telp </center></th>
                        <th><center> Paket</center></th>
                        
                        <th><center> Jumlah</center></th>
                        <th><center> Harga</center></th>
                        <th><center> Tgl Pesan</center></th>
						<th><center> Tgl Trip</center></th>
                    </tr>
                    
                    <tr>
                        <td><center><?php echo $show->invoice ?></center></td>
                        <td><center><?php echo $show->nama_pemesan ?></center></td>
                        <td><center><?php echo $show->alamat ?></center></td>
                        <td><center><?php echo $show->email ?></center></td>
                        <td><center><?php echo $show->no_telp ?></center></td>
                        <!-- <td><center><?php echo $show->nama_paket ?></center></td> -->
                        <td style="vertical-align:middle;text-align:center"><center>
                           <?php 
                            $paket = $this->Paket_wisatum_model->get_paket_wisatum($show->nama_paket);
                         
                            echo $paket->nama_paketwisata
                            ?>
                                
                            </center></td>
                        <td><center><?php echo $show->jumlah_anggota ?></center></td>
                        <td><center><?php echo 'Rp.'.number_format($show->total, 2,',','.') ?></center></td>
                        <td><center><?php echo $show->tanggal_sekarang ?></center></td>
						<td><center><?php echo $show->tanggal_pemesanan ?></center></td>
						
                    </tr>
     
                </table>

			
			</div>
			
		</div>
    </div>
</div>