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
            <th>Nomor Visa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($data as $r) {
            $row = $this->Endorsement_m->excel_hired($r);
            ?>
            <tr class="odd gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama_pelamar; ?></td>
                <td><?php echo $row->nomor_paspor; ?></td>
                <td><?php echo $row->nomor_hp_pelamar; ?></td>
                <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                <td class="center">
                    <?php
                    $visa = $this->Endorsement_m->visa($row->id_pendaftar);
                    if (empty($visa->tanggal_visa)) {
                        ?>
                        <?php
                    } else {
                        echo $visa->tanggal_visa;
                    }
                    ?>
                </td>
                <td class="center">
                    <?php
                    $visa = $this->Endorsement_m->visa($row->id_pendaftar);
                    if (empty($visa->nomor_calling_visa)) {
                        ?>
                        <a class="btn btn-primary" onclick="showModal('<?php echo $row->id_pendaftar; ?>', '<?php echo $id_lowongan; ?>')"> Input Nomor Visa </a>
                        <?php
                    } else {
                        echo $visa->nomor_calling_visa;
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>