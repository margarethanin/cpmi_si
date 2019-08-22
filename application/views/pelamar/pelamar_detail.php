<?php $this->load->view('header'); ?>

<?php
$no = 1;
foreach ($detail_pelamar as $row) {
    ?>

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pelamar</a> <a href="#" class="current">Detail</a> </div>
            <h1>Pelamar</h1>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Data Pelamar</h5>
                        </div>
                        <div class="widget-content">
                            <!--content here-->
                            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                                <h5>Form Detail Data Pelamar</h5>
                            </div>
                            <!--<div class="widget-content">-->
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelamar</th>
                                            <th>Tampat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>No.HP Pelamar</th>
                                            <th>Nama Orang Tua</th>
                                            <th>Alamat Pelamar</th>
                                            <th>Kode Pos</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Status Diri</th>
                                            <th>Nama Keluarga Lain</th>
                                            <th>Umur Keluarga Lain</th>
                                            <th>Hubungan Keluarga Lain</th>
                                            <th>Alamat Keluarga Lain</th>
                                            <th>No.HP Keluarga Lain</th>
                                            <th>Minat Bekerja</th>
                                            <th>Minat Lokasi Bekerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td class="center"><?php echo $row->nama_pelamar; ?></td>
                                            <td class="center"><?php echo $row->tempat_lahir_pelamar; ?></td>
                                            <td class="center"><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                            <td class="center"><?php echo $row->jenis_kelamin; ?></td>
                                            <td class="center"><?php echo $row->agama; ?></td>
                                            <td class="center"><?php echo $row->nomor_hp_pelamar; ?></td>
                                            <td class="center"><?php echo $row->nama_orang_tua; ?></td>
                                            <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                                            <td class="center"><?php echo $row->kode_pos; ?></td>
                                            <td class="center"><?php echo $row->pendidikan_terakhir_pelamar; ?></td>
                                            <td class="center"><?php echo $row->status_diri; ?></td>
                                            <td class="center"><?php echo $row->nama_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->umur_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->hubungan_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->alamat_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->nomor_hp_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->minat_bekerja; ?></td>
                                            <td class="center"><?php echo $row->minat_lokasi_kerja; ?></td>
                                            <td class="center">
                                                <a href="<?php echo site_url("Pelamar/form_edit_pelamar/$row->id_pelamar") ?>" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="widget-content">
                            <p>
                                <a href="<?php echo site_url("Berkas/pengembalian/$row->id_pelamar"); ?>"
                                   class="btn btn-warning">Pengambilan Berkas</a>
                            </p>
                            <div class="row-fluid">
    <!--                            <p> <a href="?php echo site_url('Berkas/form_insert_berkas_dasar'); ?>"
                                   class="btn btn-success">Tambah Berkas Dasar</a>
                            </p>-->

                                <!--//////////////////////////////TABEL BERKAS DASAR/////////////////////////////-->
                                <div class="span6">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Berkas Dasar</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($dasar as $row2) {
                                                ?>                                          
                                                <!--FOTO-->
                                                <tr class="odd gradeX">
                                                    <td><strong>Foto</strong></td>
                                                    <td width="25%">
                                                        <img class="img-responsive" style="width: 100%" src="<?php echo base_url("assets/berkas_pelamar/$row2->foto"); ?>">
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/foto"); ?>">Edit</a>
                                                    </td>
                                                </tr>

                                                <!--KTP-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>KTP</strong></p>
                                                        <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_ktp ?></p>
                                                        <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_ktp ?></p>
                                                    </td>
                                                    <td>
            <!--<p><img style="width: 150px;height: 180px;" src=""></p>-->
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->ktp"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/ktp"); ?>">Edit</a>
                                                    </td>
                                                </tr>

                                                <!--Kartu Keluarga-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Kartu Keluarga</strong></p>
                                                        <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_kartu_keluarga ?></p>
                                                        <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_kartu_keluarga ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->kartu_keluarga"); ?>"></p></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/kartu_keluarga"); ?>">Edit</a>
                                                    </td>
                                                </tr>
                                                <!--Ijazah-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Ijazah</strong></p>
                                                        <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_ijazah ?></p>
                                                        <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_ijazah ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->ijazah"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/ijazah"); ?>">Edit</a>
                                                    </td>
                                                </tr>
                                                <!--Akta Lahir-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Akta Lahir</strong></p>
                                                        <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_akta_lahir ?></p>
                                                        <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_akta_lahir ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->akta_lahir"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/akta_lahir"); ?>">Edit</a>
                                                    </td>
                                                </tr>
                                                <!--Surat Izin-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Surat Izin</strong></p>
                                                        <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_surat_izin ?></p>
                                                        <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_surat_izin ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->surat_izin"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/surat_izin"); ?>">Edit</a>
                                                    </td>
                                                </tr>
                                                <!--Buku Nikah-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Buku Nikah</strong></p>
                                                        <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_buku_nikah ?></p>
                                                        <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_buku_nikah ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->buku_nikah"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/buku_nikah"); ?>">Edit</a>
                                                        <!--<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lokasi/hapus_data_lokasi/$row->id_lokasi") ?>" class="btn btn-danger">Hapus</a>-->
                                                    </td>
                                                </tr>
                                                <!--Akta Cerai-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Akta Cerai</strong></p>
                                                        <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_akta_cerai ?></p>
                                                        <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_akta_cerai ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->akta_cerai"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/akta_cerai"); ?>">Edit</a>
                                                        <!--<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lokasi/hapus_data_lokasi/$row->id_lokasi") ?>" class="btn btn-danger">Hapus</a>-->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
        <!--                                <p> <a href="?php echo site_url('Berkas/form_insert_berkas_proses'); ?>"
                                       class="btn btn-warning">Tambah Berkas Proses</a>
                                </p>-->


                                <!--//////////////////////////////TABEL BERKAS PROSES/////////////////////////////-->
                                <div class="span6">
                                    <table class="table table-bordered table-striped">

                                        <thead>
                                            <tr>
                                                <th>Berkas Proses</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($berkas_nomor as $row) {
                                                ?>
                                                <!--MEDICAL-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Medical</strong></p>
                                                        <p>Tanggal Pembuatan  : <?php echo $row->tanggal_pembuatan_medical ?></p>
                                                        <p>Tanggal Kadaluwarsa: <?php echo $row->tanggal_kadaluwarsa_medical ?></p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row->medical"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_proses/$row->id_pelamar/medical"); ?>">Edit</a>
