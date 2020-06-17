 <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Detail Paket</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                <li><a href="Paketwisata_front" class="text-grey-4">Paket Wisata</a></li>
                <li class="active">detail</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section>

    <div class="padding-tb-40px background-light-grey">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 sticky-content">

                    <div class="background-white border border-grey-1">
                        
                            <li><img src="<?php echo site_url('resources/upload/paket_wisata/'.$detail->gambar) ?>" alt="" height="400" width="800"></li>
                        
                    </div>
                    <!-- // slider -->
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Syarat & Ketentuan</h3>
                        <div class="padding-top-10px">
                            <h7><?php echo $detail->sk ?> </h7>
                        </div>
                    </div>
                    
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Jadwal</h3>
                        <div class="padding-top-10px">
                            <h7><?php echo $detail->jadwal ?> </h7>
                        </div>
                    </div>
                   
                </div>
                <!-- // col-lg-9 -->
                <div class="col-lg-4 sticky-sidebar">

                    <!-- detailed -->
                    <div class="background-white border border-grey-1 padding-30px margin-bottom-30px">
                        <h5 class="font-weight-700"><?php echo $detail->nama_paketwisata ?></h5>

                        
                        <div class="alert alert-success margin-tb-15px border-radius-0" role="alert">
                            Fasilitas
                        </div>

                        <ul class="row padding-0px margin-0px list-unstyled no-gutters">
                            
                            <li class="col-lg-12 margin-bottom-20px">
                                 <span><?php echo $detail->fasilitas ?></span>
                            </li>
                            
                            
                        </ul>

                       
                        <div class="margin-bottom-8px text-extra-small">
                            <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><?php echo 'Rp. '.number_format($detail->harga, 2,',','.') ?> /pax</strong>
                        </div>
                        <a href="<?php echo site_url('Booking/detail/'.$detail->id_paketwisata) ?>" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase">Booking Paket </a>
                        
                    </div>
                    <!-- // detailed -->

                    <!-- Amenities  -->
                    
                    <!-- Amenities  -->

                    <!-- Need help ? -->
                    
                    <!-- // Need help  -->


                </div>
                <!-- // col-lg-3 -->
            </div>
            <!-- // row -->

        </div>
        <!-- // container -->
    </div>