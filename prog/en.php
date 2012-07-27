<?php
session_start();
$_SESSION['mova'] = array();
$_SESSION['mova'] = "2";
echo header("location:" .$_SERVER['HTTP_REFERER']);
?>