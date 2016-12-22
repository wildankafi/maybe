<?php $this->load->view('headerhome');?>

<!-- banner --> 
    <div class="banner">
        <div class="container">
            <div class="wmuSlider example1">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;"> 
                        <div class="banner-wrap">
                            <div class="banner1">
                                
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;"> 
                        <div class="banner-wrap">
                            <div class="banner2">
                                
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;"> 
                        <div class="banner-wrap">
                            <div class="banner3">
                                
                            </div>
                        </div>
                    </article>
                </div>
            </div>
                            <script src="<?php echo base_url('web/js/jquery.wmuSlider.js')?>"></script> 
                            <script>
                                $('.example1').wmuSlider();         
                            </script> 
        </div>
    </div>
<!-- //banner -->
<!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="banner-pos">
                <div class="banner-pos-grid">
                    <div class="col-xs-4 banner-pos-grid1">
                        <span> </span>
                    </div>
                    <div class="col-xs-8 banner-pos-grid2">
                        <h3>WEB APLIKASI MAYBE</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="banner-pos-grid banner-pos-grid-sub">
                    <div class="col-xs-4 banner-pos-grid1-sub">
                        <span> </span>
                    </div>
                    <div class="col-xs-8 banner-pos-grid2">
                        <h3>TIPS IBU by MAYBE</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="banner-pos-grid banner-pos-grid-sub1">
                    <div class="col-xs-4 banner-pos-grid1-sub1">
                        <span> </span>
                    </div>
                    <div class="col-xs-8 banner-pos-grid2">
                        <h3>TIPS BAYI by MAYBE</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="banner-pos-grid banner-pos-grid-sub2">
                    <div class="col-xs-4 banner-pos-grid1-sub2">
                        <span> </span>
                    </div>
                    <div class="col-xs-8 banner-pos-grid2">
                        <h3>INFO GEJALA by MAYBE</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            
        </div>
    </div>
<!-- //banner-bottom -->
<!-- events -->
    <div class="events">
        <div class="container">
            <div class="events-grids">
                <div class="col-md-6 events-grid">
                    <h3>Sekilas tentang Web Aplikasi MAYBE</h3>
                    <div class="events-grid-main">
                        <a class="link" href="#"></a>
                      <div class="overlay">
                        <div class="arrow-left"></div>
                        <div class="rectangle"></div>
                      </div>

                      <div class="description">
                        <p>MAYBE (Mom and Baby Care) merupakan sistem yang berbasis website dimana untuk mengaksesnya diperlukan koneksi ke internet. Setelah terhubung ke internet user dapat mengakses website MAYBE. Halaman website ini telah terhubung dengan server dan database, dimana admin dapat melakukan update gejala, tambah gejala, update tips dan tambah tips. Sebelum admin melakukan hal tersebut, admin diharuskan untuk login terlebih dahulu. Para pengguna dapat melakukan interaksi MAYBE (Mom and Baby Care) online. Dan segala interaksi yang terjadi di sistem akan disimpan ke dalam database.</p>
                      </div>
                        <img src="<?php echo base_url('web/images/4.jpg')?>" alt=" " class="img-responsive" />
                    </div>
                </div>
                        <?php 
                            foreach ($query as $row) 
                            {
                            if ($row->id_tips < 3){
                            ?>
                            
                <div class="col-md-6 events-grid">
                    <div class="events-grid1">
                        <div class="col-md-4 events-grid1-left">
                        </div>
                            <div class="col-md-8 events-grid1-right">
                            
                                <h4><a href="<?php echo base_url();?>index.php/Tips/selanjutnya/<?php echo $row->id_tips;?>"><?php echo "$row->judul_tips"?></a></h4>
                                <p><?php $string = $row->deskripsi_tips; 
                                $string = word_limiter($string, 30);
                                echo $string;
                                 ?></p>
                                <a href="<?php echo base_url();?>index.php/Tips/selanjutnya/<?php echo $row->id_tips;?>" class="btn btn-primary">
                          Continue Reading
                        </a><p></p>
                            </div>
                        <div class="clearfix"> </div>                                            
                    </div>
                </div>
                            <?php
                                }
                                }
                            ?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

<!-- //events -->
<!-- companies -->
    <div class="companies">
        <div class="container">
    </div>
<!-- //companies -->



<?php $this->load->view('footerhome');?>