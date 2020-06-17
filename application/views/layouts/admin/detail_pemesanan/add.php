<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pemesanan Paket Wisata</h3>
            </div>
            <?php echo form_open('admin/detail_pemesanan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_pemesanan" class="control-label">ID Pemesanan</label>
						<div class="form-group">
							<input type="text" name="id_pemesanan" value="<?php echo $this->input->post('id_pemesanan'); ?>" class="form-control" id="id_pemesanan" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="id_paketwisata" class="control-label">ID Paket Wisata</label>
						<div class="form-group">
							<input type="text" name="id_paketwisata" value="<?php echo $this->input->post('id_paketwisata'); ?>" class="form-control" id="id_paketwisata" />
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