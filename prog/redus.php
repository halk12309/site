<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd1';
$table = 'users';

$connect = mysql_connect($host, $user, $password);
$users = mysql_select_db ($database, $connect);
$id=	$_SESSION['userid'];
mysql_query('SET NAMES cp1251');

    $ima=$_POST['ima'];
    $fam=$_POST['fam'];
    $bat=$_POST['bat'];
    $parol=$_POST['parol'];
    $email=$_POST['email'];
    $login=$_POST['login'];  

mysql_query("UPDATE `bd1` . `users` SET `ima` = '$ima' WHERE `id` = '$id'");
mysql_query("UPDATE `bd1` . `users` SET `bat` = '$bat' WHERE `id` = '$id'");
mysql_query("UPDATE `bd1` . `users` SET `fam` = '$fam' WHERE `id` = '$id'");
mysql_query("UPDATE `bd1` . `users` SET `parol` = '$parol' WHERE `id` = '$id'");
mysql_query("UPDATE `bd1` . `users` SET `email` = '$email' WHERE `id` = '$id'");
mysql_query("UPDATE `bd1` . `users` SET `name` = '$login' WHERE `id` = '$id'");
$last_id=$_SESSION['userid'];
include 'foto.php';
mysql_query("UPDATE `bd1` . `users` SET `img` = '$name3' WHERE `id` = '$id'");
echo header('Location: profil.php');
?>