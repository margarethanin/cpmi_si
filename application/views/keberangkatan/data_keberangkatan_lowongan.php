<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Keberangkatan</a> <a href="#" class="current">Lowongan</a> </div>
        <h1>Data Keberangkatan Berdasarkan Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Keberangkatan Lowongan</h5>
                    </div>
                    <div class="widget-content">-->

                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Lowongan</h5>
                        </div>
                        <div class="widget-content">


                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Lokasi Perusahaan</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Permintaan Lowongan</th>
                                        <th>Daftar Pendaftar</th>
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
                                            <td><?php echo $row->lokasi_perusahaan; ?></td>
                                            <td><?php echo $row->jenis_pekerjaan; ?></td>
                                            <td><?php echo $row->permintaan_lowongan; ?></td>
                                            <td>
                                                <p> <a href="<?php echo site_url("Endorsement/data_keberangkatan_pelamar/$row->id_lowongan"); ?>"
                                                       class="btn btn-success">Daftar Calon Pekerja yang Berangkat</a>
                                                </p>
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