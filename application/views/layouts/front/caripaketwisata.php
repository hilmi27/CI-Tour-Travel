 <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Daftar Paket Wisata</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                <li><a href="#" class="text-grey-4">Pemesanan</a></li>
                <li class="active">Paket Wisata</li>
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
                  
                    foreach ($paket_wisata as $p) {
                    ?>
                <!-- tour post -->

                
                <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                    <div class="hotel-grid background-white border border-grey-1 with-hover">
                        <div class="hotel-img position-relative">
                            <div class="hover-option background-main-color opacity-6"></div>
                            <img src="<?php echo site_url('resources/upload/paket_wisata/'.$p->gambar); ?>" alt="" width="400" height="200">
                        </div>
                        <div class="padding-20px">
                            <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">
                                
                                <?php echo $p->nama_paketwisata ?>
                            </a></h3>
                            <!-- <small class="text-uppercase text-extra-small">
                                    <i class="fa fa-clock-o margin-right-5px text-orange"></i>
                                    <span class="margin-right-25px">1 Hari</span>

                                    
                                </small> -->
                            <div class="claerfix"></div>
                            <!-- <i class="d-block padding-tb-8px text-grey-2 ">Wedi Ireng - Pantai Mustika</i> -->
                            <div class="margin-bottom-8px text-uppercase text-extra-small">
                                <strong class="text-medium text-third-color padding-right-5px font-weight-bold">
                                    IDR. <?php echo $p->harga ?></strong>
                            </div>
                           <a href="Detail_paket/detail/<?php echo $p->id_paketwisata ?>" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">Detail Paket</a>
                        </div>
                    </div>
                </div>
                <!-- //  tour post -->


                <!-- tour post -->
               
                <!-- //  tour post -->

                <?php } ?>
                <!-- tour post -->
                               <!-- //  tour post -->

                <div class="clearfix"></div>

            </div>


            <!-- // Content -->

           

        </div>
        <!-- //  container -->
    </div>