<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd1';
$table = 'users';

$connect = mysql_connect($host, $user, $password);
$users = mysql_select_db ($database, $connect);

$id=$_SESSION['userid'];
mysql_query("DELETE FROM `$table` WHERE `id`=$id LIMIT 1");
unset($_SESSION['userid']);
session_destroy();
echo header('Location: index.php');
?>