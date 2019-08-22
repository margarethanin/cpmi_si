<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lowongan</a> <a href="#" class="current">Input</a> </div>
        <h1>Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">

                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lowongan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Lowongan/proses_insert_lowongan'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                            <div class="control-group">
                                <label class="control-label">Tanggal Kontrak</label>
                                <div class="controls">
                                    <input name="tanggal_kontrak" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span4">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Masa Berlaku</label>
                                <div class="controls">
                                    <input name="masa_berlaku" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span4">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Nama Perusahaan</label>
                                <div class="controls">
                                    <select class="span4" name="nama_perusahaan">
                                        <option>--Pilih Nama Perusahaan--</option>
                                        <?php foreach ($perusahaan as $row) { ?>
                                            <option
                                                value="<?php echo $row->id_perusahaan; ?>"><?php echo $row->nama_perusahaan; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!--                            <div class="control-group">
                                                            <label class="control-label">Lokasi Perusahaan</label>
                                                            <div class="controls">
                                                                <select class="span4" name="lokasi_perusahaan">
                                                                    <option>--Pilih Lokasi Perusahaan--</option>
                                                                    <option> </option>
                                                                </select>
                                                            </div>
                                                        </div>-->
                            <div class="control-group">
                                    <label class="control-label">Jenis Pekerjaan</label>
                                    <div class="controls">
                                        <input type="text" name="jenis_pekerjaan" placeholder="Tulis jenis pekerjaan..." class="span4 m-warp">
    <!--                                    <textarea class="span8" ></textarea>-->
                                    </div>
                                </div>
<!--                            <div class="control-group">
                                <label class="control-label">Jenis Pekerjaan</label>
                                <div class="controls">
                                    <select class="span4" name="pekerjaan">
                                        <option>--Pilih Jenis Pekerjaan--</option>
                                        <?php foreach ($pekerjaan as $row) { ?>
                                            <option
                                                value="<?php echo $row->id_pekerjaan; ?>"><?php echo $row->pekerjaan; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>-->
                            <div class="control-group">
                                <label class="control-label">Permintaan Lowongan (L/P)</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="permintaan_lowongan" value="Laki-laki" />
                                        Laki-laki</label>
                                    <label>
                                        <input type="radio" name="permintaan_lowongan" value="Perempuan" />
                                        Perempuan</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nominal Upah Pekerja</label>
                                <div class="controls">
                                    <input type="text" name="nominal_upah" placeholder="Tulis jumlah gaji..." class="span2 m-warp">
<!--                                    <textarea class="span8" ></textarea>-->
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jalur Penerimaan</label>
                                <div class="controls">
                                    <label>
<!--                                        <input type="radio" name="jalur_penerimaan" value="S" onchange="cols()"/>-->
                                        <input type="radio" name="jalur_penerimaan" value="1"/>
                                        Seleksi</label>
                                    <label>
<!--                                        <input type="radio" name="jalur_penerimaan" value="TS" onchange="no_cols()" checked=""/>-->
                                        <input type="radio" name="jalur_penerimaan" value="0"/>
                                        Tanpa Seleksi</label>
                                </div>
                            </div>

                            <!--muncul ketika pilihan jalur penerimaan (seleksi)-->
                            <!--                            <div class="collapse" id="collapseOne">
                                                        <div class="control-group">
                                                            <label class="control-label">Tanggal Seleksi</label>
                                                            <div class="controls">
                                                                <input name="tanggal_seleksi" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="datepicker span4">
                                                                <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Lokasi Seleksi</label>
                                                            <div class="controls">
                                                                <input type="text" name="lokasi_seleksi" placeholder="Tulis lokasi seleksi..." class="span4 m-warp">
                                                                <textarea class="span8" ></textarea>
                                                            </div>
                                                        </div>
                                                        </div>-->

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
<script>
    function cols() {
        $('#collapseOne').collapse('show');
    }
    function no_cols() {
        $('#collapseOne').collapse('hide');
    }
</script>