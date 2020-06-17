 <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Daftar Rumah Makan</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="#" class="text-grey-4">Home</a></li>
                <li><a href="#" class="text-grey-4">Info</a></li>
                <li class="active">Rumah Makan</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section><br>


    <!-- pencarian -->
        <div class="row justify-content-md-center">
            <div class="col-lg-5 text-center">
            <form class="input-group input-group-lg" class="form-inline" action="<?php echo site_url('Restaurant/cari');?>" method="get">
                <input type="text" class="form-control" placeholder="Pencarian Rumah Makan" aria-label="Text input with dropdown button" name="cari">
                                
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
                    $no = $offset;
                    foreach ($data as $r) {
                    ?>
                <div class="col-lg-6 margin-bottom-30px">
                    <div class="hotel-list background-white border border-grey-1">
                        <div class="hotel-thum">
                            
                            <div class="img-in">
                                <img src="<?php echo site_url('resources/upload/restaurant/'.$r->gambar); ?>" alt=""  width = "300" height = "170">
                            </div>
                        </div>
                        <div class="padding-30px">
                            <a href="#" class="text-dark d-block text-uppercase text-medium font-weight-600 margin-bottom-5px"> <?php echo $r->nama_restaurant ?></a>
                            <small class="text-uppercase text-extra-small  d-block">
                                    <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                    <span class="text-third-color margin-right-5px">Kec. <?php echo $r->alamat ?></span>- Banyuwangi</a>
                                </small>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
<?php } ?>
                

                <div class="clearfix"></div>

            </div>
           <?php echo $halaman;?> 
        </div>

    </div>