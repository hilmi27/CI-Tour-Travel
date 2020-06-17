<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('admin/user/edit/'.$user['id_user'], array('enctype'=>'multipart/form-data')); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $user['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" required=""/>
						</div>
					</div>

					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" required=""/>
						</div>
					</div>
					<div class="col-md-6">
			            <label for="username" class="control-label">Level</label>
			            <div class="form-group">
			              <select name="level" class="form-control" required="">
			                <option value="">Pilih Level</option>
			                <option value="admin">Administrator</option>
			                <option value="touragent">Tour Agent</option>
			                <option value="tourguide">Tour Guide</option>

			              </select>
			            </div>
			          </div>
			<div class="col-md-7">
	            <div class="form-group">
					<label>Upload Gambar</label>
					<?php if($user['gambar']) { ?>									
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="max-width:334px; max-height:243px; position:relative;">
							<img src="<?php echo base_url('resources/upload/user/'.$user->gambar) ?>">
						</div>

					</div>
					<a class="btn btn-danger" href="<?php echo site_url('admin/user/hapusgambar/'.$user->id_user) ?>" onclick="return confirm ('are you sure')">
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