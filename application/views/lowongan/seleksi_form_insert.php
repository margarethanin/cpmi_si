<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Seleksi</a> <a href="#" class="current">Input</a> </div>
        <h1>Jadwal Seleksi</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Input Jadwal Seleksi</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Lowongan/simpan_jadwal_seleksi'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            
                            <input type="hidden" name="id_lowongan" value="<?php echo $id_lowongan ?>">
                            
                            <div class="control-group">
                                <label class="control-label">Tanggal Seleksi</label>
                                <div class="controls">
                                    <input name="tanggal_seleksi" type="text" data-date="2019-01-01" value="2019-01-01" data-date-format="yyyy-mm-dd" class="span4 form_date">
                                    <!--<input name="tanggal_seleksi" type="datetime-local">-->
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Lokasi Seleksi</label>
                                <div class="controls">
                                    <input type="text" name="lokasi_seleksi" placeholder="Tulis lokasi seleksi..." class="span4 m-wrap">
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
        
