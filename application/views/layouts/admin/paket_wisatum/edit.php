<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/paket_wisatum/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>
              	<h3 class="box-title">Edit Paket Wisata</h3>
              	
            </div>
			<?php echo form_open('admin/paket_wisatum/edit/'.$paket_wisatum->id_paketwisata, array('enctype'=>'multipart/form-data')); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_paketwisata" class="control-label">Nama Paket</label>
						<div class="form-group">
							<input type="text" name="nama_paketwisata" value="<?php echo ($this->input->post('nama_paketwisata') ? $this->input->post('nama_paketwisata') : $paket_wisatum->nama_paketwisata); ?>" class="form-control" id="nama_paketwisata" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tour_agent" class="control-label">Tour Agent</label>
						<div class="form-group">
							<select name="id_touragent" id="tour_agent" class="form-control">
								<option>Tour Agent</option>
								<?php
								foreach ($tour_agent as $t ):
								
								 
									if ($t->id_touragent == $paket_wisatum->id_touragent) {
										echo "<option value = '$t->id_touragent' selected>$t->nama_touragent</option>";
									} else {
										echo "<option value='$t->id_touragent'>$t->nama_touragent</option>";
									}
								endforeach
								  
								?>

							</select>
							
						</div>

					</div>
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="number" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $paket_wisatum->harga); ?>" class="form-control" id="harga" />
						</div>
					</div>

					<!-- <div class="col-md-6">
							<label class="control-label">Image Upload</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="fileupload-new thumbnail" style="width: 250px; height: 150px;"><img src="<?php echo base_url('resources/upload/paket_wisata/'.$paket_wisatum->gambar); ?>" alt=""  />
									</div>
								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;" ></div>
								<div>
									<span class="btn btn-success btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
									<input type="file" name="gambar" >
									</span>
									<a href="#" class="btn btn-danger" data-dismiss="fileupload">
									<i class="fa fa-trash"></i> Remove
									</a>
								</div>
								</div>
						</div> -->

						<div class="col-md-6">
	            <div class="form-group">
					<label>Upload Gambar</label>
					<?php if($paket_wisatum->gambar) { ?>									
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="max-width:334px; max-height:243px; position:relative;">
							<img src="<?php echo base_url('resources/upload/paket_wisata/'.$paket_wisatum->gambar) ?>">
						</div>

					</div>
					<a class="btn btn-danger" href="<?php echo site_url('admin/paket_wisatum/hapusgambar/'.$paket_wisatum->id_paketwisata) ?>" onclick="return confirm ('are you sure')">
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

					<div class="box-body pad">
						<label for="jadwal" class="control-label">Jadwal</label>
						<div class="form-group">
							<textarea type="text" class="ckeditor" name="jadwal"  class="form-control" id="jadwal"><?php echo ($this->input->post('jadwal') ? $this->input->post('jadwal') : $paket_wisatum->jadwal); ?></textarea>
						</div>
					</div>
					<div class="box-body pad">
						<label for="fasilitas" class="control-label">Fasilitas</label>
						<div class="form-group">
							<textarea type="text" class="ckeditor" name="fasilitas"  class="form-control" id="fasilitas"><?php echo ($this->input->post('fasilitas') ? $this->input->post('fasilitas') : $paket_wisatum->fasilitas); ?></textarea>
						</div>
					</div>

					<div class="box-body pad">
						<label for="sk" class="control-label">Syarat & Ketentuan</label>
						<div class="form-group">
							<textarea type="texskt" class="ckeditor" name="sk"  class="form-control" id="sk"><?php echo ($this->input->post('sk') ? $this->input->post('sk') : $paket_wisatum->sk); ?></textarea>
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