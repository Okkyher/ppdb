<?php
$iduser = $_POST['id'];

// Fetch data from the database reguler
$stmt_pendaftar = $pdo->prepare("SELECT * FROM `pengguna` JOIN `mod_data_alumnia` ON `pengguna`.`UserId`=`mod_data_alumnia`.`id` WHERE `mod_data_alumnia`.`id`= :id ");
$stmt_pendaftar->execute(['id' => $iduser]);
$pendaftar_db = $stmt_pendaftar->fetch();

$label = array('', 'NISN', 'Program Keahlian', 'Nama', 'Tempat Tanggal Lahir', 'Tanggal', 'Bulan', 'Tahun', 'Nomor Induk Keluarga', 'Nomor Kartu Keluarga', 'Jenis Kelamin', 'No. Akta Kelahiran', 'Agama', 'Tinggi', 'Berat', 'Tato', 'Penyakit Kronis', 'Sekolah Asal');
$arrvar = array();
$allowed = array('UserId', 'password', 'email', 'level', 'tipe', 'lastlog', 'id', 'kip');
foreach ($pendaftar_db as $va => $rs) {

    if (!in_array($va, $allowed)) {
        array_push($arrvar, $rs);
    }
}

?>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">View Data Pendaftar</h4>
        </div>
        <div class="modal-body">
            <table class="table table-border" width="100%" border="0">
                <tr>
                    <td colspan="6">
                        <img src="<?php echo $arrvar[50]; ?>" style="height:150px;" class="img-thumb" alt="User Image">
                    </td>
                </tr>
                <?php for ($e = 1; $e < 4; $e++) { ?>
                    <tr>
                        <td width="35%"><?php echo $label[$e]; ?></td>
                        <td width="5%" style="text-align:center;">:</td>
                        <td width="60%" colspan="4"><?php echo $arrvar[$e]; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td width="35%"><?php echo $label[4]; ?></td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[4]; ?>, <?php echo $arrvar[5]; ?> <?php echo $arrvar[6]; ?> <?php echo $arrvar[7]; ?></td>
                </tr>
                <?php for ($e = 8; $e < 13; $e++) { ?>
                    <tr>
                        <td width="35%"><?php echo $label[$e]; ?></td>
                        <td width="5%" style="text-align:center;">:</td>
                        <td width="60%" colspan="4"><?php echo $arrvar[$e]; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td width="35%"><?php echo $label[13]; ?></td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[13]; ?> cm</td>
                </tr>
                <tr>
                    <td width="35%"><?php echo $label[14]; ?></td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[14]; ?> kg</td>
                </tr>
                <?php for ($e = 15; $e < 18; $e++) { ?>
                    <tr>
                        <td width="35%"><?php echo $label[$e]; ?></td>
                        <td width="5%" style="text-align:center;">:</td>
                        <td width="60%" colspan="4"><?php echo $arrvar[$e]; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td width="35%">Alamat</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[32]; ?>, RT <?php echo $arrvar[33]; ?>/RW <?php echo $arrvar[34]; ?> Dusun <?php echo $arrvar[35]; ?><br>Kelurahan <?php echo $arrvar[36]; ?> Kecamatan <?php echo $arrvar[37]; ?><br>Kabupaten <?php echo $arrvar[38]; ?></td>
                </tr>
                <tr>
                    <td width="35%">Nama Ayah</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="25%"><?php echo $arrvar[39]; ?></td>
                    <td width="10%">Pekerjaan</td>
                    <td width="2%">:</td>
                    <td width="25%"><?php echo $arrvar[40]; ?></td>
                </tr>
                <tr>
                    <td width="35%">Nama ibu</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="25%"><?php echo $arrvar[41]; ?></td>
                    <td width="10%">Pekerjaan</td>
                    <td width="2%">:</td>
                    <td width="25%"><?php echo $arrvar[42]; ?></td>
                </tr>
                <tr>
                    <td width="35%">Penghasilan Per Bulan</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4">Rp. <?php echo number_format($arrvar[43]); ?> <b>s.d</b> Rp. <?php echo number_format($arrvar[44]); ?></td>
                </tr>
                <tr>
                    <td width="35%">No. Telp / Hp</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[45]; ?></td>
                </tr>
                <tr>
                    <td width="35%">Memiliki Prestasi Akademik</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[46]; ?></td>
                </tr>
                <tr>
                    <td width="35%">Kategori Prestasi Akademik Pararel</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[47]; ?></td>
                </tr>
                <tr>
                    <td width="35%">Memiliki Hafalan Al-Quran</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[48]; ?></td>
                </tr>
                <tr>
                    <td width="35%">Jumlah Hafalan</td>
                    <td width="5%" style="text-align:center;">:</td>
                    <td width="60%" colspan="4"><?php echo $arrvar[49]; ?></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close</button>
        </div>
    </div>
</div>