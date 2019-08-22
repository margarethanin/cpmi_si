
<div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Pelamar</th>
                <th>Nomor Telepon</th>
                <th>Tanggal Lahir</th>
                <th>Nama Orang Tua</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($pelamar)) { ?>
            <tr class="odd gradeX">
                <td colspan="5">Data tidak ditemukan!</td>
            </tr>
                <?php
            } else {
                foreach ($pelamar as $row) {
                    ?>
                    <tr class="odd gradeX">
                        <td><?php echo $row->nama_pelamar;?></td>
                        <td><?php echo $row->nomor_hp_pelamar;?></td>
                        <td><?php echo $row->tanggal_lahir_pelamar;?></td>
                        <td class="center"><?php echo $row->nama_orang_tua;?></td>
                        <td class="center">
                            <a class="btn btn-primary" href="<?php echo site_url("Pendaftar/data_lowongan/$row->id_pelamar") ?>">Pilih</a>
                        </td>
                    </tr>
                <?php }} ?>
        </tbody>
    </table>
</div>