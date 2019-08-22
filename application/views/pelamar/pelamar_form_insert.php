<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pelamar</a> <a href="#" class="current">Input</a> </div>
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
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Pelamar/proses_insert_pelamar'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                            <div class="control-group">
                                <label class="control-label">Nama Pelamar</label>
                                <div class="controls">
                                    <input name="pelamar" type="text" placeholder="Tulis nama..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tempat Lahir</label>
                                <div class="controls">
                                    <input name="tempat_lahir" type="text" placeholder="Tulis tempat lahir..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Lahir</label>
                                <div class="controls">
                                    <input name="tanggal_lahir" type="text" data-date="2019-01-01" data-date-format="yyyy-mm-dd" value="2019-01-01" class="datepicker span4">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jenis Kelamin</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki" />
                                        Laki-Laki</label>
                                    <label>
                                        <input type="radio" name="jenis_kelamin" value="Perempuan"/>
                                        Perempuan</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Agama</label>
                                <div class="controls">
                                    <select name="agama" class="span4">
                                        <option value="Islam">Islam</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No. HP Pelamar</label>
                                <div class="controls">
                                    <input name="nomor_hp" type="text" placeholder="Tulis nomor handphone..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Orang Tua</label>
                                <div class="controls">
                                    <input name="orang_tua" type="text" placeholder="Tulis nama orang tua..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Alamat Pelamar</label>
                                <div class="controls">
                                    <textarea name="alamat_pelamar" placeholder="Tulis alamat..." class="span4" ></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Pos</label>
                                <div class="controls">
                                    <input name="kode_pos" type="text" placeholder="Tulis kode pos..." class="span2 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pendidikan Terakhir</label>
                                <div class="controls">
                                    <input name="pendidikan" type="text" placeholder="Tulis pendidikan terakhir..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="status" value="Belum Menikah" />
                                        Belum Menikah</label>
                                    <label>
                                        <input type="radio" name="status" value="Menikah"/>
                                        Menikah</label>
                                    <label>
                                        <input type="radio" name="status" value="Cerai"/>
                                        Cerai</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Keluarga Lainnya</label>
                                <div class="controls">
                                    <input name="keluarga" type="text" placeholder="Tulis nama keluarga lainnya..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Umur Keluarga Lainnya</label>
                                <div class="controls">
                                    <input name="umur_keluarga" type="text" placeholder="Tulis umur..." class="span1 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Hubungan Keluarga</label>
                                <div class="controls">
                                    <select name="hubungan_keluarga" class="span4">
                                        <option value="Ayah">Ayah</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                        <option value="Suami">Suami</option>
                                        <option value="Istri">Istri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Sepupu">Sepupu</option>
                                        <option value="Keponakan">Keponakan</option>
                                        <option value="Kakek">Kakek</option>
                                        <option value="Nenek">Nenek</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Alamat Keluarga Lainnya</label>
                                <div class="controls">
                                    <textarea name="alamat_keluarga" placeholder="Tulis alamat..." class="span4" ></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No. HP Keluarga Lainnya</label>
                                <div class="controls">
                                    <input name="nomor_hp_keluarga" type="text" placeholder="Tulis nomor handphone..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Minat Bekerja</label>
                                <div class="controls">
                                    <input name="minat_bekerja" type="text" placeholder="Tulis nama perusahaan yang diinginkan..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Minat Lokasi Bekerja</label>
                                <div class="controls">
                                    <input name="minat_lokasi" type="text" placeholder="Tulis lokasi perusahaan yang diinginkan..." class="span4 m-wrap">
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
        
