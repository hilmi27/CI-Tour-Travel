<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 10px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/tour_agent/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>

              	<h3 class="box-title">Tambah Tour Agent</h3>
            </div>
            <?php echo form_open('admin/tour_agent/add', array('enctype'=>'multipart/form-data')); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-7">
						<label for="nama_touragent" class="control-label">Nama Tour Agent</label>
						<div class="form-group">
							<input type="text" name="nama_touragent" value="<?php echo $this->input->post('nama_touragent'); ?>" class="form-control" id="nama_touragent" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					<div class="col-md-7">
							<label class="control-label">Foto</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="fileupload-new thumbnail" style="width: 250px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
									</div>
								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
									<span class="btn btn-success btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Pilih Foto</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
									<input type="file" name="gambar">
									</span>
									<a href="#" class="btn btn-danger" data-dismiss="fileupload">
									<i class="fa fa-trash"></i> Remove
									</a>
								</div>
								</div>
					</div>

					<div class="col-md-7">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
						</div>
					</div>

					<div class="col-md-7">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
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