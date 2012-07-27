<?php
include 'box/include.php';
session_start();
$score = $_POST['score'];
$id_user = $_SESSION['userid'];
$id_forum= $_POST['id'];
$sth = $db->exec("INSERT INTO rating (id_user, id_forum, score) VALUE ('$id_user','$id_forum','$score')");
echo header('Location: readme.php');
?>