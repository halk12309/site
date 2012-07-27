<?php
session_start();
 $_SESSION['comment'] = array();
$_SESSION['comment'] = "NO";
echo header('Location: readme.php');
?>