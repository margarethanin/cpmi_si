<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lokasi</a> <a href="#" class="current">Lokasi</a> </div>
        <h1>Lokasi Perusahaan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lokasi Perusahaan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Lokasi Perusahaan</h5>
                        </div>
                        <div class="widget-content">
                            <p> <a href="<?php echo site_url('Lokasi/form_insert_berkas_dasar'); ?>"
                                    class="btn btn-info">Tambah Berkas Dasar</a>
                            </p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelamar</th>
                                        <th>Medical</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                        <th>ID Pekerja Migran Indonesia</th>
                                        <th>Paspor</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                        <th>ISC</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                        <th>FWCMS</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                        <th>Asuransi Pra Kerja</th>
                                        <th>Nomor KTKLN</th>
                                        <th>Asuransi Purna Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Susi</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>
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