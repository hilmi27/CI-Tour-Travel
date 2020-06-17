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
<div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="background-second-color border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class=" text-medium font-weight-700 padding-bottom-8px">Anda tidak bisa memesanan Tour Guide ini pada tanggal tersebut karena sudah dipesan. Silahkan ganti jadwal atau pesan Tour Guide yang lain.</h3>
                    </div>
                </div>
            </div>
        </div>



       <div class="padding-tb-40px background-light-grey">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                    

                    <!-- form -->
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Pemesanan Tour Guide</h3>
                         <?php echo form_open('booking_guide/add'); ?>
                        <div class="padding-top-10px">
                            <form>
                                  <input type="hidden" name="tour_guide" value="<?php echo $id ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Nama</label>
                                        <input type="text" name="nama_pemesan" value="<?php echo $this->input->post('nama_pemesan'); ?>" class="form-control" id="nama_pemesan" required="" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Alamat </label>
                                        <input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" required="" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email </label>
                                        <input type="Email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" required="" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">No. Telephone  </label>
                                        <input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" required="" />
                                    </div>
                                </div>
                                <!-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Anggota  </label>
                                        <input type="number" class="form-control">
                                    </div> -->
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Tanggal Pemesanan   </label>
                                        <input type="date" name="tanggal_pemesanan" value="<?php echo $this->input->post('tanggal_pemesanan'); ?>" class="form-control" id="tanggal_pemesanan" required="" placeholder="dd/mm/yyyy" />
                                    </div>
                                </div>
                        
                                
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-send"></i> Kirim
                </button>
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