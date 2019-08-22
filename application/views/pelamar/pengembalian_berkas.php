<?php $this->load->view('header'); ?>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i> Home</a> <a href="#">Data Admin</a> 
            <a href="#" class="current">Input</a> </div>
        <h1>Form Admin</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Update Berkas Pelamar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post"
                              action="<?php echo site_url("Berkas/update_pengembalian"); ?>">

                            <input type="hidden" name="id_pelamar" value="<?php echo $berkas_dasar->id_pelamar ?>">

                            <div class="control-group">
                                <label class="control-label">Nama Perusahaan</label>
                                <div class="controls">
                                    <input type="text" name="kilang" placeholder="Tulis nama Perusahaan..." class="span2 m-warp">
<!--                                    <textarea class="span8" ></textarea>-->
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Berkas Dasar</label>

                                <div class="controls">

                                    <?php
                                    $berkas = array(
                                        "KTP" => "ktp",
                                        "Akta Lahir" => "akta_lahir",
                                        "Kartu Keluarga" => "kartu_keluarga",
                                        "Ijazah" => "ijazah",
                                        "Buku Nikah" => "buku_nikah",
                                        "Akta Cerai" => "akta_cerai",
                                        "Surat Izin" => "surat_izin",
                                    );
                                    foreach ($berkas as $key => $value) {
                                        $tgl = "tanggal_keluar_$value";
                                        ?>

                                        <label>
                                            <input type="checkbox" name="dasar[]" value="<?php echo $value ?>" 
                                            <?php
                                            if ($berkas_dasar->$tgl <> "0000-00-00") {
                                                echo "disabled";
                                            }
                                            ?> />
                                                   <?php echo $key ?>
                                        </label>

                                    <?php } ?>

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