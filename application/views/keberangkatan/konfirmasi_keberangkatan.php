<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Keberangkatan</a> <a href="#" class="current">Input</a> </div>
        <h1>Konfirmasi Keberangkatan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Keberangkatan Pelamar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Endorsement/proses_insert_keberangkatan'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <!--HARUS ADA HIDDEN-->
                                        <input type="hidden" name="id_endorsement" required="" value="<?php echo $data->id_endorsement; ?>">
                                        <input type="hidden" name="id_lowongan" required="" value="<?php echo $data->id_lowongan; ?>">
                            <?php 
                            if($data->tanggal_keberangkatan == "0000-00-00"){
                                $tanggal_keberangkatan = null;
                            } else {
                                $tanggal_keberangkatan = $data->tanggal_keberangkatan;
                            }
                            ?>
                            <div class="control-group">
                                <label class="control-label">Tanggal Keberangkatan</label>
                                <div class="controls">
                                    <input name="tanggal" type="text" data-date="2019-01-01" value="<?php echo $tanggal_keberangkatan ?>" data-date-format="yyyy-mm-dd" class="datepicker span3" readonly="">
                                    <span class="help-block">Format Tanggal (tahun-bulan-tanggal)</span> </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Keterangan Keberangkatan</label>
                                <div class="controls">
                                    <textarea name="keterangan" placeholder="Tulis keterangan keberangkatan..." class="span4"><?php echo $data->keterangan; ?></textarea>
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
        
