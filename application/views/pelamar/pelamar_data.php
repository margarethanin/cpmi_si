<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pelamar</a> <a href="#" class="current">Pelamar</a> </div>
        <h1>Pelamar</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pelamar</h5>
                    </div>
                    <div class="widget-content">-->
                    <!--content here-->
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>Form Data Pelamar</h5>
                    </div>
                    <div class="widget-content">

                        <!--bikin button tambah-->
<!--                        <p>
                            <a href="<?php echo site_url('Pelamar/form_insert_pelamar'); ?>"
                               class="btn btn-info">Tambah Pelamar</a>
                        </p>-->
                        <form id="formCetak" action="<?php echo site_url('Pelamar/excel_id/'); ?>" method="post">

                            <p> <button type="submit" class="btn btn-info">Cetak Excel</button>
                            </p>

                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pilih</th>
                                        <th>Nama Pelamar</th>
<!--                                        <th>Tanggal Seleksi</th>-->
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nomor HP</th>
                                        <th>Minat Bekerja</th>
                                        <th>Minat Lokasi Bekerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $detail_pelamar = $this->Pelamar_m->select_pelamar();
                                    foreach ($detail_pelamar as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><input type="checkbox" name="id_pelamar[]" value="<?php echo $row->id_pelamar; ?>"</td>
                                            <td><?php echo $row->nama_pelamar; ?></td>
                                            <td><?php echo $row->tempat_lahir_pelamar; ?></td>
                                            <td><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                            <td><?php echo $row->nomor_hp_pelamar; ?></td>
                                            <td><?php echo $row->minat_bekerja; ?></td>
                                            <td><?php echo $row->minat_lokasi_kerja; ?></td>
                                            <td class="center">
                                                <a href="<?php echo site_url("Pelamar/detail_pelamar/$row->id_pelamar") ?>" class="btn btn-warning">Lihat Detail Pelamar</a>
                                                <a href="<?php echo site_url("Pelamar/form_edit_pelamar/$row->id_pelamar") ?>" class="btn btn-primary">Edit</a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Pelamar/hapus_data_pelamar/$row->id_pelamar") ?>" class="btn btn-danger">Hapus</a>
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
<?php $this->load->view('footer'); ?>