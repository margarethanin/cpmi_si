<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Endorsement</a> <a href="#" class="current">Harus Endors</a> </div>
        <h1>Data yang Harus Diendorsement</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Endors</h5>
                    </div>
                    <div class="widget-content">
                        
                        <!--content here-->
                        <div class="widget-content nopadding">
                            
                            <form id="formCetak" action="<?php echo site_url('Endorsement/excel_hired/'); ?>" method="post">
                                    
                                    <p> <button type="submit" class="btn btn-info">Cetak Excel</button></p>
                            
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pilih</th>
                                        <th>Nama Pelamar</th>
                                        <th>Nomor Paspor</th>
                                        <th>Nomor Telefon</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Keluar Visa</th>
                                        <th>Nomor Visa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($cpmi as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><input type="checkbox" name="id_daftar[]" value="<?php echo $row->id_pendaftar; ?>"</td>
                                            <td><?php echo $row->nama_pelamar; ?></td>
                                            <td><?php echo $row->nomor_paspor; ?></td>
                                            <td><?php echo $row->nomor_hp_pelamar; ?></td>
                                            <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                                            <td class="center">
                                                <?php
                                                $visa = $this->Endorsement_m->visa($row->id_pendaftar);
                                                if (empty($visa->tanggal_visa)) {
                                                    ?>
                                                    <?php
                                                } else {
                                                    echo $visa->tanggal_visa;
                                                }
                                                ?>
                                            </td>
                                            <td class="center">
                                                <?php
                                                $visa = $this->Endorsement_m->visa($row->id_pendaftar);
                                                if (empty($visa->nomor_calling_visa)) {
                                                    ?>
                                                    <a class="btn btn-primary" onclick="showModal('<?php echo $row->id_pendaftar; ?>', '<?php echo $id_lowongan; ?>')"> Input Nomor Visa </a>
                                                    <?php
                                                } else {
                                                    echo $visa->nomor_calling_visa;
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </form>
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
                <h4 class="modal-title">Konfirmasi Nomor Visa</h4>
            </div>
            <form method="post" action="<?php echo site_url('Endorsement/proses_insert_visa'); ?>">
                <div class="modal-body">

                    <div class="control-group">
                        <label class="control-label">ID Pendaftar</label>
                        <div class="controls">
                            <input type="text" name="id_pendaftar" readonly="">
                        </div>
                    </div>
                    <input type="hidden" name="id_lowongan" readonly="">
                    <div class="control-group">
                        <label class="control-label">Tanggal Keluar Visa</label>
                        <div class="controls">
                            <input name="tanggal_visa" type="date" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span4">
                            <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nomor Visa</label>
                        <div class="controls">
                            <input type="text" name="visa" required="">
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
    function showModal(id_pendaftar, id_lowongan) {
        $('[name="id_pendaftar"]').val(id_pendaftar);
        $('[name="id_lowongan"]').val(id_lowongan);
        $("#myModal").modal('show');
    }
</script>