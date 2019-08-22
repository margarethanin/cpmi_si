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
            <th>ID CPMI</th>
            <th>Name</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Full Address</th>
            <th>Paspor</th>
            <th>No. Visa</th>
            <th>Tgl Visa</th>
            <th>Nama Perusahaan</th>
            <th>Alamat Perusahaan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($data as $row) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_cpmi; ?></td>
                <td><?php echo $row->nama_pelamar; ?></td>
                <td><?php echo $row->tempat_lahir_pelamar; ?></td>
                <td><?php echo $row->tanggal_lahir_pelamar; ?></td>
                <td><?php echo $row->alamat_pelamar; ?></td>
                <td><?php echo $row->nomor_paspor; ?></td>
                <td><?php echo $row->nomor_calling_visa; ?></td>
                <td><?php echo $row->tanggal_visa; ?></td>
                <td><?php echo $row->nama_perusahaan; ?></td>
                <td><?php echo $row->alamat_perusahaan; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>