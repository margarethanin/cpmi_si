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
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo site_url("Berkas/update_berkas_dasar"); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar?>">
                            <input type="hidden" name="tipe_berkas" value="<?php echo $berkas?>">
                            <div class="control-group">
                                <label class="control-label">File Berkas</label>
                                <div class="controls">
                                    <input type="file" name="<?php echo $berkas; ?>"/>
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
<?php $this->load->view('footer'); ?>
        
