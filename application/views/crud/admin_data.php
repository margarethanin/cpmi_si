<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Admin</a> <a href="#" class="current">Admin</a> </div>
        <h1>Admin</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Admin</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Admin</h5>
                        </div>
                        <div class="widget-content">
<!--                            <p> <a href="<?php echo site_url('Admin/form_insert_admin'); ?>"
                                   class="btn btn-info">Tambah Admin</a>
                            </p>-->
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>User Name</th>
                                        <th>Level</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data_admin = $this->Admin_m->select_admin();
                                    foreach ($data_admin as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_admin; ?></td>
                                            <td><?php echo $row->user_name; ?></td>
                                            <td class="center">
                                                <?php
                                                if ($row->level == 0) {
                                                    echo "User Admin";
                                                } else {
                                                    echo "Super Admin";
                                                }
                                                ?>
                                            </td>
                                            <td class="center">
                                                <a href="<?php echo site_url("Admin/form_edit_admin/$row->id_admin") ?>" class="btn btn-primary">Edit</a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Admin/hapus_data_admin/$row->id_admin") ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
        

