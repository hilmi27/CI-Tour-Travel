<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/penginapan/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>
              	<h3 class="box-title">Edit Penginapan</h3>
            </div>
			<?php echo form_open('admin/penginapan/edit/'.$penginapan->id_penginapan, array('enctype'=>'multipart/form-data')); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_penginapan" class="control-label">Nama Penginapan</label>
						<div class="form-group">
							<input type="text" name="nama_penginapan" value="<?php echo ($this->input->post('nama_penginapan') ? $this->input->post('nama_penginapan') : $penginapan->nama_penginapan); ?>" class="form-control" id="nama_penginapan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $penginapan->alamat); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kelas" class="control-label" >Kelas</label>
						<div class="form-group">
							<select name="kelas" class="form-control" required="">
				                <option value=""><?php echo ($this->input->post('kelas') ? $this->input->post('kelas') : $penginapan->kelas); ?></option>
				                <option value="bintang 1">Bintang 1</option>
				                <option value="bintang 2">Bintang 2</option>
				                <option value="bintang 3">Bintang 3</option>
				                <option value="bintang 4">Bintang 4</option>
				                <option value="bintang 5">Bintang 5</option>
				                <option value="melati 1">Melati 1</option>
				                <option value="melati 2">Melati 2</option>
				                <option value="melati 3">Melati 3</option>
				                <option value="melati 4">Melati 4</option>
				                <option value="melati 5">Melati 5</option>
				              </select>
							<!-- <input type="text" name="kelas" value="<?php echo ($this->input->post('kelas') ? $this->input->post('kelas') : $penginapan->kelas); ?>" class="form-control" id="kelas" /> -->
						</div>
					</div>

			<div class="col-md-7">
	            <div class="form-group">
					<label>Upload Gambar</label>
					<?php if($penginapan->gambar) { ?>									
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="max-width:334px; max-height:243px; position:relative;">
							<img src="<?php echo base_url('resources/upload/penginapan/'.$penginapan->gambar) ?>">
						</div>

					</div>
					<a class="btn btn-danger" href="<?php echo site_url('admin/penginapan/hapusgambar/'.$penginapan->id_penginapan) ?>" onclick="return confirm ('are you sure')">
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
							<input type="file" name="gambar" value="<?php echo ($this->input->post('gambar') ? $this->input->post('gambar') : $penginapan->gambar); ?>" class="form-control" id="gambar" />
						</div>
					</div> -->
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Simpan
				</button>
				<a href="<?php echo base_url("admin/penginapan") ?>" class="btn btn-danger">
					<i class="fa fa-close"></i> Kembali
				</a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>