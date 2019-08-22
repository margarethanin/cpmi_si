<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=file.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelamar</th>
            <th>Nomor Paspor</th>
            <th>Nomor Telefon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($cpmi as $row) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama_pelamar; ?></td>
                <td><?php echo $row->nomor_paspor; ?></td>
                <td><?php echo $row->nomor_hp_pelamar; ?></td>
                <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                <td class="center">
                    <a class="btn btn-primary" href="<?php echo '' ?>"> Input Nomor Visa </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>