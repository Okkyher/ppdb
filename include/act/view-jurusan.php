<?php
$idjur = $_POST['id'];
$stmt_edit = $pdo->prepare("SELECT * FROM `jurusan` WHERE `jurusan`.`id` = :id");
$stmt_edit->execute(['id' => $idjur]);
$edt = $stmt_edit->fetch();

$response = array('success' => true, 'nama' => $edt['nama'], 'kode' => $edt['kode'], 'tampung' => $edt['tampung']);
