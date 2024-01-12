<?php
session_start();
require_once('../include/config.php');
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
} else {
    $response = array('success' => false, 'message' => 'Error 404 No Action Found');
}
$pdo = null;

echo json_encode($response);
