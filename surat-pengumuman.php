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

	.column {
		float: left;
		width: 64%;
		padding: 10px;
		height: 500px;
		/* Should be removed. Only for demonstration */
	}

	.kanan {
		float: right;
		width: 30%;
		padding: 10px;
		height: 500px;
		/* Should be removed. Only for demonstration */
	}

	.tengah {
		float: center;
		width: 30%;
		padding: 10px;
		height: 500px;
		/* Should be removed. Only for demonstration */
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}
</style>
<?php

require_once("include/config.php");
require_once("include/function.php");

$id = $_GET['id'];
$stmt_siswa = $pdo->prepare("SELECT `mod_data_alumnia`.`id`, `mod_data_alumnia`.`nisn`, `mod_data_alumnia`.`jurusan`, `mod_data_alumnia`.`nama`, `mod_data_alumnia`.`lahir`, `mod_data_alumnia`.`tgl`, `mod_data_alumnia`.`bln`, `mod_data_alumnia`.`thn`, `mod_data_alumnia`.`nik`, `mod_data_alumnia`.`nok`, `mod_data_alumnia`.`kelamin`, `mod_data_alumnia`.`akta`, `mod_data_alumnia`.`agama`, `mod_data_alumnia`.`tinggi`, `mod_data_alumnia`.`berat`, `mod_data_alumnia`.`tato`, `mod_data_alumnia`.`penyakit`, `mod_data_alumnia`.`asal_sekolah`, `mod_data_alumnia`.`sem_i`, `mod_data_alumnia`.`rata_i`, `mod_data_alumnia`.`sem_ii`, `mod_data_alumnia`.`rata_ii`, `mod_data_alumnia`.`sem_iii`, `mod_data_alumnia`.`rata_iii`, `mod_data_alumnia`.`sem_iv`, `mod_data_alumnia`.`rata_iv`, `mod_data_alumnia`.`sem_v`, `mod_data_alumnia`.`rata_v`, `mod_data_alumnia`.`indo`, `mod_data_alumnia`.`ing`, `mod_data_alumnia`.`mat`, `mod_data_alumnia`.`ipa`, `mod_data_alumnia`.`alamat`, `mod_data_alumnia`.`rt`, `mod_data_alumnia`.`rw`, `mod_data_alumnia`.`dusun`, `mod_data_alumnia`.`kelurahan`, `mod_data_alumnia`.`kecamatan`, `mod_data_alumnia`.`kabupaten`, `mod_data_alumnia`.`nama_ayah`, `mod_data_alumnia`.`kerja_ayah`, `mod_data_alumnia`.`nama_ibu`, `mod_data_alumnia`.`kerja_ibu`, `mod_data_alumnia`.`gaji_dr`, `mod_data_alumnia`.`gaji_sm`, `mod_data_alumnia`.`hp`, `mod_data_alumnia`.`foto`, `mod_data_alumnia`.`lulus`, `mod_data_alumnia`.`valid`, `mod_data_alumnia`.`tahap`, `mod_data_alumnia`.`date_add`, `jurusan`.`kode` AS `kode_jurusan`, `jurusan`.`nama` AS `nama_jurusan` FROM `mod_data_alumnia` LEFT JOIN `jurusan` ON `mod_data_alumnia`.`jurusan`=`jurusan`.`nama` WHERE `mod_data_alumnia`.`id` = :id");
$stmt_siswa->execute(['id' => $id]);
$data = $stmt_siswa->fetch();

$kodejur = $data['kode_jurusan'];

echo "
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




if (date('m') < 12) {
	$tahunajar = (date("Y") + 0) . '/' . (date("Y") + 1);
} else {
	$tahunajar = (date("Y") + 1) . '/' . (date("Y") + 2);
}

?>
<tr>
	<td style="padding:25px;" colspan="2">
		<p style="text-align:center">KARTU UJIAN<br />
			Nomor : 421.5/194</p>
		<p></p>
		<div class="row">
			<div class="column">
				<p style="text-align:justify">Berdasarkan hasil tes kesehatan Panitia Penerimaan Peserta Didik Baru MAN 01 Karanganyar pada Tahun Pelajaran <?php echo $tahunajar; ?> memutuskan :</p>
				<table width="100%">
					<tr>
						<td>Pilihan Program Kejuruan</td>
						<td>:</td>
						<td><?php echo $data['jurusan']; ?></td>
					</tr>

					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><?php echo $data['nama']; ?></td>
					</tr>
					<tr>
						<td>No. Ujian</td>
						<td>:</td>
						<td>0<?php echo date("y"); ?>.<?php echo substr($id, 4, 8); ?> <?php echo $kodejur; ?></td>
					</tr>
					<tr>
						<td>Lokal Ujian</td>
						<td>:</td>
						<td>Kampus 1 MAN 1 Karanganyar</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Jl. Ngalian No. 04, Karanganyar</td>
					</tr>


				</table>
				<br><br><br><br><br><br><br>
				<hr size="0px" width="50%">
				<p style="text-align:center">Tanda Tangan Peserta.</p>
			</div>
			<div class="kanan">
				<img src='qrcode.php?src=http://<?php echo $_SERVER['HTTP_HOST'] ?><?php echo $_SERVER['REQUEST_URI'] ?>' width='180' />

				<br><br><br>
				<img src='<?php echo $data['foto']; ?>' width='180' />
			</div>
		</div>
		<hr style="border: 1px dashed">
		<p style="text-align:justify">Info Ujian Tertulis</p>
		<p style="text-align:justify">- Tanggal Ujian Tertulis : 15 Juni 2024</p>
		<p style="text-align:justify">- Datanglah Tepat waktu tidak ada penambahan bagi yang datang terlambar</p>
		<p style="text-align:justify">- Berpakaian yang rapi dan sopan, tidak memakai sandal, jeans, ataupun kaos</p>
		<p style="text-align:justify">- Pastikan tidak membawa hp ataupun alat telekomunikasi elektronik lainnya</p>
		<p style="text-align:justify">- Pastikan Membawa Pensil 2B untuk, Karet penghapus, dan Alat tulis lainnya.</p>
	</td>

</tr>



<?php echo "
       <tr>
           <td align=center style='background-color: #CCCCCC;' colspan=2>PPDB Online MAN 01 Karanganyar.</td>
       </tr>
</table></td></tr></table>
</center>
";

?>