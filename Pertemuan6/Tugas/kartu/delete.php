<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];

$sql = "DELETE FROM kartu WHERE id = ?";

$st = $dbh->prepare($sql);

$st->execute([$_id]);

header('location:index.php');
?>