<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/tour_guide/index'); ?>" class="btn btn-danger"><i class="fa  fa-arrow-circle-left"></i> </a>
              	<h3 class="box-title">Tambah Tour Guide</h3>
            </div>
            <?php echo form_open("admin/tour_guide/add", array('enctype'=>'multipart/form-data')); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-7">
						<label for="nama_tourguide" class="control-label">Nama Tour Guide</label>
						<div class="form-group">
							<input type="text" name="nama_tourguide" value="<?php echo $this->input->post('nama_tourguide'); ?>" class="form-control" id="nama_tourguide" required='' />
						</div>
					</div>
					<div class="col-md-7">
						<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
						<div class="form-group">
							<input type="date" name="tanggal_lahir" value="<?php echo $this->input->post('tanggal_lahir'); ?>" class=" form-control" id="tanggal_lahir" required="" />
							
						</div>
					</div>

					<div class="col-md-7">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" required='' />
						</div>
					</div>
					<div class="col-md-7">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" required='' />
						</div>
					</div>
					<div class="col-md-7">
						<label for="bahasa" class="control-label">Bahasa</label>
						<div class="form-group">
							<input type="text" name="bahasa" value="<?php echo $this->input->post('bahasa'); ?>" class="form-control" id="bahasa" />
						</div>
					</div>

					<div class="col-md-7">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" required='' />
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
					

					<div class="col-md-7">
		            <label class="control-label">Status</label>
			           <div class="form-group">
			               <select name="status" class="form-control">
			                  <option value="">--Pilih Status--</option>
			                  <option value="1" <?php if($status == 1) { echo "selected"; }?>>Aktif</option>
			                  <option value="2" <?php if($status == 2) { echo "selected"; }?>>Tidak Aktif</option>
			               </select>
			           </div>
		         	</div>

		         	<div class="col-md-7">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" required='' />
						</div>
					</div>

					<div class="col-md-7">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" required='' />
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
<script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal_lahir').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "yyyy-mm-dd",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });
</script>