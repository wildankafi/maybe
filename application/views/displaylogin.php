<?php $this->load->view('headerhome');?>
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <?php if($this->session->flashdata('message')){?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('message')?>
        </div>
        <?php } ?>
        <div class="form-bottom">
            <?php echo validation_errors(); ?>
            <?php echo form_open('login/check_auth'); ?>
            <!--akan diteruskan pad verifylogin pada controller-->
            <div class="form-group">
                <label class="sr-only" for="form-username">Username</label>
                <input type="text" name="username" placeholder="username" class="form-username form-control" id="form-username">
            </div>
            <div class="form-group">
                <label class="sr-only" for="form-password">Password</label>
                <input type="password" name="password" placeholder="password" class="form-password form-control" id="form-password">
            </div>
            <center><button type="submit" class="btn btn-success">Log in!</button></center>
            </form>

        </div>
    </div>
</div>


<?php $this->load->view('footerhome');?>