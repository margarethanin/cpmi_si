<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <h3 class="text-center"><u>SURAT TANDA PENGAMBILAN BERKAS</u></h3>

            <div class="container-fluid"><br>
                <!-- Control the column width, and how they should appear on different devices -->
                <div class="row"><br>
                    <div class="col-sm-12"><br>
                        <p>Yang bertanda tangan di bawah ini :</p>
                        <p>Nama : _______________________________________</p>
                        <p>Atas nama PT. SUKSES MANDIRI UTAMA, telah mengembalikan Dokumen / Berkas kepada Calon Pekerja Migran Indonesia :</p>
                    </div>
                    <div class="col-sm-12">
                        <table>
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td> 
                                    <td></td> 
                                    <td></td> 
                                    <td>  <?php echo $data->nama_pelamar; ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Paspor</td>
                                    <td>:</td>
                                    <td></td> 
                                    <td></td> 
                                    <td>  <?php echo $data->nomor_paspor; ?></td>
                                </tr>
                                <tr>
                                    <td>Perusahaan</td>
                                    <td>:</td>
                                    <td></td> 
                                    <td></td> 
                                    <td>  <?php echo $kilang->nama_perusahaan; ?></td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="col-sm-12"><br>
                        <p>Adapun Dokumen yang diserah terimakan / dikembalikan berupa :</p>
                    </div>
                    <?php
                    $berkas = array(
                        "KTP" => "ktp",
                        "Akta Lahir" => "akta_lahir",
                        "Kartu Keluarga" => "kartu_keluarga",
                        "Ijazah" => "ijazah",
                        "Buku Nikah" => "buku_nikah",
                        "Akta Cerai" => "akta_cerai",
                        "Surat Izin" => "surat_izin",
                    );
                    foreach ($berkas as $key => $value) {
                        $tgl = "tanggal_keluar_$value";
                        ?>
                        <div class="col-sm-3">
                            <input type="checkbox" <?php
                            if ($data->$tgl == date("Y-m-d")) {
                                echo "checked";
                            }
                            ?>>
                                   <?php echo $key ?>
                        </div>
                    <?php } ?>
                    <div class="col-sm-12"><br>
                        <p>Semua Dokumen yang digunakan untuk Proses, telah kami Serahkan kepada dan Diterima yang bersangkutan pada Tanggal ______________________________</p>
                        <p>Setelah semua dokumen kami serahkan SELANJUTNYA BUKAN MENJADI TANGGUNG JAWAB PT. SUKSES MANDIRI UTAMA.</p>
                    </div>
                    <div class="col-sm-12">
                        <p>Setelah semua dokumen</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="left">
                            <p class="text-center">Diserahkan oleh,</p>
                            <p class="text-center">PT SUKSES MANDIRI UTAMA</p>
                            <p style="padding-top: 100px" class="text-center">_______________________________________</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right">
                            <p class="text-center">&nbsp;</p>
                            <p class="text-center">Diterima oleh,</p>
                            <p style="padding-top: 100px" class="text-center">_______________________________________</p>
                        </div>
                    </div>
                </div>
                <br>


            </div>
            <a class="float" title="cetak halaman" onclick="cetak();"> 
                <i class="fa fa-print my-float" ></i>
            </a>

    </body>
</html>
<script type="text/javascript">
    function cetak() {
        print();
    }
</script>
<style>
    @media print
    {    
        .float, .float *, .notab
        {
            display: none !important;
        }
    }
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: purple;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }
    .my-float {
        margin-top: 22px;
    }
</style>