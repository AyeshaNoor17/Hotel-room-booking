<?php
require_once('database.php');

$db = new Database();

$name = $_POST['uname'];
$pass = $_POST['upass'];

$res = $db->signin($name, $pass);

if ($res === true) {
    setcookie('loged_in', true);
    header('location:index.php?rid=1');
} else {
    header('location:signin.php?rid=2');
}

?>