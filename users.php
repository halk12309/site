<?php
session_start();
include 'box/translate.php';
include 'box/include.php';
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
               if(isset($_SESSION['userid'])){include 'box/page2.php';}else {include 'box/page1.php';}
               ?>
            </td>
         </tr>
         <tr>
            <td colspan = "2" class="td4">
                  <a href="index.php"> <?php echo $tr[$i][golovna]; ?> </a>
                  <a href="forum.php"> <?php echo $tr[$i][forum]; ?> </a>
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
            <td class = "td4">
               <?php
               $host = 'localhost';
               $result = $db->query("SELECT * FROM `users`");
               while($row = $result->fetch(PDO::FETCH_ASSOC))
               {
                  ?>
                  <table cellpadding = "7"  cellspacing = "1" border = "1"  width = "100%">
                     <tr>
                        <td>
                           <?php echo $row['name'];?><br/> <?php ?>
                        </td>
                        <td width = "50">
                           <form action="rol.php" method="POST" name="form5" align = "left"/>
                              <p>
                                 <input type=hidden value="<?php echo $row['id']; ?>" name="id"/>
                                 <input type=hidden value="5" name="mesto"/>
                                 <input type="submit" value="Admin"/>
                              </p>
                           </form>
                        </td>
                        <td width = "50">
                           <form action="rol.php" method="POST" name="form4" align = "left">
                              <p>
                                 <input type=hidden value="4" name="mesto"/>
                                 <input type=hidden value="<?php echo $row['id']; ?>" name="id"/>
                                 <input type="submit" value="Redactor"/>
                              </p>
                           </form>
                        </td>
                        <td width = "50">
                           <form action="rol.php" method="POST" name="form3" align = "left">
                              <p>
                                 <input type=hidden value="3" name="mesto"/>
                                 <input type=hidden value="<?php echo $row['id']; ?>" name="id"/>
                                 <input type="submit" value="Korust"/>
                              </p>
                           </form>
                        </td>
                        <td width = "50">
                           <form action="rol.php" method="POST" name="form2" align = "left">
                              <p>
                                 <input type=hidden value="2" name="mesto"/>
                                 <input type=hidden value="<?php echo $row['id']; ?>" name="id"/>
                                 <input type="submit" value="Ban"/>
                              </p>
                           </form>
                        </td>
                        <td width = "50">
                           <form action="rol.php" method="POST" name="form1" align = "left">
                              <p>
                                 <input type=hidden value="1" name="mesto"/>
                                 <input type=hidden value="<?php echo $row['id']; ?>" name="id"/>
                                 <input type="submit" value="delete"/>
                              </p>
                           </form>
                        </td>
                     </tr>
                  </table>
                  <?php
               }?>
            </td>
            <td  valign = top>
               Number of Users Online: <?php
               include 'box/us_kilk.php';?>
            </td>
         </tr>
         <tr height = "20" >
            <td  colspan = "3">
               Author Site: Radchuk Vitaliy
            </td>
         </tr>
      </table>
   </body>
</html>