<?php
include 'box/include.php';
session_start();
define("DOV",150,true);
$dov=$DOV+150;
$head = $_POST['head'];
$text = $_POST['text'];
$id = $_POST['id'];
$text = htmlspecialchars($text, ENT_QUOTES);
$head = htmlspecialchars($head, ENT_QUOTES);

$result1=$db->query("SELECT id FROM comment ORDER BY id  DESC LIMIT 0,1");
$res1 = $result1->fetch(PDO::FETCH_ASSOC);
$last_id=(int)$res1['id']+1;
$id1=$_SESSION['userid'];
$sth = $db->exec("INSERT INTO comment (id, id_forum, head, text, date, id_user) VALUE ('$last_id','$id','$head','$text',NOW(),'$id1')");
$_SESSION['forum'] = array();
$_SESSION['forum'] = "NO";
echo header('Location: readme.php');
?>