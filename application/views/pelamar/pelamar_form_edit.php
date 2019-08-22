<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pelamar</a> <a href="#" class="current">Edit</a> </div>
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
                        <?php foreach ($detail_pelamar as $row) { ?>
                            <form class="form-horizontal" method="post" action="<?php echo site_url('Pelamar/proses_edit_pelamar'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                                <div class="control-group">
                                    <label class="control-label">Nama Pelamar</label>
                                    <div class="controls">
                                        <input name="pelamar" type="text" value="<?php echo $row->nama_pelamar; ?>" class="span4 m-wrap" >
                                        <!--HARUS ADA HIDDEN-->
                                        <input type="hidden" name="id_pelamar" required="" value="<?php echo $row->id_pelamar; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tempat Lahir</label>
                                    <div class="controls">
                                        <input name="tempat_lahir" type="text" value="<?php echo $row->tempat_lahir_pelamar; ?>" class="span4 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <div class="controls">
                                        <input name="tanggal_lahir" type="text" data-date="2019-01-01" data-date-format="yyyy-mm-dd" value="<?php echo $row->tanggal_lahir_pelamar; ?>" class="datepicker span4">
                                        <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <div class="controls">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="Laki-laki" 
                                            <?php
                                            if ($row->jenis_kelamin == "Laki-laki") {
                                                echo "checked";
                                            }
                                            ?>/>
                                            Laki-Laki</label>
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="Perempuan"
                                            <?php
                                            if ($row->jenis_kelamin == "Perempuan") {
                                                echo "checked";
                                            }
                                            ?>/>
                                            Perempuan</label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Agama</label>
                                    <div class="controls">
                                        <select name="agama" class="span4">
                                            <option value="Islam"
                                            <?php
                                            if ($row->agama == "Islam") {
                                                echo "selected";
                                            }
                                            ?>

                                                    <!--KALO SELECT OPTION DIA ECHO "CHECKED"-->

                                                    Islam</option>
                                            <option value="Katholik"
                                            <?php
                                            if ($row->agama == "Katholik") {
                                                echo "selected";
                                            }
                                            ?>
                                                    Katholik</option>
                                            <option value="Kristen"
                                            <?php
                                            if ($row->agama == "Kriten") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Kristen</option>
                                            <option value="Hindu"
                                            <?php
                                            if ($row->agama == "Hindu") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Hindu</option>
                                            <option value="Budha"
                                            <?php
                                            if ($row->agama == "Budha") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Budha</option>
                                            <option value="Konghucu"
                                            <?php
                                            if ($row->agama == "Konghucu") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">No. HP Pelamar</label>
                                    <div class="controls">
                                        <input name="nomor_hp" type="text" value="<?php echo $row->nomor_hp_pelamar; ?>" class="span4 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nama Orang Tua</label>
                                    <div class="controls">
                                        <input name="orang_tua" type="text" value="<?php echo $row->nama_orang_tua; ?>" class="span4 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Alamat Pelamar</label>
                                    <div class="controls">
                                        <textarea name="alamat_pelamar" class="span4" ><?php echo $row->alamat_pelamar; ?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Kode Pos</label>
                                    <div class="controls">
                                        <input name="kode_pos" type="text" value="<?php echo $row->kode_pos; ?>" class="span2 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Pendidikan Terakhir</label>
                                    <div class="controls">
                                        <input name="pendidikan" type="text" value="<?php echo $row->pendidikan_terakhir_pelamar; ?>" class="span4 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Status</label>
                                    <div class="controls">
                                        <label>
                                            <input type="radio" name="status" value="Belum Menikah" 
                                            <?php
                                            if ($row->status_diri == "Belum Menikah") {
                                                echo "checked";
                                            }
                                            ?>/>

                                            <!--KALO LABEL INPUT DIA ECHO "CHECKED"-->

                                            Belum Menikah</label>
                                        <label>
                                            <input type="radio" name="status" value="Menikah"
                                            <?php
                                            if ($row->status_diri == "Menikah") {
                                                echo "checked";
                                            }
                                            ?>/>
                                            Menikah</label>
                                        <label>
                                            <input type="radio" name="status" value="Cerai"
                                            <?php
                                            if ($row->status_diri == "Cerai") {
                                                echo "checked";
                                            }
                                            ?>/>
                                            Cerai</label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nama Keluarga Lainnya</label>
                                    <div class="controls">
                                        <input name="keluarga" type="text" value="<?php echo $row->nama_keluarga_lain; ?>" class="span4 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Umur Keluarga Lainnya</label>
                                    <div class="controls">
                                        <input name="umur_keluarga" type="text" value="<?php echo $row->umur_keluarga_lain; ?>" class="span1 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Hubungan Keluarga</label>
                                    <div class="controls">
                                        <select name="hubungan_keluarga" class="span4">
                                            <option value="Ayah"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Ayah") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Ayah</option>
                                            <option value="Ibu"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Ibu") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Ibu</option>
                                            <option value="Kakak"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Kakak") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Kakak</option>
                                            <option value="Adik"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Adik") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Adik</option>
                                            <option value="Suami"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Suami") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Suami</option>
                                            <option value="Istri"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Istri") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Istri</option>
                                            <option value="Anak"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Anak") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Anak</option>
                                            <option value="Sepupu"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Sepupu") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Sepupu</option>
                                            <option value="Keponakan"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Keponakan") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Keponakan</option>
                                            <option value="Kakek"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Kakek") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Kakek</option>
                                            <option value="Nenek"
                                                    <?php
                                            if ($row->hubungan_keluarga_lain == "Nenek") {
                                                echo "selected";
                                            }
                                            ?>
                                                    >Nenek</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Alamat Keluarga Lainnya</label>
                                    <div class="controls">
                                        <textarea name="alamat_keluarga" class="span4" ><?php echo $row->alamat_keluarga_lain; ?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">No. HP Keluarga Lainnya</label>
                                    <div class="controls">
                                        <input name="nomor_hp_keluarga" type="text" value="<?php echo $row->nomor_hp_keluarga_lain; ?>" class="span4 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Minat Bekerja</label>
                                    <div class="controls">
                                        <input name="minat_bekerja" type="text" value="<?php echo $row->minat_bekerja; ?>" class="span4 m-wrap">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Minat Lokasi Bekerja</label>
                                    <div class="controls">
                                        <input name="minat_lokasi" type="text" value="<?php echo $row->minat_lokasi_kerja; ?>" class="span4 m-wrap">
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <input type="submit" value="Simpan" class="btn btn-success">
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
        
