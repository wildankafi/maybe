<?php $this->load->view('headeradmin');?>


<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <center>
                    <a href="<?php echo site_url('Update/list_gejala')?>"><img src="<?php echo base_url('web/images/update_gejala.png')?>" alt=""></a><br>
                    <a href="<?php echo site_url('Update/list_tips')?>"><img src="<?php echo base_url('web/images/update_tips.png')?>" alt=""></a><br>
                    </center>
                </div>
            </div>

        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
