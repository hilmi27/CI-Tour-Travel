<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/tour_guide/index'); ?>" class="btn btn-danger"><i class="fa  fa-arrow-circle-left"></i> </a>
              	<h3 class="box-title">Tour Guide Edit</h3>
            </div>
			<?php echo form_open('admin/tour_guide/edit/'.$tour_guide->id_tourguide); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_tourguide" class="control-label">Nama Tour guide</label>
						<div class="form-group">
							<input type="text" name="nama_tourguide" value="<?php echo ($this->input->post('nama_tourguide') ? $this->input->post('nama_tourguide') : $tour_guide->nama_tourguide); ?>" class="form-control" id="nama_tourguide" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
						<div class="form-group">
							<input type="date" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $tour_guide->tanggal_lahir); ?>" class="form-control" id="tanggal_lahir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $tour_guide->alamat); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $tour_guide->no_telp); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bahasa" class="control-label">Bahasa</label>
						<div class="form-group">
							<input type="text" name="bahasa" value="<?php echo ($this->input->post('bahasa') ? $this->input->post('bahasa') : $tour_guide->bahasa); ?>" class="form-control" id="bahasa" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $tour_guide->harga); ?>" class="form-control" id="harga" />
						</div>
					</div>

					<div class="col-md-6">
							<label>
													Foto
												</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url('resources/upload/user/'.$tour_guide->gambar); ?>" alt=""  />
													</div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
									<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Pilih Foto</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
									<input type="file">
									</span>
									<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
									<i class="fa fa-times"></i> Remove
														</a>
								</div>
								</div>
						</div>
					<!-- <div class="col-md-6">
						<label for="gambar" class="control-label">Gambar</label>
						<div class="form-group">
							<input type="file" name="gambar" value="<?php echo ($this->input->post('gambar') ? $this->input->post('gambar') : $tour_guide->gambar); ?>" class="form-control" id="gambar" />
						</div>
					</div> -->

					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
		                  <option value="">--Pilih Status--</option>
		                  <option value="1" <?php if($status == 1) { echo "selected"; }?>>Aktif</option>
		                  <option value="2" <?php if($status == 2) { echo "selected"; }?>>Tidak Aktif</option>
		               </select>
						</div>
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