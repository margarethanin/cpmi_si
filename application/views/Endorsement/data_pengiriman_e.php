<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pengiriman</a> <a href="#" class="current">Pengiriman</a> </div>
        <h1>Daftar Dokumen yang Dikirim</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pengiriman</h5>
                    </div>
                    <div class="widget-content">-->
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Pengiriman</h5>
                        </div>
                        <div class="scroollme">
                            <div class="widget-content">

                                <form id="formCetak" action="<?php echo site_url('Endorsement/pengiriman_e_check/'); ?>" method="post">
                                    
                                    <p> <button type="submit" class="btn btn-info">Cetak Excel</button></p>
                                
                                    <table class="table table-bordered table-striped data-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Pilih</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat Perusahaan</th>
                                                <th>ID CPMI</th>
                                                <th>Nama Pelamar</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat Pelamar</th>
                                                <th>Nomor Paspor</th>
                                                <th>Nomor Visa</th>
                                                <th>Tanggal Keluar Visa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data as $row) {
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $no++; ?></td>
                                                    <td><input type="checkbox" name="id_endors[]" value="<?php echo $row->id_endorsement; ?>"</td>
                                                    <td><?php echo $row->nama_perusahaan; ?></td>
                                                    <td><?php echo $row->alamat_perusahaan; ?></td>
                                                    <td><?php echo $row->id_cpmi; ?></td>
                                                    <td><?php echo $row->nama_pelamar; ?></td>
                                                    <td><?php echo $row->tempat_lahir_pelamar; ?></td>
                                                    <td><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                                    <td><?php echo $row->alamat_pelamar; ?></td>
                                                    <td><?php echo $row->nomor_paspor; ?></td>
                                                    <td><?php echo $row->nomor_calling_visa; ?></td>
                                                    <td><?php echo $row->tanggal_visa; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </form>

                            </div>
                        </div>
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('footer'); ?>