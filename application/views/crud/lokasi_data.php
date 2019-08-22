<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lokasi</a> <a href="#" class="current">Lokasi</a> </div>
        <h1>Lokasi Perusahaan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lokasi Perusahaan</h5>
                    </div>-->
                    <!--<div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Lokasi Perusahaan</h5>
                        </div>
                        <div class="widget-content">
                            <p> <a href="<?php echo site_url('Lokasi/form_insert_lokasi'); ?>"
                                   class="btn btn-info">Tambah Lokasi</a>
                            </p>
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Lokasi Perusahaan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                            $no = 1;
                            $data_lokasi = $this->Lokasi_m->select_lokasi();
                            foreach ($data_lokasi as $row) {
                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->lokasi; ?></td>
                                            <td class="center">
                                                <a href="<?php echo site_url("Lokasi/form_edit_lokasi/$row->id_lokasi") ?>" class="btn btn-primary">Edit</a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lokasi/hapus_data_lokasi/$row->id_lokasi") ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                            <?php } ?>
                                </tbody>
                            </table>


                           


                        </div>
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
        

