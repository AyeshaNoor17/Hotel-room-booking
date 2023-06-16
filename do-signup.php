<?php
require_once('database.php');

$db = new Database();

$name = $_POST['rname'];
$pass = $_POST['rpass'];
$email = $_POST['remail'];
$phone = $_POST['rphone'];

$res = $db->signup($name, $pass, $phone, $email);

if ($res === true) {
   
     header('location:signin.php?rid=3');
} else {
     header('location:signin.php?rid=4');
}

?>