<?php
$id = $_POST['id'];
$stmt_edit = $pdo->prepare("SELECT * FROM `kelas` WHERE `kelas`.`id` = :id");
$stmt_edit->execute(['id' => $id]);
$edt = $stmt_edit->fetch();

$response = array('success' => true, 'nama' => $edt['nama'], 'kuota' => $edt['kuota']);
