<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pengiriman</a> <a href="#" class="current">Pengiriman</a> </div>
        <h1>Daftar Pengiriman Dokumen</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pengiriman</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Pengiriman</h5>
                        </div>
                        <div class="scroollme">
                            <div class="widget-content">
<!--                                <p> <a href="<?php echo site_url('Endorsement/pengiriman'); ?>"
                                       class="btn btn-info">Tambah Pengiriman</a>
                                </p>-->
                                <table class="table table-bordered table-striped data-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pengiriman</th>
                                            <th>Keterangan Pengiriman</th>
                                            <th>Data Pengiriman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $tampilan_pengiriman = $this->Endorsement_m->pengiriman();
                                        foreach ($tampilan_pengiriman as $row) {
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->tanggal_endorsement; ?></td>
                                                <td><?php echo $row->pengiriman_dokumen; ?></td>
                                                <td class="center">
                                                    <a onclick="return" href="<?php echo site_url("Endorsement/data_pengiriman_e/$row->id_pengiriman"); ?>" class="btn btn-success">Lihat Daftar Pengiriman</a>
                                                </td>
                                                <td class="center">
                                                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Endorsement/hapus_data_pengiriman/$row->id_pengiriman") ?>" class="btn btn-danger">Hapus</a>
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