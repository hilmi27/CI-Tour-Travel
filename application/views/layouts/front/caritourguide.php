<section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Daftar Tour Guide</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                <li><a href="#" class="text-grey-4">Pemesanan</a></li>
                <li class="active">Tour Guide</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section><br>

    <!-- pencarian -->
        <div class="row justify-content-md-center">
            <div class="col-lg-5 text-center">
            <form class="input-group input-group-lg" class="form-inline" action="<?php echo site_url('Paket_wisata/cari');?>" method="get">
                <input type="text" class="form-control" placeholder="Enter your text" aria-label="Text input with dropdown button" name="cari">
                                
                <span class="input-group-btn">
                    <button class="btn btn-secondary background-main-color border-0 " type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
           </form>
           </div>
        </div>
        <!-- pencarian -->

     <div class="padding-tb-40px background-light-grey">
        <div class="container">

            <div class="row">
                 <?php 
                  
                    foreach ($tour_guide as $t)
                    if ($t->status==1) {
                    ?>

                <!-- Content -->

                <!-- hotel post -->
                <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                    <div class="hotel-grid background-white border border-grey-1 with-hover">
                        <div class="hotel-img position-relative">
                            <div class="hover-option background-main-color opacity-6"></div>
                            <center>
                                <img src="<?php echo site_url('resources/upload/tour_guide/'.$t->gambar); ?>" alt="" width="150" height="200">
                            </center>
                        </div>
                        <div class="padding-20px">
                            <center><h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">
                                <?php echo $t->nama_tourguide ?>
                            </a></h3></center>
                           
                            <h3 class="text-medium">Menguasai bahasa <?php echo $t->bahasa ?></h3>
                            <div class="margin-bottom-8px text-uppercase text-extra-small">
                                <strong class="text-medium text-third-color padding-right-5px font-weight-bold">IDR. <?php echo $t->harga ?> /</strong>Hari
                            </div>
                            <a href="<?php echo site_url('Booking_guide/detail/'.$t->id_tourguide); ?>" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">Booking Guide </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
               <div class="clearfix"></div>
            </div>
            
                <br><br>

                <div class="alert alert-warning">
                <span class="label label-warning">Cara melakukan pemesanan :</span><br>
                    <span> 1. Klik "Booking Guide" pada menu pemesanan -> tour guide</span><br>
                    <span> 2. Isikan biodata anda. Email harus aktif karena kode unik untuk konfirmasi pemesanan akan dikirim via email.</span><br>
                    <span> 3. Jika sudah menerima email, salin kode unik (invoice)</span><br>
                    <span> 4. Lakukan pembayaran sesuai total yang dikirim via email</span><br>
                    <span> 5. Lakukan konfirmasi pembayaran dengan memasukkan kode invoice dan upload bukti pembayaran</span><br>
                    <span> 6. Admin akan melakukan validasi</span>
                    </div>
        </div>
    </div>
