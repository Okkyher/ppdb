<?php
session_start();
require_once('../include/config.php');
header('Content-Type: application/json');

// Replace this logic with your actual authentication mechanism
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

echo json_encode($response);
