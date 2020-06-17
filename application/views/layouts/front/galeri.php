 <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Galeri</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                <li class="active">Galeri</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section>


     <div class="margin-tb-40px">
        <div class="container">
            <div class="section-title section-title-center">
                <h1 class="title"><span>Galeri</span> Genpi</h1>
                <span class="section-title-des"></span>
            </div>
            <div class="row">
                <ul class="row padding-0px margin-0px list-unstyled">

                    <?php 
                    foreach ($galeri as $g) {
                    ?>

                       <li class="col-lg-3 col-md-6 margin-bottom-30px">
                        <div class="with-hover">
                            <img src="<?php echo site_url('resources/upload/'.$g['gambar']); ?>" alt="<?php echo $g['nama']; ?>" height="250" width="400">
                            <a href="<?php echo site_url('resources/upload/'.$g['gambar']); ?>" data-toggle="lightbox" data-gallery="example-gallery" class="d-block hover-option background-main-color img-fluid">
                                <h1 class="text-center text-white padding-top-n-40"><i class="fa fa-search"></i></h1>
                            </a>
                        </div>
                    </li>
                    
                    <?php } ?>
                </ul>

              
            </div>
        </div>
    </div>