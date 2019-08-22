<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lowongan</a> <a href="#" class="current">Pendaftar</a> </div>
        <h1>Pendaftar Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pedaftar</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Pendaftar</h5>
                        </div>
                        <div class="widget-content">
                            <!--bikin button tambah-->
                            <p>
                            <a href="<?php echo site_url("Lowongan/detail_pelamar_e/$id_lowongan"); ?>"
                                   class="btn btn-info">Detail Seluruh Pendaftar</a>
                            </p>
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelamar</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Lokasi Kantor Cabang</th>
                                        <th>Status Penerimaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pendaftar as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_pelamar; ?></td>
                                            <td><?php echo $row->tanggal_pendaftaran; ?></td>
                                            <td><?php echo $row->lokasi_kantor_cabang; ?></td>
                                            <td class="center">
                                                <label>
                                                    <input type="radio" name="status_penerimaan<?php echo $row->id_pendaftar; ?>" 
                                                           onclick="updateStatus('<?php echo $row->id_pendaftar; ?>', 'HIRED')"
                                                           <?php
                                                           if ($row->status_penerimaan == "HIRED") {
                                                               echo "checked";
                                                           }
                                                           ?>
                                                           />HIRED
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_penerimaan<?php echo $row->id_pendaftar; ?>" 
                                                           onclick="updateStatus('<?php echo $row->id_pendaftar; ?>', 'KIV')"
                                                           <?php
                                                           if ($row->status_penerimaan == "KIV") {
                                                               echo "checked";
                                                           }
                                                           ?>
                                                           />KIV
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_penerimaan<?php echo $row->id_pendaftar; ?>" 
                                                           onclick="updateStatus('<?php echo $row->id_pendaftar; ?>', 'REJECT')"
                                                           <?php
                                                           if ($row->status_penerimaan == "REJECT") {
                                                               echo "checked";
                                                           }
                                                           ?>
                                                           />REJECT
                                                </label>
                                            </td>
                                            <td class="center">
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lowongan/hapus_data_pendaftar/$row->id_pendaftar/$id_lowongan") ?>" class="btn btn-danger">Hapus</a>
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
<?php $this->load->view('footer'); ?>
<script>
    function updateStatus(id, status) {
        $.ajax({
            url: "<?php echo site_url('Pendaftar/update_status_pendaftar') ?>",
            data: {id_pendaftar: id, status_penerimaan: status},
            type: "POST",
            success: function (data) {
                location.reload(); //untuk refresh halaman
            },
            error: function (t, e, s) {
                alert("Update error!")
            }
        })
    }
</script>