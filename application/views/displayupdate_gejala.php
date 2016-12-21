<?php $this->load->view('headeradmin');?>
<section class="content">
    <div class="typo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table List Gejala</h3>
                        </div>
                        <!-- /.box-header -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Gejala</th>
                                        <th>Judul Artikel</th>
                                        <th>Post By</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $no=1;;
                                    foreach ($query as $row)
                                    {
                                    echo "<tr>
                                        <td width='5'>$no</td>
                                        <td width='400'>$row->nama_gejala</td>
                                        <td width='700'>$row->judul_artikel</td>
                                        <td width='100'>$row->username</td>
                                        <td width='10'> ".anchor('Update/edit_gejala/'.$row->id_gejala,"<h4><span class='label label-primary'>Edit</span><h4>")."</td>
                                        
                                    </tr>";
                                    $no++;}
                                    ?>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
</section>
<!-- /.content -->


<?php $this->load->view('footeradmin');?>