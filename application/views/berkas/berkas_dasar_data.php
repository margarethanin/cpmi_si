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
                            <p> <a href="<?php echo site_url('berkas/berkas_proses_form_insert'); ?>"
                                    class="btn btn-info">Tambah Berkas Dasar</a>
                            </p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelamar</th>
                                        <th>File Foto</th>
                                        <th>Nomor KTP</th>
                                        <th>File KTP</th>
                                        <th>Nomor Kartu Keluarga</th>
                                        <th>File Kartu Keluarga</th>
                                        <th>File Ijazah</th>
                                        <th>File Akta Lahir</th>
                                        <th>File Surat Izin</th>
                                        <th>File Buku Nikah</th>
                                        <th>File Akta Cerai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Susi</td>
                                        <td></td>
                                        <td>347154464654651321</td>
                                        <td></td>
                                        <td>5656516516516516516</td>
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