<?php
session_start();
include 'box/translate.php';
$i=$_SESSION[mova];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title> ����� ���������� - �������</title>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
      <meta name="reywords" content="�����"/>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <table cellspacing = "1" cellpadding = "7" border = "1">
         <tr class="tr1">
            <td class="td1">
               <p></p>
            </td>
            <td class="td2">
               ���� �����䳿 ��������
            </td>
            <td class="td3">
               <?
               if(isset($_SESSION['userid'])){include 'box/page2.php';}else {include 'box/page1.php';}
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
               <a href="ua.php"><img src="ua.jpg"  alt="���� �� �����������"/></a>
               <a href="ru.php"><img src="ru.png"  alt="���� �� ������"/></a>
            </td>
         </tr>
         <tr>
            <td>
               <p> q</p>
            </td>
            <td class="td6">
               <h1> <?php echo "{$tr[$i][reestr_tabl]} "; ?> </h1>
               <p> <?php echo "{$tr[$i][data_indicated]} "; ?> <font class="metka">*</font>  <?php echo "{$tr[$i][required]} "; ?></p>
               <form enctype="multipart/form-data" action="obrabotka.php" class="registr" method="post" name="form1">
                  <p>
                     <br/> <?php echo "{$tr[$i][enter_login]} "; ?><font class="metka">*</font><br/>
                     <input type="text" name ="login"/><br/>
                     <br/> <?php echo "{$tr[$i][enter_parol]} "; ?><font class="metka">*</font><br/>
                     <input type="password" name ="parol1"/><br/>
                     <br/> <?php echo "{$tr[$i][_enter_parol]} "; ?><font class="metka">*</font><br/>
                     <input type="password" name ="parol2"/><br/>
                     <br/> <?php echo "{$tr[$i][enter_email]} "; ?><font class="metka">*</font><br/>
                     <input type ="text" name = "email"/><br/>
                     <br/> <?php echo "{$tr[$i][enter_ima]} "; ?><font class="metka">*</font><br/>
                     <input type ="text" name = "ima"/><br/>
                     <br/> <?php echo "{$tr[$i][enter_fam]} "; ?><font class="metka">*</font><br/>
                     <input type = "text" name ="fam"/><br/>
                     <br/> <?php echo "{$tr[$i][enter_bat]} "; ?><font class="metka">*</font><br/>
                     <input type="text" name ="bat"/><br/>
                     <br/> <?php echo "{$tr[$i][your_avatar]} "; ?><font class="metka">*</font><br/>
                     <input type="file" name="userfile"/><br/><br/>
                     <input type="submit" value="OK"/>
                  </p>
            </form>
         </td>
            <td  class="td8">
               <?php echo "{$tr[$i][kilkist_korust]} "; ?>
               <?php
               include 'box/us_kilk.php';
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