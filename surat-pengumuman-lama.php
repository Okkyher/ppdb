<style>
    .atas {
        BORDER-RIGHT: 1px solid #CCCCCC;
        BORDER-TOP: 1px solid #CCCCCC;
        MARGIN-TOP: 1px;
        MARGIN-BOTTOM: 1px;
        BORDER-LEFT: 1px solid #CCCCCC;
        BORDER-BOTTOM: 1px solid #CCCCCC;
        BACKGROUND-COLOR: #CCCCCC;
        font-family: Helvetica, Arial, Sans-serif;
        font-size: 12px;
        font-weight: bold;
        color: #666666;
        text-align: left;
        height: 21px;
        padding-top: 0px;
    }

    .tabel {
        BORDER-RIGHT: 1px solid #CCCCCC;
        BORDER-TOP: 1px solid #CCCCCC;
        MARGIN-TOP: 1px;
        MARGIN-BOTTOM: 1px;
        BORDER-LEFT: 1px solid #CCCCCC;
        BORDER-BOTTOM: 1px solid #CCCCCC;
        BACKGROUND-COLOR: #FFFFFF;
        font-family: Calibri, Arial, Sans-serif;
    }

    .tglcetak {
        font-family: Helvetica, Arial, Sans-serif;
        font-size: 8px;
        color: #990000;

    }
</style>
<?php

require_once("include/config.php");
require_once("include/function.php");

$id = $_GET['id'];
$stmt_siswa = $pdo->prepare("SELECT `mod_data_alumnia`.`id`, `mod_data_alumnia`.`nisn`, `mod_data_alumnia`.`jurusan`, `mod_data_alumnia`.`nama`, `mod_data_alumnia`.`lahir`, `mod_data_alumnia`.`tgl`, `mod_data_alumnia`.`bln`, `mod_data_alumnia`.`thn`, `mod_data_alumnia`.`nik`, `mod_data_alumnia`.`nok`, `mod_data_alumnia`.`kelamin`, `mod_data_alumnia`.`akta`, `mod_data_alumnia`.`agama`, `mod_data_alumnia`.`tinggi`, `mod_data_alumnia`.`berat`, `mod_data_alumnia`.`tato`, `mod_data_alumnia`.`penyakit`, `mod_data_alumnia`.`asal_sekolah`, `mod_data_alumnia`.`sem_i`, `mod_data_alumnia`.`rata_i`, `mod_data_alumnia`.`sem_ii`, `mod_data_alumnia`.`rata_ii`, `mod_data_alumnia`.`sem_iii`, `mod_data_alumnia`.`rata_iii`, `mod_data_alumnia`.`sem_iv`, `mod_data_alumnia`.`rata_iv`, `mod_data_alumnia`.`sem_v`, `mod_data_alumnia`.`rata_v`, `mod_data_alumnia`.`indo`, `mod_data_alumnia`.`ing`, `mod_data_alumnia`.`mat`, `mod_data_alumnia`.`ipa`, `mod_data_alumnia`.`alamat`, `mod_data_alumnia`.`rt`, `mod_data_alumnia`.`rw`, `mod_data_alumnia`.`dusun`, `mod_data_alumnia`.`kelurahan`, `mod_data_alumnia`.`kecamatan`, `mod_data_alumnia`.`kabupaten`, `mod_data_alumnia`.`nama_ayah`, `mod_data_alumnia`.`kerja_ayah`, `mod_data_alumnia`.`nama_ibu`, `mod_data_alumnia`.`kerja_ibu`, `mod_data_alumnia`.`gaji_dr`, `mod_data_alumnia`.`gaji_sm`, `mod_data_alumnia`.`hp`, `mod_data_alumnia`.`lulus`, `mod_data_alumnia`.`valid`, `mod_data_alumnia`.`tahap`, `mod_data_alumnia`.`date_add`, `jurusan`.`kode` AS `kode_jurusan`, `jurusan`.`nama` AS `nama_jurusan` FROM `mod_data_alumnia` LEFT JOIN `jurusan` ON `mod_data_alumnia`.`jurusan`=`jurusan`.`nama` WHERE `mod_data_alumnia`.`id` = :id");
$stmt_siswa->execute(['id' => $id]);
$data = $stmt_siswa->fetch();

echo "
<title>Surat Keputusan PPDB " . $data['id'] . " </title>
<table width=780 align=center cellspacing='2' cellpadding='2'>
<tr>
<td class=tabel>
<table width=100%>
       <tr>
           <td class=tabel colspan=2 style='border-bottom:5px solid;' >
            <table width=100%>
                   <tr><td width=15% valign=middle><img src='dist/img/logo-madrasah.png'width='80' />
					   
                       </td>
                       
                       <td align=center width=80%><b>Registrasi PPDB Online</b><br><small><!--YAYASAN PEMBINA LEMBAGA PENDIDIKAN<br>DASAR DAN MENENGAH PERSATUAN GURU REPUBLIK INDONESIA KABUPATEN KARANGANYAR--></small><br>MADARASAH ALIYAH NEGRI (MAN) 01 KARANGANYAR<br>Alamat: Jl. Ngalian No. 04 Karanganyar Telp:(0273) 322235 Kode Pos.57752<br>E-mail: mansatukra@gmail.com

                       </td>
                       <td width=15% valign=middle><img src='dist/img/logo-sekolah.png'width='80' />
					   
                       </td>
                   </tr>
            </table>
          </td>
       </tr>
       ";
if ($data['tahap'] == '3') {
    $status = '<b>Diterima</b>';
} else {
    $status = '<b>Diterima</b>';
}


$kodejur = $data['kode_jurusan'];


if (date('m') < 12) {
    $tahunajar = (date("Y") + 0) . '/' . (date("Y") + 1);
} else {
    $tahunajar = (date("Y") + 1) . '/' . (date("Y") + 2);
}

?>
<tr>
    <td style="padding:25px;" colspan="2">
        <p style="text-align:center">PENGUMUMAN<br />
            Nomor : 421.5/194</p>
        <p></p>
        <p style="text-align:justify">Berdasarkan hasil tes kesehatan Panitia Penerimaan Peserta Didik Baru MAN 01 Karanganyar pada Tahun Pelajaran <?php echo $tahunajar; ?> memutuskan :</p>
        <table width="100%">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <td>No. Pendaftaran</td>
                <td>:</td>
                <td>0<?php echo date("y"); ?>.<?php echo substr($id, 4, 8); ?> <?php echo $kodejur; ?></td>
            </tr>
            <tr>
                <td>Dinyatakan</td>
                <td>:</td>
                <td><?php echo $status; ?></td>
            </tr>
        </table>
        <p style="text-align:justify">Sebagai calon peserta didik baru di MAN 01 Karanganyar, <b><?php echo $data['jurusan']; ?></b> Tahun Pelajaran <?php echo $tahunajar; ?>.</p>
        <p style="text-align:justify">Demikian surat pengumuman ini untuk dipergunakan sebagaimana adanya.</p>
    </td>
</tr>
<?php echo "
	   <tr>
	    <td width=75%></td>
		<td width=25% align=center><br />Karanganyar, " . indodate(date("Y-m-d")) . " <br/>Kepala Sekolah<br />
		<img src='dist/img/kepsekttd.png'width='90'/><br/>Drs. Nuri Hartono<br /></td>
	   </tr>
       <tr>
           <td colspan=2>&nbsp;</td>
       </tr>"; ?>
<?php echo "
       <tr>
           <td align=center style='background-color: #CCCCCC;' colspan=2>PPDB Online MAN 01 Karanganyar.</td>
       </tr>
</table></td></tr></table>
</center>
";

?>