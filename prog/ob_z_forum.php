<?php
session_start();
 $_SESSION['forum'] = array();
$_SESSION['forum'] = "OK";
echo header('Location: forum.php');
?>