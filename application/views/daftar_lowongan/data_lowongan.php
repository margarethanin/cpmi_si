<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lowongan</a> <a href="#" class="current">Lowongan</a> </div>
        <h1>Data Lowongan yang Ditawarkan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lowongan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Permintaan Lowongan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($lowongan as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_perusahaan; ?></td>
                                            <td><?php echo $row->jenis_pekerjaan; ?></td>
                                            <td class="center"><?php echo $row->permintaan_lowongan; ?></td>
                                            <td class="center">
                                                <a class="btn btn-primary" onclick="showModal('<?php echo $row->id_lowongan; ?>', '<?php echo $id_pelamar; ?>')">Pilih</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--///////////////////modal-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Lokasi Kantor Cabang</h4>
            </div>
            <form method="post" action="<?php echo site_url('Pendaftar/proses_insert_pendaftar'); ?>">
                <div class="modal-body">

                    <div class="control-group">
                        <label class="control-label">ID Pelamar</label>
                        <div class="controls">
                            <input type="text" name="id_pelamar" readonly="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">ID Lowongan</label>
                        <div class="controls">
                            <input type="text" name="id_lowongan" readonly="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Kantor Cabang</label>
                        <div class="controls">
                            <input type="text" name="cabang" required="">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" >Simpan</button>
                </div>
            </form>
        </div>

    </div>
</div>
<?php $this->load->view('footer'); ?>
<script>
    function showModal(id_lowongan, id_pelamar) {
        $('[name="id_pelamar"]').val(id_pelamar);
        $('[name="id_lowongan"]').val(id_lowongan);
        $("#myModal").modal('show');
    }
</script>