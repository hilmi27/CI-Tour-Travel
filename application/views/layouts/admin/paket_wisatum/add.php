<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/paket_wisatum/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>

              	<h3 class="box-title">Paket Wisata</h3>
            </div>
            <?php echo form_open("admin/paket_wisatum/add", array('enctype'=>'multipart/form-data')); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_paketwisata" class="control-label">Nama Paket</label>
						<div class="form-group">
							<input type="text" name="nama_paketwisata" value="<?php echo $this->input->post('nama_paketwisata'); ?>" class="form-control" id="nama_paketwisata" required=''/>
						</div>
					</div>

					<div class="col-md-6">
						<label for="id_touragent" class="control-label">Tour agent</label>
						<div class="form-group">
						<select name="id_touragent" class="form-control" required="">
                            <option value="">Pilih Tour Agent</option>
                            <?php 
                            foreach($tour_agent as $t){
                            ?>
                            <option value="<?php echo $t->id_touragent ?>"><?php echo $t->nama_touragent ?></option>
                            <?php 
                            } ?>
                        </select>						
					</div>
                </div>
					
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" required=""/>
						</div>
					</div>

					
						<div class="col-md-6">
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

					<div class="box-body pad" >
						<label for="jadwal" class="control-label">Jadwal</label>
						<div class="form-group">
							<textarea class="ckeditor" id='ckeditor' name="jadwal" value="<?php echo $this->input->post('jadwal'); ?>" ></textarea>
						</div>
					</div>

					<div class="box-body pad">
						<label for="fasilitas" class="control-label">Fasilitas</label>
						<div class="form-group">
							<textarea class="ckeditor" name="fasilitas" value="<?php echo $this->input->post('fasilitas'); ?>" class="form-control" id="fasilitas" required=""> </textarea>
						</div>
					</div>

					<div class="box-body pad">
						<label for="sk" class="control-label">Syarat & Ketentuan</label>
						<div class="form-group">
							<textarea class="ckeditor" name="sk" value="<?php echo $this->input->post('sk'); ?>" class="form-control" id="sk" required=""> </textarea>
						</div>
					</div>

		            </div> 
			<div class="col-md-6">
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
          	</div>
          </div>
      </div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>