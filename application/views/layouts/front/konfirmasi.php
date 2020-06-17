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

            <div class="row">

                    <!-- form -->
                    <div class="col-lg-8 sticky-content">
                    <div class="background-white border border-grey-1 padding-30px ">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Konfirmasi Pembayaran</h3>
                        <?php echo form_open('Konfirmasi/add' , array('enctype'=>'multipart/form-data')); ?>
                        <div class="padding-top-10px">
                            
                                <div class="form-row">
                                    <div class="form-group col-md-7">
                                        <label for="invoice">Pembayaran</label>
                                        <select name="pembayaran" class="form-control">
                                          <option value="paket">Paket Wisata</option>
                                          <option value="tour">Tour Guide</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="invoice">Invoice</label>
                                        <input type="text" name="invoice" value="<?php echo $this->input->post('invoice'); ?>" class="form-control" id="invoice" required="" />
                                    </div>
                                </div>
                                <!-- <div class="form-row">
                                    
                                    <div class="form-group col-md-7">
                                        <label for="nama">Nama Lengkap Rekening Transfer </label>
                                        <input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" required="" />
                                    </div>

                                    <div class="form-group col-md-7">
                                        <label for="jumlah">Jumlah Transfer</label>
                                        <input type="number" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" required="" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    

                                    <div class="form-group col-md-7">
                                        <label for="tgl_kirim">Tanggal Transfer  </label>
                                        <input type="date" name="tgl_kirim" value="<?php echo $this->input->post('tgl_kirim'); ?>" class="form-control" id="tgl_kirim" required="" />
                                    </div>
                                   
                                </div> -->
                                <div class="form-row">
                                    
                                  <div class="form-group col-md-7">
                                    <div class="form-group">
                                                <label>
                                                    Bukti Pembayaran
                                                </label>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 300px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Pilih Gambar</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Ganti</span>
                                                            <input type="file" name="gambar">
                                                        </span>
                                                        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Hapus
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            </div>

                                </div>
                               
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-send"></i> Kirim
                </button><br><br>

                
            
                            
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <!-- form -->


            </div>
                <!-- // col-lg-8 -->
            

            <div class="col-lg-4 sticky-sidebar">
                <div class="background-white border border-grey-1 padding-30px margin-bottom-30px">
                        <div class="alert alert-success margin-tb-15px border-radius-0" role="alert">
                            Cara Konfirmasi Pembayaran
                        </div>

                         <div class="alert alert-warning" >
               
                    <span> 1. Masuk ke menu pembayaran atau klik link yang dikirimkan ke email saat melakukan pemesanan</span><br>
                    <span> 2. Pilih jenis pembayaran di kolom pembayaran</span><br>
                    <span> 3. Masukkan Invoice (kode yang dikirim ke email saat melakukan pemesanan) di kolom invoice</span><br>
                    <span> 4. Masukkan bukti pembayaran yang telah dilakukan</span><br>
                    
                </div>

                        <div class="alert alert-warning" >
                            <span class="label label-warning">NOTE!</span><br>
                            <span > Jika invoice yang anda masukkan salah maka konfirmasi pembayaran anda tidak dapat dilakukan. </span>
                        </div>
                        
                </div>
            </div>
        </div>
            <!-- // row -->
    </div>
        <!-- // container -->
</div>