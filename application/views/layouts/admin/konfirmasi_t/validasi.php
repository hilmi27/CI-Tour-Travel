<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/konfirmasi_t/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>
              	<h3 class="box-title">Validasi Pembayaran Tour Guide</h3>
            </div>
        </div>

        <div class="box box-info" style="padding: 20px">
			<div class="box-body">

				<table class="table table-bordered">
                    <tr style="background-color:#ccc;">
                        <th><center> Tgl Konfirmasi</center></th>
						<th><center> Invoice</center></th>
                        <th><center> Nama</center></th>
                        <th><center> Harga</center></th>
                        
                        <!-- <th><center> Tgl Transfer </center></th> -->
                        <th><center> Status </center></th>
                        
                    </tr>
                    
                    <tr>
                        <td><center><?php echo $show->tgl_sekarang ?></center></td>
                        <td><center><?php echo $show->invoice ?></center></td>
                        <td><center><?php echo $cekpesan->nama_pemesan ?></center></td>
                       
                        <td><center><?php echo 'Rp. '.number_format($cekpesan->total, 2,',','.') ?></center></td>
                        <!-- <td><center><?php echo $show->tgl_kirim ?></center></td> -->
                        <td><center>
                        	<?php
                        
                        	 if ($show->konfirm == 1) {
                           echo '<label class="label-success" style="color:white; padding:3px 10px;">Valid</label>';
                        } else if ($show->konfirm == 2) {
                           echo '<label class="label-danger" style="color:white; padding:3px 10px;">Tidak Valid</label>';
                        }  else {
                           echo '<label class="label-primary" style="color:white; padding:3px 10px;">Belum Divalidasi</label>';
                        }
                        ?>
                        </center></td>
                        
						
                    </tr>
     
                </table>

			
			</div>
			
		</div>

		<!-- <div class="box box-info"> -->
			<div class="box-body">

				<img src="<?php echo base_url('resources/upload/bukti_pembayaran/'.$show->gambar); ?>" width='350' height='350'>

			
			</div>
			
		<!-- </div> -->
<br>
		<div class="box box-info">
			<?php echo form_open('admin/konfirmasi_t/validasi/'.$konfirmasi_t->id_konfirmasi); ?>
			<div class="box-body">
				<div class="row clearfix">

			

					<div class="col-md-6">
						<div class="box-header with-border">
              	<h3 class="box-title">Validasi</h3>
            </div>
						<!-- <label for="validasi" class="control-label">Validasi</label> -->
						<div class="form-group" style="padding: 10px">
							<select name="konfirm" class="form-control">
		                  <option value=""><?php echo ($this->input->post('konfirm') ? $this->input->post('konfirm') : $konfirmasi_t->konfirm); ?></option>
		                  <option value="1" <?php if($konfirm == 1) { echo "selected"; }?>>Valid</option>
		                  <option value="2" <?php if($konfirm == 2) { echo "selected"; }?>>Tidak Valid</option>
		               </select>
						</div>
					</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Simpan
				</button>
	        </div>	
	        </div>			
			<?php echo form_close(); ?>
		</div>
    </div>
</div>