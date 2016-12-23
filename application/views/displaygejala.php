<?php $this->load->view('headerhome');?>

<!-- single -->
    <div class="single">
        <div class="container">
            <div class="col-md-8 single-left">
            
                <div class="blog-item">
                    <div class="row">
        
                      <div class="col-lg-10 col-sm-10">
                       <?php
                        foreach ($query as $row) {
                            if ($row->id_gejala){} ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-10 col-sm-10">
                        <h1>
                          <a href="<?php echo base_url();?>index.php/Gejala/selanjutnya/<?php echo $row->id_gejala;?>">
                            <?php echo $row->judul_artikel ?>
                          </a>
                        </h1>
                        <h4>Gejala : <?php echo $row->nama_gejala?></h4>
                        <br><?php $string = $row->deskripsi_gejala;
                            $string = word_limiter($string, 70);
                            echo $string."...";?>
                        </br> 
                        <a href="<?php echo base_url();?>index.php/Gejala/selanjutnya/<?php echo $row->id_gejala;?>" class="btn btn-primary">
                          Continue Reading
                        </a><p></p>
                        <?php
                            // end looping product
                                }
                            ?>
                      </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 single-right">
                <div class="recent">
                    <h4>Recent Posts</h4>
                    <?php 
                        foreach ($query as $row) {
                        if ($row->id_gejala){?>
                    <ul>
                        <li><a href="#"><?php echo "$row->judul_artikel"?></a><span><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span></li>
                       
                    </ul>
                    <?php
                     } 
                        }
                        ?>
                </div>
                <div class="categories">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="<?php echo site_url('Tips/tips_ibu')?>">Tips Ibu</a></li>
                        <li><a href="<?php echo site_url('Tips/tips_bayi')?>">Tips Bayi</a></li>
                        <li><a href="<?php echo site_url('Gejala')?>">Info Gejala</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //single -->



<?php $this->load->view('footerhome');?>

