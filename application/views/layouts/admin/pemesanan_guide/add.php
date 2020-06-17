<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pemesanan Tour Guide</h3>
            </div>
            <?php echo form_open('admin/pemesanan_guide/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_pemesan" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama_pemesan" value="<?php echo $this->input->post('nama_pemesan'); ?>" class="form-control" id="nama_pemesan" />
						</div>
					</div>
				
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telephone</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="tanggal_pemesanan" class="control-label">Tanggal Pemesanan</label>
						<div class="form-group">
							<input type="text" name="tanggal_pemesanan" value="<?php echo $this->input->post('tanggal_pemesanan'); ?>" class="has-datepicker form-control" id="tanggal_pemesanan" />
						</div>
					</div>
					

					
					<!-- <div class="col-md-6">
						<label for="id_tourguide" class="control-label">Id Tourguide</label>
						<div class="form-group">
							<input type="text" name="id_tourguide" value="<?php echo $this->input->post('id_tourguide'); ?>" class="form-control" id="id_tourguide" />
						</div>
					</div> -->
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>