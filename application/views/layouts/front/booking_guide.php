<section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Pemesanan Tour Guide</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                
                <li class="active">Pemesanan Tour Guide</li>
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
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Pemesanan Tour Guide</h3>
                         <?php echo form_open('Booking_guide/add'); ?>
                        <div class="padding-top-10px">
                            <form>
                                  <input type="hidden" name="tour_guide" value="<?php echo $id ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Nama</label>
                                        <input type="text" name="nama_pemesan" value="<?php echo $this->input->post('nama_pemesan'); ?>" class="form-control" id="nama_pemesan" required="" placeholder="Nama Lengkap" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Alamat </label>
                                        <input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" required="" placeholder="Alamat Lengkap" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email </label>
                                        <input type="Email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" required="" placeholder="Email Aktif" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">No. Telephone  </label>
                                        <input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" required="" placeholder="No Telephone Aktif" />
                                    </div>
                                </div>
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Tanggal Trip   </label>
                                          <?php $tanggal = date('Y-m-d', strtotime("+6 day", strtotime(date("Y-m-d")))); ?>
                                        <input type="date" name="tanggal_pemesanan" value="<?php echo $this->input->post('tanggal_pemesanan'); ?>" min="<?php echo $tanggal; ?>" class="form-control" id="tanggal_pemesanan" required="" placeholder="dd/mm/yyyy" />
                                    </div>
                                </div>
                              
                                
                                
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-send"></i> Kirim
                                </button><br><br>

                                <div class="alert alert-warning">
                                                    <span class="label label-warning">NOTE!</span><br>
                                                    <span>1. Pastikan data yang Anda masukkan adalah data yang benar. </span><br>
                                                    <span>2. Invoice atau kode unik untuk konfirmasi pemesanan akan dikirikan ke email Anda. </span>
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