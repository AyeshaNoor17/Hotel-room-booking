<?php
require_once('database.php');

$db = new Database();

$name = $_POST['uname'];
$pass = $_POST['upass'];

$res = $db->admin($name, $pass);

if ($res === true) {
    setcookie('loged_in', true);
    header('location:admin-portal.php?rid=1');
} else {
    header('location:admin.php?rid=2');
}

?>