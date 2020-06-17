<div class="row">
    <div class="col-md-12">
      	<div class="box box-info" style="padding: 10px">
            <div class="box-header with-border">
            	<a href="<?php echo site_url('admin/tour_agent/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>
              	<h3 class="box-title">Edit Tour Agent</h3>
            </div>
			<?php echo form_open('admin/tour_agent/edit/'.$tour_agent->id_touragent); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-7">
						<label for="nama_touragent" class="control-label">Nama Touragent</label>
						<div class="form-group">
							<input type="text" name="nama_touragent" value="<?php echo ($this->input->post('nama_touragent') ? $this->input->post('nama_touragent') : $tour_agent->nama_touragent); ?>" class="form-control" id="nama_touragent" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $tour_agent->email); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $tour_agent->alamat); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $tour_agent->no_telp); ?>" class="form-control" id="no_telp" />
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