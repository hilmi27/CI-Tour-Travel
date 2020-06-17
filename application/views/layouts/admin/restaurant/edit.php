<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
            <a href="<?php echo site_url('admin/restaurant/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>

              	<h3 class="box-title">Edit Rumah Makan</h3>
            </div>
			<?php echo form_open('admin/restaurant/edit/'.$restaurant->id_restaurant, array('enctype'=>'multipart/form-data')); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_restaurant" class="control-label">Nama Rumah Makan</label>
						<div class="form-group">
							<input type="text" name="nama_restaurant" value="<?php echo ($this->input->post('nama_restaurant') ? $this->input->post('nama_restaurant') : $restaurant->nama_restaurant); ?>" class="form-control" id="nama_restaurant" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $restaurant->alamat); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $restaurant->no_telp); ?>" class="form-control" id="no_telp" />
						</div>
					</div>

				<div class="col-md-6">
	            <div class="form-group">
					<label>Upload Gambar</label>
					<?php if($restaurant->gambar) { ?>									
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="max-width:334px; max-height:243px; position:relative;">
							<img src="<?php echo base_url('resources/upload/restaurant/'.$restaurant->gambar) ?>">
						</div>

					</div>
					<a class="btn btn-danger" href="<?php echo site_url('admin/restaurant/hapusgambar/'.$restaurant->id_restaurant) ?>" onclick="return confirm ('are you sure')">
						Hapus Gambar
					</a>

					<?php } else { ?>
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="max-width:334px; max-height:243px;"><img src="<?php echo base_url('resources/img/400x300.jpg') ?>" alt=""/>
						</div>
						<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;"></div>
						<div>
							<span class="btn btn-primary btn-file"><span class="fileupload-new">Pilih Gambar</span>
							<span class="fileupload-exists">Ganti</span>
								<input type="file" name="gambar">
							</span>
							<a href="#" class="btn fileupload-exists btn-primary" data-dismiss="fileupload">
								Hapus
							</a>
						</div>
					</div>
					<?php } ?>
				</div>
	        </div>
          </div>
					<!-- <div class="col-md-6">
						<label for="gambar" class="control-label">Gambar</label>
						<div class="form-group">
							<input type="text" name="gambar" value="<?php echo ($this->input->post('gambar') ? $this->input->post('gambar') : $restaurant->gambar); ?>" class="form-control" id="gambar" />
						</div>
					</div> -->
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Simpan
				</button>
				<a href="<?php echo base_url("admin/restaurant") ?>" class="btn btn-danger">
					<i class="fa fa-close"></i> Kembali
				</a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>