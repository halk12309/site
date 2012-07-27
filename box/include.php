<?php
$hostname = "localhost";
$username = "root";
$password = "";
try
{
$db = new PDO("mysql:host=$hostname;dbname=bd1", $username, $password);
}
catch(PDOException $e)
{
echo $e->getMessage();
}
$db->exec('SET CHARACTER SET cp1251');
$db->exec('SET NAMES cp1251');
?>