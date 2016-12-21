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
                                        <th>Judul Tips</th>
                                        <th>Jenis</th>
                                        <th>Tanggal</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $no=1;
                                    foreach ($query as $row)
                                    {
                                    echo "<tr>
                                        <td width='5'>$no</td>
                                        <td width='800'>$row->judul_tips</td>
                                        <td width='400'>$row->jenis_tips</td>
                                        <td width='100'>$row->tgl.</td>
                                        <td width='10'> ".anchor('Update/edit_tips/'.$row->id_tips,"<h4><span class='label label-primary'>Edit</span><h4>")."</td>
                                        
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

