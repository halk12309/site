<?php
session_start();
$_SESSION['mova'] = array();
$_SESSION['mova'] = "0";
echo header("location:" .$_SERVER['HTTP_REFERER']);
?>