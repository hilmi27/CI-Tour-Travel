<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <a href="<?php echo site_url('admin/galeri/index'); ?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i></a>

                <h3 class="box-title">Tambah Galeri</h3>
            </div>
            
            <?php echo form_open("admin/galeri/add", array('enctype'=>'multipart/form-data')); ?>
            <div class="box-body" style="padding: 20px">
              <div class="row clearfix">
                <div class="col-md-6">
                    <label class="control-label" for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama"  required="">
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
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" name="submit" class="btn btn-success">
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