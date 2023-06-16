<?php
require_once('database.php');

$db = new Database();

$did = $_GET['id'];

$res = $db->del($did);

header('location:admin-portal.php?rid=1');

?>