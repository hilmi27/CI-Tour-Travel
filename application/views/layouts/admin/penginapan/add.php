<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
            		<a href="<?php echo site_url('admin/penginapan/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>
              	<h3 class="box-title">Tambah Penginapan</h3>
            </div>
            <?php echo form_open("admin/penginapan/add", array('enctype'=>'multipart/form-data')); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-7">
						<label for="nama_penginapan" class="control-label">Nama Penginapan</label>
						<div class="form-group">
							<input type="text" name="nama_penginapan" value="<?php echo $this->input->post('nama_penginapan'); ?>" class="form-control" id="nama_penginapan" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="kelas" class="control-label">Kelas</label>
						<div class="form-group">
							 <select name="kelas" class="form-control" required="">
				                <option value="">Pilih Kelas</option>
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
							<!-- <input type="text" name="kelas" value="<?php echo $this->input->post('kelas'); ?>" class="form-control" id="kelas" /> -->
						</div>
					</div>

					<div class="col-md-7">
							<label class="control-label">Image Upload</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="fileupload-new thumbnail" style="width: 250px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
									</div>
								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
									<span class="btn btn-success btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
									<input type="file" name="gambar">
									</span>
									<a href="#" class="btn btn-danger" data-dismiss="fileupload">
									<i class="fa fa-trash"></i> Remove
									</a>
								</div>
								</div>
					</div>

					<!-- <div class="col-md-6">
						<label for="gambar" class="control-label">Gambar</label>
						<div class="form-group">
							<input type="file" name="gambar" value="<?php echo $this->input->post('gambar'); ?>" class="form-control" id="gambar" />
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