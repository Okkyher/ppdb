<?php
$label = array('', 'NISN', 'Program Keahlian', 'Nama', 'Tempat Tanggal Lahir', 'Tanggal', 'Bulan', 'Tahun', 'Nomor Induk Keluarga', 'Nomor Kartu Keluarga', 'Jenis Kelamin', 'No. Akta Kelahiran', 'Agama', 'Tinggi', 'Berat', 'Tato', 'Penyakit Kronis', 'Sekolah Asal');

$arrvar = array();
$allowed = array('UserId', 'password', 'email', 'level', 'tipe', 'lastlog', 'id', 'kip');
foreach ($usr as $va => $rs) {

    if (!in_array($va, $allowed)) {
        array_push($arrvar, $rs);
    }
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Biodata
            <small>Data Diri</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Biodata</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Biodata Pendaftar</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-border" width="100%" border="0">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>