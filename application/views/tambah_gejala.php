<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="typo">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="title">TAMBAH GEJALA</h1>
                </div>
            </div>
            <div class="row">
                <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
                    <tr>
                        <td width="97%">
                            <center>
                                <div id="form_input">
                                    <?php echo form_open_multipart('gejala/do_upload');?>
                                    <table>
                                        <?php echo form_open('gejala/insert_datagejala');?>
                                        <tr>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Gejala</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" placeholder="Inputkan Gejala" value="" style="margin:3px;" required>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Judul Artikel</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="judul_artikel" value="" style="margin:3px;" required>
                                                </div>
                                            </div>

                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Deskripsi Gejala</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" class="form-control" id="deskripsi_gejala" name="deskripsi_gejala" placeholder="Deskripsi Gejala" value="" style="margin:3px; height: 302px;"></textarea>
                                                </div>
                                            </div>

                                        </tr>
                                        <tr>
                                         <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Gambar (maks 3 Mb)</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="userfile" class="btn btn_"/>
                                                </div>
                                            </div>
                                           
                                        </tr>
                                    </table>
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
