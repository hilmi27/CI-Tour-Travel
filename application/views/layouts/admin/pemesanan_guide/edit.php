<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 20px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/pemesanan_guide/index'); ?>" class="btn btn-danger"><i class="fa  fa-arrow-circle-left"></i> </a>
              	<h3 class="box-title">Pemesanan Tour Guide</h3>
            </div>
			<?php echo form_open('admin/pemesanan_guide/edit/'.$pemesanan_tourguide->id_pemesananguide); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_pemesan" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama_pemesan" value="<?php echo ($this->input->post('nama_pemesan') ? $this->input->post('nama_pemesan') : $pemesanan_tourguide->nama_pemesan); ?>" class="form-control" id="nama_pemesan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_paket" class="control-label">Nama Tour Guide</label>
						<div class="form-group">
							<input type="text" name="id_tourguide" value="<?php echo ($this->input->post('id_tourguide') ? $this->input->post('id_tourguide') : $pemesanan_tourguide->id_tourguide); ?>" class="form-control" id="id_tourguide" />
						</div>
					</div>

				<!-- 	<div class="col-md-6">
						<label for="id_tourguide" class="control-label">Tour Guide</label>
						<div class="form-group">
						<select name="id_tourguide" class="form-control" required="">
                            <option value="">Pilih Tour Guide</option>
                            <?php 
                            foreach($data as $t){
                            ?>
                            <option value="<?php echo $t->id_tourguide ?>"><?php echo $t->nama_tourguide ?></option>
                            <?php 
                            } ?>
                        </select>						
					</div>
                	</div> -->

					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pemesanan_tourguide->alamat); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="email" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $pemesanan_tourguide->email); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telephone</label>
						<div class="form-group">
							<input type="number" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $pemesanan_tourguide->no_telp); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="tanggal_pemesanan" class="control-label">Tanggal Pemesanan</label>
						<div class="form-group">
							<input type="date" name="tanggal_pemesanan" value="<?php echo ($this->input->post('tanggal_pemesanan') ? $this->input->post('tanggal_pemesanan') : $pemesanan_tourguide->tanggal_pemesanan); ?>" class="form-control" id="tanggal_pemesanan" />
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