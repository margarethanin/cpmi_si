<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Seleksi</a> <a href="#" class="current">Seleksi</a> </div>
        <h1>Jadwal Seleksi</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pekerjaan</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Jadwal Seleksi</h5>
                        </div>
                        <div class="widget-content">
                            <p> <a href="<?php echo site_url("Lowongan/input_jadwal_seleksi/$id_lowongan"); ?>"
                                    class="btn btn-info">Tambah Jadwal Seleksi</a>
                            </p>
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Seleksi</th>
                                        <th>Lokasi Seleksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($jadwal as $row){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->tanggal_seleksi; ?></td>
                                        <td><?php echo $row->lokasi_seleksi; ?></td>
                                        <td class="center">
                                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lowongan/hapus_data_seleksi/$row->id_seleksi/$id_lowongan") ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php }?>
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
        

