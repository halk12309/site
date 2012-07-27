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
	       <form  action="red.php" method="POST" name = "form2">
		  <?php
		  $result = $db->query("SELECT * FROM forum");
		  $id1 = $_POST['id'];
	          while($row =$result->fetch(PDO::FETCH_ASSOC))
		  {
		     $id2 = $row['id'];
		     if($id1==$id2)
		     {
			$text1=$row['text1'];
			$head1=$row['head1'];
			$text2=$row['text2'];
			$head2=$row['head2'];
			$text3=$row['text3'];
			$head3=$row['head3'];
		     }
		  }?>
		  Редагувати дані введені українською мовою:<br/>
		  <textarea cols="70" rows="2" name="head1"><?php echo $head1;?></textarea><br/>
		  <textarea cols="70" rows="7" name="text1"><?php echo $text1;?></textarea><br/>
		  Редагувать данные введены рксским языком: <br/>
		  <textarea cols="70" rows="2" name="head2"><?php echo $head2;?></textarea><br/>
		  <textarea cols="70" rows="7" name="text2"><?php echo $text2;?></textarea><br/>
		  Edit entered Angles in:<br/>
		  <textarea cols="70" rows="2" name="head3"><?php echo $head3;?></textarea><br/>
		  <textarea cols="70" rows="7" name="text3"><?php echo $text3;?></textarea><br/>
		  <input type="hidden" value="<?php echo $id1; ?>" name="id"/>
		  <input type="submit" value="<?php echo "{$tr[$i][redag]}"; ?>" name="OK">
	       </form>
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