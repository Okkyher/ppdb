<?php
session_start();
// require_once('../include/config.php');
require_once('config.php');
header('Content-Type: application/json');

if (isset($_POST['aksi']) && $_POST['aksi'] == 'pendaftaran') {

    $UserId = strtotime('now');
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Using prepared statement to prevent SQL injection
    $stmt = $pdo->prepare("SELECT * FROM pengguna WHERE user = :nisn");
    $stmt->bindParam(':nisn', $username, PDO::PARAM_STR);
    $stmt->execute();

    // Check if there are rows returned
    if ($stmt->rowCount() > 0) {

        // Fetch the result
        $response = array('success' => false, 'message' => 'NISN ' . $username . ' Sudah Terdaftar');
        // Process $result as needed
    } else {
        // Example of inserting data
        $stmt_reg = $pdo->prepare("INSERT INTO `pengguna`(`UserId`, `user`, `password`, `level`) VALUES (?, ?, ?, ?)");
        $stmt_reg->execute([$UserId, $username, $password, "User"]);

        $stmt_mod = $pdo->prepare("INSERT INTO `mod_data_alumnia`(`id`, `nisn`, `nama`) VALUES (?, ?, ?)");
        $stmt_mod->execute([$UserId, $username, $nama]);

        $response = array('success' => true, 'message' => 'Pendaftaran Berhasil Silahkan Login');
    }
} else if (isset($_POST['aksi']) && $_POST['aksi'] == 'login') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM `pengguna` WHERE `user` = :username");
    $stmt->execute(['username' => $username]);
    $row = $stmt->fetch();

    $hash_pass = $row['password'];
    if (password_verify($password, $hash_pass)) {
        $lastlog = date("Y-m-d H:i:s");
        $stmt_log = $pdo->prepare("UPDATE `pengguna` SET `lastlog` = ? WHERE `user` = ?");
        $stmt_log->execute([$lastlog, $username,]);


        $_SESSION['login'] = array('id' => $row['UserId']);
        $response = array('success' => true, 'message' => 'Login Berhasil');
    } else {
        $response = array('success' => false, 'message' => 'Login Gagal');
    }
} else if (isset($_POST['aksi']) && $_POST['aksi'] == 'add-jurusan') {
    $nama = htmlspecialchars($_POST['nama']);
    $kode = htmlspecialchars($_POST['kode']);
    $tampung = preg_replace("/[^0-9]/", "", $_POST['tampung']);

    $stmt_add = $pdo->prepare("INSERT INTO `jurusan`(`nama`, `kode`, `tampung`) VALUES (?, ?, ?)");
    $success = $stmt_add->execute([$nama, $kode, $tampung]);
    if ($success == true) {
        $response = array('success' => true, 'message' => 'Berhasil Menambahkan Jurusan');
    } else {
        $response = array('success' => false, 'message' => 'Gagal Menambahkan Jurusan');
    }
} else if (isset($_POST['aksi']) && $_POST['aksi'] == 'view-jurusan') {
    $idjur = $_POST['id'];
    $stmt_edit = $pdo->prepare("SELECT * FROM `jurusan` WHERE `jurusan`.`id` = :id");
    $stmt_edit->execute(['id' => $idjur]);
    $edt = $stmt_edit->fetch();

    $response = array('success' => true, 'nama' => $edt['nama'], 'kode' => $edt['kode'], 'tampung' => $edt['tampung']);
} else if (isset($_POST['aksi']) && $_POST['aksi'] == 'edit-jurusan') {
    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $kode = htmlspecialchars($_POST['kode']);
    $tampung = preg_replace("/[^0-9]/", "", $_POST['tampung']);

    $stmt_edt = $pdo->prepare("UPDATE `jurusan` SET `nama` = ?, `kode` = ?, `tampung` = ? WHERE `id` = ?");
    $success = $stmt_edt->execute([$nama, $kode, $tampung, $id]);
    if ($success == true) {
        $response = array('success' => true, 'message' => 'Berhasil Mengedit Jurusan');
    } else {
        $response = array('success' => false, 'message' => 'Gagal Mengedit Jurusan');
    }
} else if (isset($_POST['aksi']) && $_POST['aksi'] == 'hapus-data') {
    $id = $_POST['id'];
    $col = htmlspecialchars($_POST['col']);
    $table = htmlspecialchars($_POST['table']);

    // Validate and sanitize the table and column names if necessary

    // Construct the SQL query
    $sql = "DELETE FROM $table WHERE $col = :id";

    // Prepare the statement
    $stmt_del = $pdo->prepare($sql);

    // Bind the parameter
    $stmt_del->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the query
    $success = $stmt_del->execute();

    // Check the result
    if ($success) {
        $response = array('success' => true, 'message' => 'Berhasil Menghapus Jurusan');
    } else {
        $response = array('success' => false, 'message' => 'Gagal Menghapus Jurusan');
    }
} else {
    $response = array('success' => false, 'message' => 'Error 404 No Action Found');
}
$pdo = null;

echo json_encode($response);
