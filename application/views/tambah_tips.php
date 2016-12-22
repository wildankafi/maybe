<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="typo">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="title">TAMBAH Tips</h1>
                </div>
            </div>
            <div class="row">
                <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
                    <tr>
                        <td width="97%">
                            <center>
                                <div id="form_input">
                                    <?php echo form_open_multipart('tips/do_upload');?>
        
                                    <table>
                                        <?php echo form_open('tips/insert_datatips');?>
                                        <tr>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Judul Tips</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="judul_tips" name="judul_tips" placeholder="Inputkan tips" value="" style="margin:3px;">
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Deskripsi Tips</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" class="form-control" id="deskripsi_tips" name="deskripsi_tips" placeholder="Deskripsi tips" value="" style="margin:3px; height: 302px;"></textarea>
                                                </div>
                                            </div>
                                          <tr>
                                         <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Tips</label>
                                                <div class="col-sm-10"">     
                                              <input type="radio" name="jenis" value="Tips Ibu Hamil" required>Ibu Hamil &nbsp &nbsp &nbsp &nbsp &nbsp
                                                <input type="radio" name="jenis" value="Tips Bayi" required>Bayi      
                                                </div>
                                                </div>
                                        </tr> 
                                                <tr>
                                         
                                          <div class="form-group">
                                               <label for="name" class="col-sm-2 control-label" style="text-align: left;">Tanggal</label>
                                                <div class="col-sm-10">   
                                                <select name="Tgl">
                                                    <?php for($tgl=1;$tgl<=30;$tgl++):?>
                                                    <option value="<?php echo $tgl?>"><?php echo $tgl;?></option>
                                                    <?php endfor;?>
                                                </select>
                                                <select name="Bln">
                                                    <?php for($bln=1;$bln<=12;$bln++):?>
                                                    <option value="<?php echo $bln?>"><?php echo $bln;?></option>
                                                    <?php endfor;?>
                                                </select>
                                                <select name="Thn">
                                                    <?php for($thn=1970;$thn<=2015;$thn++):?>
                                                    <option value="<?php echo $thn?>"><?php echo $thn;?></option>
                                                    <?php endfor;?>
                                                </select>
                                                </div>

                                                </div>
                                                                    
                                        </tr>
                                        <tr>
                                         <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Gambar (maks 3 Mb)</label>
                                                <div class="col-sm-10">
                                                    <input type="file" id="userfile" name="userfile" >
                                                </div>
                                            </div>
                                        </tr>
                                  
                                 
                                    </table>
                                    <br>
                                    <input type="submit" name="simpan" class="btn btn_"></input>

                                    </form>
                                </div>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
