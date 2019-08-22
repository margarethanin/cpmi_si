<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=file.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table class="table table-bordered table-striped data-table">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Pelamar</th>
<!--                                        <th>Tanggal Seleksi</th>-->
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($data as $r) {
            $row = $this->Pelamar_m->excel_id($r);
            ?>
            <tr class="odd gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_cpmi; ?></td>
                <td><?php echo $row->nama_pelamar; ?></td>
                <td><?php echo $row->tempat_lahir_pelamar; ?></td>
                <td><?php echo $row->tanggal_lahir_pelamar; ?></td>
                <td><?php echo $row->alamat_pelamar; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>