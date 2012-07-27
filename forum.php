<?php
session_start();
include 'box/translate.php';
include 'box/include.php';
$i=$_SESSION[mova];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Форум проограмыста - Форум</title>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
      <meta name="reywords" content="?????"/>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <table cellspacing = "1" cellpadding = "7" border = "1">
         <tr class="tr1">
            <td class="td1">
               <p></p>
            </td>
            <td class="td2">
               <p></p>
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
               <a href="ua.php"><img src="ua.jpg"  alt="???? ?? ????????????"/></a>
               <a href="ru.php"><img src="ru.png"  alt="???? ?? ??????"/></a>
            </td>
         </tr>
         <tr>
            <td>
               <p></p>
            </td>
            <td class ="td6">
               <?php
               if(!isset($_SESSION['userid']))
               {
                  echo $res=0;
               }
               else
               {
               $id1=$_SESSION['userid'];              
               $mesto=$db->query("SELECT mesto FROM users WHERE id = '$id1'");
               $res1 = $mesto->fetch(PDO::FETCH_ASSOC);
               $res=$res1['mesto'];
               }
               $result = $db->query("SELECT * FROM forum");
               while($row = $result->fetch(PDO::FETCH_ASSOC))
               {
                  $id_user=$row[id_user];
                  $image1=$db->query("SELECT * FROM users WHERE id = '$id_user'");
                  $res2 = $image1->fetch(PDO::FETCH_ASSOC);
                  $img=$res2['img'];
                  $login=$res2['name']?>
                  <table border =  "1" cellspacing = "1" width = "70%">
                     <tr>
                        <td rowspan="2" class="td9">
                           <img src=" <?php echo $img ?>" alt="sait in English"/>
                           <?php
                           echo $login;?>
                        </td>
                        <td class ="td8">
                           <?php
                           echo $tr[$i][topic] . ": ";
                           if($i==0)$head=$row['head1'];
                           if($i==1)$head=$row['head2'];
                           if($i==2)$head=$row['head3'];
                           echo $head;?>
                        </td>
                        <td class = "td10">
                           <table>
                              <tr>
                                 <td>
                                    <form  action="readme.php" method="post" name = "form3">
                                       <p>
                                       <input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
                                       <input type="submit" value="<?php echo $tr[$i][readme]?>"/>
                                       </p>
                                    </form>
                                 </td>
                                 <td>
                                    <?php
                                    if(($_SESSION['userid']==$row['id_user'] and $res>3) or ($res==5) and isset($_SESSION['userid']))
                                    {
                                       ?>
                                       <form  action="redaktor.php" method="post" name = "form3">
                                          <p>
                                          <input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
                                          <input type="submit" value=" <?php echo $tr[$i][redag]; ?>"/>
                                          </p>
                                       </form>
                                       <?php
                                    } ?>
                                 </td>
                                 <td>
                                    <?php
                                    if(($_SESSION['userid']==$row['id_user'] and $res>3) or ($res==5) and isset($_SESSION['userid']))
                                    {
                                       ?>
                                       <form  action="del.php" method="post" name = "form2">
                                          <p>
                                          <input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
                                          <input type="submit" value="<?php echo $tr[$i][vudalutu]; ?>"/>
                                          </p>
                                       </form>
                                       <?php
                                    } ?>
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2" class="td8">
                           <?php
                           echo $tr[$i][message] . ": ";
                           if($i==0)$text=$row['text1'];
                           if($i==1)$text=$row['text2'];
                           if($i==2)$text=$row['text3'];
                           if(strlen($text)>150){$text = substr($text,0,150);$text .="...";}
                           echo $text;
                           ?>
                        </td>
                     </tr>
                  </table>
                  <?php
               }
               if($_SESSION['forum'] == "OK" and $res>3){include 'box/page12.php';}
               if($_SESSION['forum'] == "NO" and $res>3){include 'box/page11.php';}?>
            </td>
            <td  class="td8">
               <?php echo $tr[$i][kilkist_korust]; ?>
               <?php
               include 'box/us_kilk.php';
               ?>
            </td>
         </tr>
         <tr class="tr4">
            <td  colspan = "3">
               <?php echo $tr[$i][avtor_sait]; ?>
            </td>
         </tr>
      </table>
   </body>
</html>