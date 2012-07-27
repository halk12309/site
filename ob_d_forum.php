<?php
session_start();
 $_SESSION['forum'] = array();
$_SESSION['forum'] = "NO";
echo header('Location: forum.php');
?>