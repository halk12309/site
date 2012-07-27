<?php
session_start();
include 'include.php';
$id=$_POST['id'];
$sth=$db->exec("DELETE FROM forum WHERE id=" . $id);
echo header ('location: forum.php');
?>