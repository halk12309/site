<?php
session_start();
include 'translate.php';
$i=$_SESSION[mova];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title> Форум програмістів - Головна</title>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
      <meta name="reywords" content="форум"/>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <table cellspacing = "1" cellpadding = "7" border = "1">
         <tr class="tr1">
            <td class="td1">
               <p></p>
            </td>
            <td class="td2">
               Сайт настадії розробки
            </td>
            <td class="td3">
               <?
               if(isset($_SESSION['userid'])){include 'page2.php';}else {include 'page1.php';}
               ?>
            </td>
         </tr>
         <tr>
            <td colspan = "2" class="td4">
                  <a href="index.php"> <?php echo "{$tr[$i][golovna]} "; ?> </a>
                  <a href="forum.php"> <?php echo "{$tr[$i][forum]} "; ?> </a>
                  <?php if(isset($_SESSION['userid']))
                  {
                     ?>
                     <a href="profil.php"> <?php echo "{$tr[$i][profil]} "; ?></a>
            <?php }?>
            </td>
            <td class="td5">
               <a href="en.php"><img src="en.jpg"  alt="sait in English"/></a>
               <a href="ua.php"><img src="ua.jpg"  alt="Сайт на Українському"/></a>
               <a href="ru.php"><img src="ru.png"  alt="Сайт на Руском"/></a>
            </td>
         </tr>
         <tr>
            <td>
               <p>текст</p>
            </td>
            <td valign = top align = center>
               <h3> перевірте коректність даних</h3><br/>
               <a href="regist.html"> попробувати ще раз<a>
            </td>
            <td  class="td8">
               <?php echo "{$tr[$i][kilkist_korust]} "; ?>
               <?php
               include 'us_kilk.php';
               ?>
            </td>
         </tr>
         <tr class="tr4">
            <td  colspan = "3">
               <?php echo "{$tr[$i][avtor_sait]} "; ?>
            </td>
         </tr>
      </table>
   </body>
</html>