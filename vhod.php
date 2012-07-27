<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd1';
$table = 'users';

$connect = mysql_connect($host, $user, $password);
mysql_set_charset('utf8');
$users = mysql_select_db ($database, $connect);

$login1 = $_POST['login'];
$parol1 = $_POST['parol'];

define("k",0,true);
$result = mysql_query("SELECT * FROM `users`");
while($row = mysql_fetch_array($result))
{
	$login2 = $row['name'];
	$parol2 = $row['parol'];
	if($login1==$login2 and $parol1==$parol2)
	{
	  $mesto=$row['mesto'];
	  if($mesto==2){echo "YOUR USER IS BAN";exit();}		
		$_SESSION['userid'] = $row['id'];
		$_SESSION['login'] = $login2;
		$_SESSION['mova'] = 2;
		$_SESSION['forum'] = "OK";
		$_SESSION['comment'] = "NO";
		$id=$row['id'];
		mysql_query("UPDATE `bd1` . `users` SET `vh_time` = NOW() WHERE `id` = '$id'");
	}
	 else{$k++;}
}
$result = mysql_query("SELECT id FROM `users` ORDER BY `id`  DESC LIMIT 1");
$row = mysql_fetch_array($result);
$last_id = (int)$row[0]+1;
if($k==$last_id) {echo "<h3>Не правильний логін або пароль</h3>";}else{
echo header('Location: index.php');}
?>