<?php
// Database connection parameters
$host = 'localhost';
$db   = 'apli_ppdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Database connection using PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_SESSION['login']['id'])) {
    $iduser = $_SESSION['login']['id'];
    $stmt_user = $pdo->prepare("SELECT * FROM pengguna LEFT JOIN mod_data_alumnia ON pengguna.UserId=mod_data_alumnia.id WHERE pengguna.UserId = :id");
    $stmt_user->execute(['id' => $iduser]);
    $usr = $stmt_user->fetch();
    $level = $usr['level'];
    if (isset($level) && $level == 'User') {
        $nisn = $usr['nisn'];
        $nama = $usr['nama'];
    } else {
        $nisn = 10001;
        $nama = 'Administrator';
    }

    // Fetch data from the database jurusan
    $stmt_jurusan = $pdo->prepare("SELECT * FROM jurusan");
    $stmt_jurusan->execute();
    $jurusan_db = $stmt_jurusan->fetchAll();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process image upload
        if (isset($_POST['inpstep4']) && isset($_FILES['image']) && isset($_POST['croppedImage'])) {
            // Get the uploaded image data
            $prestasi = $_POST['prestasi'];
            if ($prestasi == 'Ya') {
                $peringkat = $_POST['peringkat'];
                $hafal = $_POST['hafal'];
                $jmljuz = $_POST['jmljuz'];
            } else {
                $peringkat = '';
                $hafal = '';
                if ($hafal == 'Ya') {
                    $jmljuz = $_POST['jmljuz'];
                } else {
                    $jmljuz = '';
                }
            }
            $image = $_POST['croppedImage'];

            // Save the cropped image to a directory (you can customize the directory)
            $uploadDir = 'uploads/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $imageName = uniqid() . '.png'; // Unique image name
            $imagePath = $uploadDir . $imageName;

            // Save the image to the directory
            file_put_contents($imagePath, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image)));

            // Example of inserting data
            $date_add = date("Y-m-d");
            $stmt_upload_foto = $pdo->prepare("UPDATE `mod_data_alumnia` SET `pretasi` = ?, `peringkat` = ?, `hafal` = ?, `jmljuz` = ?, `foto` = ?, `tahap` = ?, `date_add` = ? WHERE `id` = ?");
            $stmt_upload_foto->execute([$prestasi, $peringkat, $hafal, $jmljuz, $imagePath, '2', $date_add, $iduser]);

            unset($_SESSION['tempstep1'], $_SESSION['tempstep2'], $_SESSION['tempstep3']);
            echo "<script type='text/javascript'>alert('Proses pendaftaran telah berhasil dan selanjutnya akan kami proses ke tahapan verifikasi administrasi untuk selanjutnya menerima kartu test');</script>";
            echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=./\">");
        } else if (isset($_POST['inpstep1'])) {
            $jurusan = $_POST['jurusan'];
            $nama = trim(htmlspecialchars($_POST['nama']));
            $tempatlhr = trim(htmlspecialchars($_POST['tempatlhr']));
            $tgl = $_POST['tgl'];
            $bln = $_POST['bln'];
            $thn = $_POST['thn'];
            $nik = preg_replace("/[^0-9]/", "", $_POST['nik']);
            $nokk = preg_replace("/[^0-9]/", "", $_POST['nokk']);
            $gender = $_POST['gender'];
            $akta = trim(htmlspecialchars($_POST['akta']));
            $agama = trim(htmlspecialchars($_POST['agama']));
            $tinggi = preg_replace("/[^0-9]/", "", $_POST['tinggi']);
            $berat = preg_replace("/[^0-9]/", "", $_POST['berat']);
            $tato = $_POST['tato'];
            $penyakit = trim(htmlspecialchars($_POST['penyakit']));
            $skhasal = trim(htmlspecialchars($_POST['skhasal']));
            $kip = preg_replace("/[^0-9]/", "", $_POST['kip']);

            $tempregis = array();

            if (!empty($_SESSION['tempstep1'])) {
                unset($_SESSION['tempstep1']);
                array_push($tempregis, $jurusan, $nama, $tempatlhr, $tgl, $bln, $thn, $nik, $nokk, $gender, $akta, $agama, $tinggi, $berat, $tato, $penyakit, $skhasal, $kip);
            } else {
                $tempregis = array();
                array_push($tempregis, $jurusan, $nama, $tempatlhr, $tgl, $bln, $thn, $nik, $nokk, $gender, $akta, $agama, $tinggi, $berat, $tato, $penyakit, $skhasal, $kip);
            }
            $_SESSION['tempstep1'] = $tempregis;

            $stmt_inpstep1 = $pdo->prepare("UPDATE `mod_data_alumnia` SET `jurusan` = ?, `nama` = ?, `lahir` = ?, `tgl` = ?, `bln` = ?, `thn` = ?, `nik` = ?, `nok` = ?, `kelamin` = ?, `akta` = ?, `agama` = ?, `tinggi` = ?, `berat` = ?, `tato` = ?, `penyakit` = ?, `asal_sekolah` = ?, `kip` = ? WHERE `id` = ?");
            $stmt_inpstep1->execute([$jurusan, $nama, $tempatlhr, $tgl, $bln, $thn, $nik, $nokk, $gender, $akta, $agama, $tinggi, $berat, $tato, $penyakit, $skhasal, $kip, $iduser]);
            echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=./?page=isi-formulir&step=2\">");
        } else if (isset($_POST['inpstep2'])) {
            $nilaism1 = preg_replace("/[^0-9]/", ".", $_POST['nilaism1']);
            $ratasm1 = preg_replace("/[^0-9]/", ".", $_POST['ratasm1']);
            $nilaism2 = preg_replace("/[^0-9]/", ".", $_POST['nilaism2']);
            $ratasm2 = preg_replace("/[^0-9]/", ".", $_POST['ratasm2']);
            $nilaism3 =  preg_replace("/[^0-9]/", ".", $_POST['nilaism3']);
            $ratasm3 = preg_replace("/[^0-9]/", ".", $_POST['ratasm3']);
            $nilaism4 = preg_replace("/[^0-9]/", ".", $_POST['nilaism4']);
            $ratasm4 = preg_replace("/[^0-9]/", ".", $_POST['ratasm4']);
            $nilaism5 = preg_replace("/[^0-9]/", ".", $_POST['nilaism5']);
            $ratasm5 =  preg_replace("/[^0-9]/", ".", $_POST['ratasm5']);
            $unbahasa =  preg_replace("/[^0-9]/", ".", $_POST['unbahasa']);
            $unbing =  preg_replace("/[^0-9]/", ".", $_POST['unbing']);
            $unmate =  preg_replace("/[^0-9]/", ".", $_POST['unmate']);
            $unipa = preg_replace("/[^0-9]/", ".", $_POST['unipa']);

            $tempregis = array();
            if (!empty($_SESSION['tempstep2'])) {
                unset($_SESSION['tempstep2']);
                array_push($tempregis, $nilaism1, $ratasm1, $nilaism2, $ratasm2, $nilaism3, $ratasm3, $nilaism4, $ratasm4, $nilaism5, $ratasm5, $unbahasa, $unbing, $unmate, $unipa);
            } else {
                array_push($tempregis, $nilaism1, $ratasm1, $nilaism2, $ratasm2, $nilaism3, $ratasm3, $nilaism4, $ratasm4, $nilaism5, $ratasm5, $unbahasa, $unbing, $unmate, $unipa);
            }
            $_SESSION['tempstep2'] = $tempregis;
            $stmt_inpstep2 = $pdo->prepare("UPDATE `mod_data_alumnia` SET `sem_i` = ?, `rata_i` = ?, `sem_ii` = ?, `rata_ii` = ?, `sem_iii` = ?, `rata_iii` = ?, `sem_iv` = ?, `rata_iv` = ?, `sem_v` = ?, `rata_v` = ?, `indo` = ?, `ing` = ?, `mat` = ?, `ipa` = ? WHERE `id` = ?");
            $stmt_inpstep2->execute([$nilaism1, $ratasm1, $nilaism2, $ratasm2, $nilaism3, $ratasm3, $nilaism4, $ratasm4, $nilaism5, $ratasm5, $unbahasa, $unbing, $unmate, $unipa, $iduser]);
            echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=./?page=isi-formulir&step=3\">");
        } else if (isset($_POST['inpstep3'])) {
            $alamat = trim(htmlspecialchars($_POST['alamat']));
            $rt = preg_replace("/[^0-9]/", "", $_POST['rt']);
            $rw = preg_replace("/[^0-9]/", "", $_POST['rw']);
            $dusun = trim(htmlspecialchars($_POST['dusun']));
            $kelurahan = trim(htmlspecialchars($_POST['kelurahan']));
            $kecamatan = trim(htmlspecialchars($_POST['kecamatan']));
            $kabupaten = trim(htmlspecialchars($_POST['kabupaten']));
            $ayah = trim(htmlspecialchars($_POST['ayah']));
            $pkjayah = trim(htmlspecialchars($_POST['pkjayah']));
            $ibu = trim(htmlspecialchars($_POST['ibu']));
            $pkjibu = trim(htmlspecialchars($_POST['pkjibu']));
            $gajidari = preg_replace("/[^0-9]/", "", $_POST['gajidari']);
            $gajismpi = preg_replace("/[^0-9]/", "", $_POST['gajismpi']);
            $telp = preg_replace("/[^0-9]/", "", $_POST['telp']);

            $tempregis = array();
            if (!empty($_POST['telp'])) {
                if (!empty($_SESSION['tempstep3'])) {
                    unset($_SESSION['tempstep3']);
                    array_push($tempregis, $alamat, $rt, $rw, $dusun, $kelurahan, $kecamatan, $kabupaten, $ayah, $pkjayah, $ibu, $pkjibu, $gajidari, $gajismpi, $telp);
                } else {
                    array_push($tempregis, $alamat, $rt, $rw, $dusun, $kelurahan, $kecamatan, $kabupaten, $ayah, $pkjayah, $ibu, $pkjibu, $gajidari, $gajismpi, $telp);
                }
            } else {
                echo "<script type='text/javascript'>alert('Nomor Telp Harap Diisi!');</script>";
            }
            $_SESSION['tempstep3'] = $tempregis;
            $stmt_inpstep3 = $pdo->prepare("UPDATE `mod_data_alumnia` SET `alamat` = ?, `rt` = ?, `rw` = ?, `dusun` = ?, `kelurahan` = ?, `kecamatan` = ?, `kabupaten` = ?, `nama_ayah` = ?, `kerja_ayah` = ?, `nama_ibu` = ?, `kerja_ibu` = ?, `gaji_dr` = ?, `gaji_sm` = ?, `hp` = ? WHERE `id` = ?");
            $stmt_inpstep3->execute([$alamat, $rt, $rw, $dusun, $kelurahan, $kecamatan, $kabupaten, $ayah, $pkjayah, $ibu, $pkjibu, $gajidari, $gajismpi, $telp, $iduser]);
            echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=./?page=isi-formulir&step=4\">");
        }
    }
} else {
}
