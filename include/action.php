<?php
session_start();
require_once('../include/config.php');
header('Content-Type: application/json');

// Replace this logic with your actual authentication mechanism
if (isset($_GET['act']) && $_GET['act'] == 'login') {

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM `tab_admin` WHERE `username` = :username");
    $stmt->execute(['username' => $username]);
    $row = $stmt->fetch();

    $hash_pass = $row['password'];
    if (password_verify($password, $hash_pass)) {
        $_SESSION['login'] = array('id' => $row['id']);
        $response = array('success' => true, 'message' => 'Login successful');
    } else {
        $response = array('success' => false, 'message' => 'Login failed. Invalid credentials');
    }
} else if (isset($_GET['act']) && $_GET['act'] == 'pendaftaran') {

    $UserId = strtotime('now');
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Using prepared statement to prevent SQL injection
    $stmt = $pdo->prepare("SELECT * FROM pengguna WHERE nisn = :nisn");
    $stmt->bindParam(':nisn', $username, PDO::PARAM_STR);
    $stmt->execute();

    // Check if there are rows returned
    if ($stmt->rowCount() > 0) {

        // Fetch the result
        $response = array('success' => false, 'message' => 'NISN ' . $username . 'Sudah Terdaftar');
        // Process $result as needed
    } else {
        // Example of inserting data
        $stmt = $pdo->prepare("INSERT INTO `pengguna`(`UserId`, `user`, `password`, `level`) VALUES (?, ?, ?, ?)");
        $stmt->execute([$UserId, $username, $password, "User"]);

        $response = array('success' => true, 'message' => 'Pendaftaran Berhasil Silahkan Login');
    }
}

echo json_encode($response);
