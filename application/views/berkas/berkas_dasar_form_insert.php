<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Berkas Dasar</a> <a href="#" class="current">Input</a> </div>
        <h1>Berkas Dasar</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">

                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Berkas Dasar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Berkas_Dasar/data_berkas_dasar'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                            <div class="control-group">
                                <label class="control-label">Tanggal Masuk Berkas</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span4">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Keluar Berkas</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span4">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Nomor KTP</label>
                                <div class="controls">
                                    <input type="text" name="no_ktp" placeholder="Tulis nomor KTP..." class="span2 m-warp">
<!--                                    <textarea class="span8" ></textarea>-->
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Unggah File KTP</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Unggah File Kartu Keluarga</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Unggah File Ijazah</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Unggah File Akta Lahir</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Unggah File Surat Izin</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Unggah File Foto</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Unggah File Buku Nikah</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Unggah File Akta Cerai</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            
                            <div class="form-actions">
                                <input type="submit" value="Simpan" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>