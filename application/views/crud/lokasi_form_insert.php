<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lokasi</a> <a href="#" class="current">Input</a> </div>
        <h1>Lokasi Perusahaan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lokasi Perusahaan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Lokasi/proses_insert_lokasi'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            
                            <div class="control-group">
                                <label class="control-label">Lokasi Perusahaan</label>
                                <div class="controls">
                                    <input type="text" name="lokasi" placeholder="Tulis lokasi perusahaan..." class="span4 m-wrap">
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
        
