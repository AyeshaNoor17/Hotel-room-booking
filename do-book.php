<?php
require_once('database.php');

$db = new Database();

$cna = $_POST['cusname'];
$cno = $_POST['phone'];
$di = $_POST['date-in'];
$do = $_POST['date-out'];
$p = $_POST['pay'];
$rd = $_POST['id'];

$res = $db->addcus($cna, $cno, $di, $do, $p, $rd);

$res = $db->update($rd);


header('location:rooms.php?rid=6');

?>