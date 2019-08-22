<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lowongan</a> <a href="#" class="current">Lowongan</a> </div>
        <h1>Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lowongan</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Lowongan</h5>
                        </div>
                        <div class="widget-content">

                            <!--bikin button tambah-->
<!--                            <p>
                                <a href="<?php echo site_url('Lowongan/form_insert_lowongan'); ?>"
                                   class="btn btn-info">Tambah Lowongan</a>
                            </p>-->
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Kontrak</th>
                                        <th>Masa Berlaku</th>
<!--                                        <th>Tanggal Seleksi</th>-->
                                        <th>Nama Perusahaan</th>
                                        <th>Lokasi Perusahaan</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Permintaan Lowongan</th>
                                        <th>Jalur Penerimaan</th>
                                        <th>Nominal Upah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    
                                    foreach ($data_lowongan as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->tanggal_kontrak; ?></td>
                                            <td><?php echo $row->masa_berlaku; ?></td>
                                            <td><?php echo $row->nama_perusahaan; ?></td>
                                            <td><?php echo $row->lokasi_perusahaan; ?></td>
                                            <td><?php echo $row->jenis_pekerjaan; ?></td>
                                            <td><?php echo $row->permintaan_lowongan; ?></td>
                                            <td>
                                                <?php 
                                                if($row->status_seleksi == 0){
                                                    echo "Tanpa Seleksi";
                                                  } else { ?>
                                                <a class="btn btn-success"
                                                   href="<?php echo site_url("Lowongan/jadwal_seleksi/$row->id_lowongan") ?>">Jadwal Seleksi</a>
                                                  <?php }
                                                ?>
                                            </td>
                                            <td><?php echo $row->nominal_upah; ?></td>
                                            <td class="center">
                                                <a class="btn" href="<?php echo site_url("Lowongan/pendaftar/$row->id_lowongan") ?>">Lihat Pendaftar</a>
                                                <a href="<?php echo site_url("Lowongan/form_edit_lowongan/$row->id_lowongan") ?>" class="btn btn-primary">Edit</a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lowongan/hapus_data_lowongan/$row->id_lowongan") ?>" class="btn btn-danger">Hapus</a>
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