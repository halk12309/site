<?php
session_start();
 unset($_SESSION['userid']);
echo header('Location: index.php');
?>