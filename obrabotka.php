<?php
session_start();
include 'box/include.php';
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
$result = $db->query("SELECT * FROM `users`");
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
	$login2 = $row['name'];
	$email2 = $row['email'];
	if($login != $login2){$k++;}
	if($email != $email2){$k1++;}
}
$result = $db->query("SELECT id FROM users ORDER BY id  DESC LIMIT 0,1");
$row = $result->fetch(PDO::FETCH_ASSOC);
$last_id = (int)$row['id']+1;
if($k!=$last_id) {echo $last_id;  ?>  <h3>такий логін уже існує<h3><?php }else{
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
   $sth = $db->exec("INSERT INTO users (id, name, parol,email,ima,bat,fam,mesto,st_time,img) value ('$last_id', '$login','$parol1','$email','$ima','$bat','$fam','$mesto', NOW(),'$name3')");
		$_SESSION['userid'] = $row['id'];
		$_SESSION['login'] = $login;
		$_SESSION['mova'] = 2;
		$_SESSION['forum'] = "NO";
		$_SESSION['comment'] = "OK";
		$id=$row['id'];
		$sth=$db->exec("UPDATE users SET vh_time=NOW() WHERE id='$id'");
   header('Location: no_problem.php');
}

else{header('Location: problem.php');}}}}}}}}}
?>