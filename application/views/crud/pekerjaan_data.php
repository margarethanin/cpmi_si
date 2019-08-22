<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pekerjaan</a> <a href="#" class="current">Pekerjaan</a> </div>
        <h1>Jenis Pekerjaan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pekerjaan</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Pekerjaan</h5>
                        </div>
                        <div class="widget-content">
                            <p> <a href="<?php echo site_url('Pekerjaan/form_insert_pekerjaan'); ?>"
                                    class="btn btn-info">Tambah Pekerjaan</a>
                            </p>
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    $data_pekerjaan = $this->Pekerjaan_m->select_pekerjaan();
                                    foreach ($data_pekerjaan as $row){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->pekerjaan; ?></td>
                                        <td class="center">
                                            <a href="<?php echo site_url("Pekerjaan/form_edit_pekerjaan/$row->id_pekerjaan") ?>" class="btn btn-primary">Edit</a>
                                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Pekerjaan/hapus_data_pekerjaan/$row->id_pekerjaan") ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php }?>
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
        

