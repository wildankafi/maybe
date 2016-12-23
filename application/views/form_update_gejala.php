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

                                    <table>
                                        <?php
                                        echo "Update untuk ID Gejala :  $id_gejala";
                                        echo form_open('Update/edit_gejala/'.$id_gejala);
                                        ?>
                                        <tr>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" placeholder="Inputkan Gejala" value="" style="margin:3px;">
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label" style="text-align: left;">Judul Artikel</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="judul_artikel" value="" style="margin:3px;">
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
                                                    <input type="file" class="form-control" id="userfile" name="userfile" placeholder="Deskripsi Gejala" value="" style="margin:3px;">
                                                </div>
                                            </div>
                                           
                                        </tr>
                                    </table>

                                    <input type="submit" name="update" value="update" class="btn btn_"></input>

                                    </form>
                                    <?php
                                            echo form_close();
                                            ?>
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





<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4 class="bot-0">UPDATE GEJALA</h4>
                </div>
            </div>
            <div class="row">
                <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
                    <tr>
                        <td width="97%">
                            <center>

                                    <table>
                                        <h5>
                                        <?php
                                        echo "Update untuk ID Gejala :  $id_gejala";
                                        echo form_open('Update/edit_gejala/'.$id_gejala);
                                        ?>
                                        </h5>
                                        <br>
                                        <tr>
                                            <td>Nama Gejala:</td>
                                            <td><input type="text" name="nama_gejala" placeholder="" class="nama_gejala" id="nama_gejala"></td>
                                        </tr>
                                        <tr>
                                            <td>Judul Artikel:</td>
                                            <td><input type="text" name="judul_artikel" placeholder="" class="judul_artikel" id="judul_artikel"></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Gejala & Solusi:</td>
                                            <td><textarea type="text" name="deskripsi_gejala" class="deskripsi_gejala" id="deskripsi_gejala"
                                                          style="margin: 0px 0px 9px; height: 302px; width: 615px;"></textarea></td>
                                        </tr>
                                        <td colspan="4" align="center">
                                            <input type="submit" value="update" name="update" class="btn btn_">
                                            <?php
                                            echo form_close();
                                            ?>
                                    </table>
                            </center>
                        </td></input>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
