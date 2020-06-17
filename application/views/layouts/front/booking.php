<section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Pemesanan Paket Wisata</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                
                <li class="active">Pemesanan Paket Wisata</li>
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
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Pemesanan Paket Wisata</h3>
                        <?php echo form_open('booking/add'); ?>
                        <div class="padding-top-10px">
                            
                                <input type="hidden" name="nama_paket" value="<?php echo $id ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama_pemesan" value="<?php echo $this->input->post('nama_pemesan'); ?>" class="form-control" id="nama_pemesan" required="" placeholder= "Nama Lengkap" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="alamat">Alamat </label>
                                        <input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" required="" placeholder="Alamat Lengkap" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email </label>
                                        <input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" required="" placeholder="Email Aktif" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="no_telp">No. Telephone  </label>
                                        <input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" required="" placeholder="No Telephone Aktif" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="anggota">Jumlah</label>
                                        <input type="number" name="jumlah_anggota" value="<?php echo $this->input->post('jumlah_anggota'); ?>" class="form-control" id="jumlah_anggota" required="" placeholder="Jumlah" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Trip</label>
                                        <?php $tanggal = date('Y-m-d', strtotime("+6 day", strtotime(date("Y-m-d")))); ?>
                                        <input type="date" class="form-control" name="tanggal_pemesanan" value="<?php echo $this->input->post('tanggal_pemesanan'); ?>"  min="<?php echo $tanggal; ?>" required>

                                       
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