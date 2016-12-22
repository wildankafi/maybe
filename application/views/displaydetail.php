<?php $this->load->view('headerhome');?>
<!-- single -->
	
	<div class="single">
		<div class="container">
		<?php foreach ($query as $row):?>
			<div class="col-md-8 single-left">
				<h3><?php echo $row->judul_tips;?></h3>
				<ul>
					
				</ul>
				<img src="<?php echo base_url();?>upload/<?php echo $row->gambar;?>" alt=" " class="img-responsive" />
				<p><?php echo $row->deskripsi_tips;?></p>
				<?php endforeach;?>
				
			</div>
			<div class="col-md-4 single-right">
                <div class="recent">
                    <h4>Recent Posts</h4>
                    <?php 
                        foreach ($query as $row) {
                        if ($row->id_tips){?>
                    <ul>
                        <li><a href="#"><?php echo "$row->judul_tips" ?></a><span><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><?php echo "$row->tgl" ?></span></li>
                        
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
            </div
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->
<?php $this->load->view('footerhome');?>