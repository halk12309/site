<?php
session_start();
include 'box/include.php';
$id_user=$_POST['user'];
$id_forum=$_POST['forum'];

$result = $db->query("SELECT * FROM rating");
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
    if($row['id_user']==$id_user and $row['id_forum']==$id_forum)
    {
        $sth=$db->exec("DELETE FROM rating WHERE id_user='$id_user' AND id_forum='$id_forum'");
    }
}
echo header('Location: readme.php');
?>