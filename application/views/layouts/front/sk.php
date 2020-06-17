<section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Saran & Kritik</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="Main" class="text-grey-4">Home</a></li>
                
                <li class="active">Saran & Kritik</li>
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
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Saran & Kritik</h3>
                        <?php echo form_open('Sk/add'); ?>
                        <div class="padding-top-10px">
                            
                                <!-- <input type="hidden" name="nama_paket" value="<?php echo $id ?>"> -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" required="" placeholder= "Nama Lengkap" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="alamat">Nilai</label>
                                       <div class="form-group">
                             <select name="nilai" class="form-control" required="">
                                <option value="">Pilih Nilai</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                              </select>
                            
                        </div>
                                      
                                    </div>
                                </div>
                               
                                   
                                    <div class="box-body pad">
                                         <label for="fasilitas" class="control-label">Saran & Kritik</label>
                                            <div class="form-group">
                                                <textarea class="ckeditor" name="sk" value="<?php echo $this->input->post('sk'); ?>" class="form-control" id="sk" required=""> </textarea>
                                            </div>
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-send"></i> Kirim
                                </button><br><br>

                                   
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