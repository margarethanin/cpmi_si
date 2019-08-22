<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Berkas</a> <a href="#" class="current">Input</a> </div>
        <h1>Data Berkas</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Berkas</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <?php foreach ($nomor as $row) { ?>
                            <form class="form-horizontal" method="post" action="<?php echo site_url("Berkas/update_berkas_nomor"); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                <input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar ?>">
                                <div class="control-group">
                                    <label class="control-label">
                                        Nomor Paspor</label>
                                    <div class="controls">
                                        <input type="text" name="nomor_paspor" value="<?php echo $row->nomor_paspor; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">
                                        ID PMI</label>
                                    <div class="controls">
                                        <input type="text" name="id_cpmi" value="<?php echo $row->id_cpmi; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">
                                        Asuransi Pra</label>
                                    <div class="controls">
                                        <input type="text" name="asuransi_pra" value="<?php echo $row->asuransi_pra; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">
                                        Nomor KTKLN</label>
                                    <div class="controls">
                                        <input type="text" name="nomor_ktkln" value="<?php echo $row->nomor_ktkln; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">
                                        Asuransi Purna</label>
                                    <div class="controls">
                                        <input type="text" name="asuransi_purna" value="<?php echo $row->asuransi_purna; ?>"/>
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
    <?php $this->load->view('footer'); ?>
        
