<?php
include 'include.php';
session_start();
define("DOV",150,true);
$dov=$DOV+150;
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];
$head1 = $_POST['head1'];
$head2 = $_POST['head2'];
$head3 = $_POST['head3'];
$text1 = htmlspecialchars($text1, ENT_QUOTES);
$head1 = htmlspecialchars($head1, ENT_QUOTES);
$text2 = htmlspecialchars($text2, ENT_QUOTES);
$head2 = htmlspecialchars($head2, ENT_QUOTES);
$text3 = htmlspecialchars($text3, ENT_QUOTES);
$head3 = htmlspecialchars($head3, ENT_QUOTES);

$id = $_SESSION['userid'];
$result=$db->query("SELECT name FROM users WHERE id='$id'");
$res = $result->fetch(PDO::FETCH_ASSOC);
$login=$res['name'];

$result1=$db->query("SELECT id FROM forum ORDER BY id  DESC LIMIT 0,1");
$res1 = $result1->fetch(PDO::FETCH_ASSOC);
$last_id=(int)$res1['id']+1;

$sth = $db->exec("INSERT INTO forum (id, id_user, head1, text1,  head2, text2, head3, text3, dov) VALUE ('$last_id','$id','$head1','$text1','$head2','$text2','$head3','$text3','$dov')");
$_SESSION['forum'] = array();
$_SESSION['forum'] = "OK";
echo header('Location: forum.php');
?>