<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/galeri/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>
              	<h3 class="box-title">Edit Galeri</h3>
            </div>
			<?php echo form_open('admin/galeri/edit/'.$galeri->id_galeri,array('enctype'=>'multipart/form-data')); ?>
			<div class="box-body" style="padding: 20px">
				<div class="row clearfix">
					<div class="col-md-7">
						<div class="form-group">
						<label class="control-label" for="nama">Nama / Judul</label>
                   	 	<input type="text" name="nama" class="form-control" id="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $galeri->nama);  ?>"  required="">
						</div>
					</div>
				<div class="col-md-7">
	            <div class="form-group">
					<label>Upload Gambar</label>
					<?php if($galeri->gambar) { ?>									
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="max-width:334px; max-height:243px; position:relative;">
							<img src="<?php echo base_url('resources/upload/'.$galeri->gambar) ?>">
						</div>

					</div>
					<a class="btn btn-danger" href="<?php echo site_url('admin/galeri/hapusgambar/'.$galeri->id_galeri) ?>" onclick="return confirm ('are you sure')">
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
				<a href="<?php echo base_url("admin/galeri") ?>" class="btn btn-danger">
					<i class="fa fa-close"></i> Kembali
				</a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>