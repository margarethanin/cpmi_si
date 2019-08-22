<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pekerjaan</a> <a href="#" class="current">Edit</a> </div>
        <h1>Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Edit Data Pekerjaan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        
                        <?php foreach ($data_pekerjaan as $row) { ?>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Pekerjaan/proses_edit_pekerjaan'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            
                            <div class="control-group">
                                <label class="control-label">Jenis Pekerjaan</label>
                                <div class="controls">
                                    <input type="text" name="pekerjaan" placeholder="Tulis jenis pekerjaan..." class="span4 m-wrap" value="<?php echo $row->pekerjaan; ?>">
                                    <!--HARUS ADA HIDDEN-->
                                    <input type="hidden" name="id_pekerjaan" required="" value="<?php echo $row->id_pekerjaan; ?>">
                                </div>
                            </div>

                            <div class="form-actions">
                                <input type="submit" value="Simpan" class="btn btn-success">
                            </div>
                        </form>
                        
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
        
