<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Berkas Proses</a> <a href="#" class="current">Input</a> </div>
        <h1>Berkas Proses</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">

                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Berkas Proses</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Berkas_Proses/data_berkas_proses'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                            <div class="control-group">
                                <label class="control-label">Medical</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Pembuatan</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Kadaluwarsa</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">ID Pekerja Migran Indonesia
</label>
                                <div class="controls">
                                    <input type="text" name="no_id" placeholder="Tulis ID pekerja..." class="span3 m-warp">
<!--                                    <textarea class="span8" ></textarea>-->
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Paspor</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>                            
                            <div class="control-group">
                                <label class="control-label">Nomor Paspor</label>
                                <div class="controls">
                                    <input type="text" name="no_paspor" placeholder="Tulis nomor Paspor..." class="span3 m-warp">
<!--                                    <textarea class="span8" ></textarea>-->
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Pembuatan</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Kadaluwarsa</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">ISC</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Pembuatan</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Kadaluwarsa</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">FWCMS</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Pembuatan</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Kadaluwarsa</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span3">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Asuransi Pra Kerja</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="radios" />
                                        Sudah Dibayar</label>
                                    <label>
                                        <input type="radio" name="radios" />
                                        Belum Dibayar</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nomor KTKLN</label>
                                <div class="controls">
                                    <input type="text" name="no_ktkln" placeholder="Tulis nomor KTKLN..." class="span3 m-warp">
<!--                                    <textarea class="span8" ></textarea>-->
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Asuransi Purna Kerja</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="radios" />
                                        Sudah Dibayar</label>
                                    <label>
                                        <input type="radio" name="radios" />
                                        Belum Dibayar</label>
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