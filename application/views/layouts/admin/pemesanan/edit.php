<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/pemesanan/index'); ?>" class="btn btn-danger"><i class="fa  fa-arrow-circle-left"></i> </a>
              	<h3 class="box-title">Pemesanan Paket Wisata</h3>
            </div>
			<?php echo form_open('admin/pemesanan/edit/'.$pemesanan->id_pemesanan); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_pemesan" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama_pemesan" value="<?php echo ($this->input->post('nama_pemesan') ? $this->input->post('nama_pemesan') : $pemesanan->nama_pemesan); ?>" class="form-control" id="nama_pemesan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_paket" class="control-label">Nama Paket</label>
						<div class="form-group">
							<input type="text" name="nama_paket" value="<?php echo ($this->input->post('nama_paket') ? $this->input->post('nama_paket') : $pemesanan->nama_paket); ?>" class="form-control" id="nama_paket" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pemesanan->alamat); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="email" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $pemesanan->email); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telephone</label>
						<div class="form-group">
							<input type="number" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $pemesanan->no_telp); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah_anggota" class="control-label">Jumlah Anggota</label>
						<div class="form-group">
							<input type="number" name="jumlah_anggota" value="<?php echo ($this->input->post('jumlah_anggota') ? $this->input->post('jumlah_anggota') : $pemesanan->jumlah_anggota); ?>" class="form-control" id="jumlah_anggota" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_pemesanan" class="control-label">Tanggal Pemesanan</label>
						<div class="form-group">
							<input type="date" name="tanggal_pemesanan" value="<?php echo ($this->input->post('tanggal_pemesanan') ? $this->input->post('tanggal_pemesanan') : $pemesanan->tanggal_pemesanan); ?>" class="form-control" id="tanggal_pemesanan" />
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