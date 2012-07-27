<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd1';
$table = 'users';

$connect = mysql_connect($host, $user, $password);
$users = mysql_select_db ($database, $connect);
$result = mysql_query("SELECT id FROM `users` ORDER BY `id`  DESC LIMIT 1");
$row = mysql_fetch_array($result);
echo (int)$row[0]+1;

$id=$_SESSION['userid'];
$mesto1=mysql_query("SELECT mesto FROM users WHERE id = '$id'");
$res2 = mysql_fetch_array($mesto1);
$res=$res2['mesto'];
echo "<br />";



if($res==5 and isset($_SESSION['userid'])){?><a href="users.php"> <?php echo "{$tr[$i][users]} "; ?></a> <?php }
?>