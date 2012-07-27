<?php
session_start();
$_SESSION['comment'] = array();
$_SESSION['comment'] = "OK";
echo header('Location: readme.php');
?>