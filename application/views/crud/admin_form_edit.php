<?php $this->load->view('header'); ?>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Admin</a> <a href="#" class="current">Edit</a> </div>
        <h1>Form Admin</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Form Edit Data Admin</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <?php foreach ($data_admin as $row) { ?>
                            <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/proses_edit_admin'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                <div class="control-group">
                                    <label class="control-label">Nama</label>
                                    <div class="controls">
                                        <input type="text" name="nama" required="" value="<?php echo $row->nama_admin; ?>">
                                        <!--HARUS ADA HIDDEN-->
                                        <input type="hidden" name="id_admin" required="" value="<?php echo $row->id_admin; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Username</label>
                                    <div class="controls">
                                        <input type="text" name="username" required="" value="<?php echo $row->user_name; ?>">
                                    </div>
                                </div>
                                <!--                            <div class="control-group">
                                                                <label class="control-label">Password</label>
                                                                <div class="controls">
                                                                    <input type="password" name="password" required="">
                                                                </div>
                                                            </div>-->
                                <div class="control-group">
                                    <label class="control-label">Level</label>
                                    <div class="controls">
                                        <select name="level" class="span2" required="">
                                            <option>--Pilih Level--</option>
                                            <option value="1" 
                                            <?php
                                            if ($row->level == 1) {
                                                echo "selected";
                                            }
                                            ?> 
                                                    >Super Admin</option>
                                            <option value="0"
                                            <?php
                                            if ($row->level == 0) {
                                                echo "selected";
                                            }
                                            ?>
                                                    >User Admin</option>
                                        </select>
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