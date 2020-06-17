<div class="row">
    <div class="col-md-12">
      	<div class="box box-info"  style="padding: 20px">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah User</h3>
            </div>
          <?php echo form_open("admin/user/add", array('enctype'=>'multipart/form-data')); ?>
          	<div class="box-body">
          		<div class="row clearfix">
          <div class="col-md-6">
            <label for="nama" class="control-label">Nama</label>
            <div class="form-group">
              <input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" required=""/>
            </div>
          </div>
          
          <div class="col-md-6">
            <label for="username" class="control-label">Username</label>
            <div class="form-group">
              <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" required=""/>
            </div>
          </div>
          
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
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
          <div class="col-md-6">
              <label class="control-label">Tambahkan Foto</label>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new thumbnail" style="width: 300px; height: 200px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                  </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 200px; line-height: 20px;"></div>
                <!-- <div>
                  <span class="btn btn-success btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Pilih Gambar</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Ganti</span>
                  <input type="file" name="gambar">
                  </span>
                  <a href="#" class="btn btn-danger" data-dismiss="fileupload">
                  <i class="fa fa-trash"></i> Hapus
                  </a>
                </div> -->
                <div>
                    <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Pilih Gambar</span>
                    <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Ganti</span>
                    <input type="file" name="gambar"></span>
                        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Hapus
                        </a>
                </div>
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