<!--                                                        <button class="btn btn-danger">Hapus</button>-->
                                                    </td>
                                                </tr>

                                                <!--PASPOR-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>Paspor</strong></p>
                                                        <p>Tanggal Pembuatan  : <?php echo $row->tanggal_pembuatan_paspor ?></p>
                                                        <p>Tanggal Kadaluwarsa: <?php echo $row->tanggal_kadaluwarsa_paspor ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row->paspor"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_proses/$row->id_pelamar/paspor"); ?>">Edit</a>
                                                        <!--<button class="btn btn-danger">Hapus</button>-->
                                                    </td>
                                                </tr>
                                                <!--ISC-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>ISC</strong></p>
                                                        <p>Tanggal Pembuatan  : <?php echo $row->tanggal_pembuatan_isc ?></p>
                                                        <p>Tanggal Kadaluwarsa: <?php echo $row->tanggal_kadaluwarsa_isc ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row->isc"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_proses/$row->id_pelamar/isc"); ?>">Edit</a>
                                                        <!--<button class="btn btn-danger">Hapus</button>-->
                                                    </td>
                                                </tr>
                                                <!--FWCMS-->
                                                <tr class="odd gradeX">
                                                    <td>        
                                                        <p><strong>FWCMS</strong></p>
                                                        <p>Tanggal Pembuatan  : <?php echo $row->tanggal_pembuatan_fwcms ?></p>
                                                        <p>Tanggal Kadaluwarsa: <?php echo $row->tanggal_kadaluwarsa_fwcms ?></p>
                                                    </td>
                                                    <td>
                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row->fwcms"); ?>"></p>
                                                        <p></p>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_proses/$row->id_pelamar/fwcms"); ?>">Edit</a>
                                                        <!--<button class="btn btn-danger">Hapus</button>-->
                                                    </td>
                                                </tr>

                                                <!--ID PELAMAR-->
                                                <tr class="odd gradeX">
                                                    <td><strong>Nomor Paspor</strong></td>
                                                    <td><?php echo $row->nomor_paspor; ?></td>
                                                    <td rowspan="5">
                                                        <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_nomor/$row->id_pelamar"); ?>">Edit</a>
                                                        <!--<button class="btn btn-danger">Hapus</button>-->
                                                    </td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td><strong>ID PMI</strong></td>
                                                    <td><?php echo $row->id_cpmi; ?></td>
                                                </tr>
                                                <!--ASURANSI PRA-->
                                                <tr class="odd gradeX">
                                                    <td><strong>Asuransi Pra Kerja</strong></td>
                                                    <td><?php echo $row->asuransi_pra; ?></td>
                                                </tr>

                                                <!--NOMOR KTKLN-->
                                                <tr class="odd gradeX">
                                                    <td><strong>Nomor KTKLN</strong></td>
                                                    <td><?php echo $row->nomor_ktkln; ?></td>
                                                </tr>

                                                <!--ASURANSI PURNA-->
                                                <tr class="odd gradeX">
                                                    <td><strong>Asuransi Purna Kerja</strong></td>
                                                    <td><?php echo $row->asuransi_purna; ?></td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--                                </div>-->
                            </div>
                        </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php $this->load->view('footer'); ?>