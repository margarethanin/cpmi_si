<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Perusahaan</a> <a href="#" class="current">Perusahaan</a> </div>
        <h1>Perusahaan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Perusahaan</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Perusahaan</h5>
                        </div>
                        <div class="widget-content">
<!--                            <p> <a href="<?php echo site_url('Perusahaan/form_insert_perusahaan'); ?>"
                                    class="btn btn-info">Tambah Perusahaan</a>
                            </p>-->
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Lokasi Perusahaan</th>
                                        <th>Alamat Perusahaan</th>
                                        <th>Profil Perusahaan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    $data_perusahaan = $this->Perusahaan_m->select_perusahaan();
                                    foreach ($data_perusahaan as $row){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->nama_perusahaan; ?></td>
                                        <!--keswire-->
                                        <td><?php echo $row->lokasi_perusahaan; ?></td> 
                                        <!--selangor-->
                                        <td class="center"><?php echo $row->alamat_perusahaan; ?></td>
                                        <!--Jalan satu dua tiga nomor 123, Selangor, Malaysia-->
                                        <td class="center"><?php echo $row->profil_perusahaan; ?></td>
                                        <!--Perusahaan yang memproduksi baja untuk ekspor ke negara di benua eropa-->
                                        <td class="center">
                                            <a href="<?php echo site_url("Perusahaan/form_edit_perusahaan/$row->id_perusahaan")  ?>" class="btn btn-primary">Edit</a>
                                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Perusahaan/hapus_data_perusahaan/$row->id_perusahaan")?>" class="btn btn-danger">Hapus</a>
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