<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pengiriman Endorsement</a> <a href="#" class="current">Pengiriman</a> </div>
        <h1>Pengiriman Endorsement</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pengiriman Endorsement</h5>
                    </div>
                    <div class="widget-content">

                        <!--content here-->
                        <div class="widget-content nopadding">
                            <form action="<?php echo site_url('Endorsement/simpan_lowongan');?>" method="post">
                                <p> <button type="submit" class="btn btn-info">Simpan Data Pengiriman</button> </p>
                                <input type="hidden" name="id_pengiriman" value="<?php echo $id_pengiriman?>">
                                
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pilih</th>
                                        <th>Perusahaan</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Permintaan Lowongan</th>
<!--                                        <th>Aksi</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($lowongan as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><input type="checkbox" name="id_lowongan[]" value="<?php echo $row->id_lowongan ?>"</td>
                                            <td><?php echo $row->nama_perusahaan; ?></td>
                                            <td><?php echo $row->jenis_pekerjaan; ?></td>
                                            <td class="center"><?php echo $row->permintaan_lowongan; ?></td>
                                    
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </form>
                        </div>

                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>