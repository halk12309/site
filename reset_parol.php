<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd1';
$table = 'users';

$connect = mysql_connect($host, $user, $password);
$users = mysql_select_db ($database, $connect);

$email = $_POST['email'];
 
define("k",0,true);
$result = mysql_query("SELECT * FROM `users`");
while($row = mysql_fetch_array($result))
   {
      $email2 = $row['email'];
      if($email==$email2)
      {
         $login=$row['name'];
         $parol=$row['parol'];         
         mail("$email","відновлення пароля","ваш логін: $login\n
ваш пароль: $parol");
         echo header('Location: index.php');
         break;
      }else $k++;
   }
$result = mysql_query("SELECT id FROM `users` ORDER BY `id`  DESC LIMIT 1");
$row = mysql_fetch_array($result);
$last_id = (int)$row[0]+1;
if($k==$last_id) {echo header('Location: parol.php');}
?>