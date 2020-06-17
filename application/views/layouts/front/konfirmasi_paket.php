<section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Konfirmasi</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                
                <li class="active">Konfirmasi Pembayaran</li>
            </ol>
            <div class="clearfix"></div>
        </div>
</section>

<div class="padding-tb-40px background-light-grey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                    

                    <!-- form -->
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Konfirmasi Pembayaran</h3>
                        <?php echo form_open('Konfirmasi_paket/add' , array('enctype'=>'multipart/form-data')); ?>
                        <div class="padding-top-10px" style="padding: 20px">
                            
                                <div class="form-row" >
                                    
                                    <div class="form-group col-md-7">
                                        <label for="invoice">Invoice</label>
                                        <input type="text" name="invoice" value="<?php echo $this->input->post('invoice'); ?>" class="form-control" id="invoice" required="" />
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    
                                  <div class="form-group col-md-7">
                                    <div class="form-group">
                                                <label>
                                                    Upload Bukti Pembayaran
                                                </label>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 300px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                                                            <input type="file" name="gambar">
                                                        </span>
                                                        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            </div>

                                </div>
                               
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-send"></i> Kirim
                </button><br><br>

                <div class="alert alert-warning">
                                                    <span class="label label-warning">NOTE!</span>
                                                    <span> Invoice adalah kode unik yang telah dikirimkan ke email anda. Salin atau masukkan kode tersebut di kolom invoice di atas. Jika nomor invoice yang anda masukkan salah maka konfirmasi pembayaran anda tidak dapat dilakukan. </span>
                                                </div>
            
                            </form>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <!-- form -->


            </div>
                <!-- // col-lg-8 -->
        </div>
            <!-- // row -->
    </div>
        <!-- // container -->
</div>