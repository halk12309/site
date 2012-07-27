<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd1';
$table = 'users';

$connect = mysql_connect($host, $user, $password);
$users = mysql_select_db ($database, $connect);

$mesto = $_POST['mesto'];
$id = $_POST['id'];
if($mesto!= 1)mysql_query("UPDATE `bd1` . `users` SET `mesto` = '$mesto' WHERE `id` = '$id'");
if($mesto == 1)mysql_query("DELETE FROM `$table` WHERE `id`=$id LIMIT 1");
header('Location: users.php');
?>