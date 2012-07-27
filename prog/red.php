<?php
session_start();
include 'box/include.php';

$id = $_POST['id'];
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
$sth=$db->exec("UPDATE forum SET text1='$text1' WHERE id='$id'");
$sth=$db->exec("UPDATE forum SET text2='$text2' WHERE id='$id'");
$sth=$db->exec("UPDATE forum SET text3='$text3' WHERE id='$id'");

$sth=$db->exec("UPDATE forum SET head1='$head1' WHERE id='$id'");
$sth=$db->exec("UPDATE forum SET head2='$head2' WHERE id='$id'");
$sth=$db->exec("UPDATE forum SET head3='$head3' WHERE id='$id'");

echo header('Location: forum.php');
?>