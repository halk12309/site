<?php
$name1=$_FILES['userfile']['tmp_name'];
$name2="avatars/".$_FILES['userfile']['name'];
rename($name1, $name2);
$img2 = imagecreatefromjpeg($name2);
$img1 = imagecreatetruecolor(150,150);
imagecopyresampled($img1, $img2, 0, 0, 0, 0, 150, 150, min(imagesx($img2),imagesy($img2)), min(imagesx($img2),imagesy($img2)));
$name3="avatars/".$last_id.".jpg";
    imagejpeg($img1,$name3);
    imagedestroy($img1);
    imagedestroy($img2);
?>