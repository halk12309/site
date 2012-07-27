<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd1';
$table = 'users';
$mesto=3;

$connect = mysql_connect($host, $user, $password);
$users = mysql_select_db ($database, $connect);

$login = $_POST['login'];
$parol1 = $_POST['parol1'];
$parol2 = $_POST['parol2'];
$ima = $_POST['ima'];
$bat = $_POST['bat'];
$fam = $_POST['fam'];
$email = $_POST['email'];
$match1 = preg_match( "/[a-z\d]{6,}/is", $_POST['parol1'] );
$match2 = preg_match( "/[a-z\d]{1,}/is", $_POST['login'] );
$match3 =  preg_match( "/[a-z\d]{1,}/is", $_POST['login'] );;
$match4 =  preg_match( "/[a-z\d]{1,}/is", $_POST['login'] );;
$match5 =  preg_match( "/[a-z\d]{1,}/is", $_POST['login'] );;
$match6 =  preg_match( "/[a-z\d]{1,}/is", $_POST['login'] );;
define("k",0,true);
define("k1",0,true);
$result = mysql_query("SELECT * FROM `users`");
while($row = mysql_fetch_array($result))
{
	$login2 = $row['name'];
	$email2 = $row['email'];
	if($login != $login2){$k++;}
	if($email != $email2){$k1++;}
}
$result = mysql_query("SELECT id FROM `users` ORDER BY `id`  DESC LIMIT 1");
$row = mysql_fetch_array($result);
$last_id = (int)$row['id']+1;
if($k!=$last_id) {?> <h3>такий логін уже існує<h3><?php }else{
if($k1!=$last_id) {?> <h3>користувач з таким електронним адресом уже існує<h3><?php }else{
if ( $match1 != 1 )  { header('Location: problem.php');}else{
if ( $match2 != 1 )  { header('Location: problem.php');}else{
if ( $match4 != 1 )  { header('Location: problem.php');}else{
if ( $match3 != 1 )  { header('Location: problem.php');}else{
if ( $match5 != 1 )  { header('Location: problem.php');}else{
if ( $match6 != 1 )  { header('Location: problem.php');}else{
if($parol1==$parol2)
{
   include 'box/foto.php';
   mysql_query ("INSERT INTO `bd1`.`users` (`id`, `name`, `parol`,`email`,`ima`,`bat`,`fam`,`mesto`,`st_time`,`img`) value ('$last_id', '$login','$parol1','$email','$ima','$bat','$fam','$mesto', NOW(),'$name3')");
		$_SESSION['userid'] = $row['id'];
		$_SESSION['login'] = $login2;
		$_SESSION['mova'] = 2;
		$_SESSION['forum'] = "NO";
		$id=$row['id'];
		mysql_query("UPDATE `bd1` . `users` SET `vh_time` = NOW() WHERE `id` = '$id'");
   header('Location: no_problem.php');
}

else{header('Location: problem.php');}}}}}}}}}
?>