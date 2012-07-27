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
	    <td class = "td4">
	      <?php
	      $result = $db->query("SELECT * FROM `users`");
	      $id=$_SESSION['userid'];
	      while($row = $result->fetch(PDO::FETCH_ASSOC))
	      {
		$id1 = $row['id'];
		if($id1==$id)
		{
		  $fam=$row['fam'];
		  $ima=$row['ima'];
		  $bat=$row['bat'];
		  $mesto=$row['mesto'];
		  $img=$row['img'];
		  $email=$row['email'];
		  $vh_time=$row['vh_time'];
		  $st_time=$row['st_time'];
		}
	      }
	      ?>
	      <img src="<?php echo $img ?>"/>
	      <?php
              echo  $fam . " ";
              echo  $ima . " " . $bat; 
              ?>
	      <br/>
              Time register:<?php echo $st_time; ?><br/>
              Time enter: <?php echo $vh_time; ?><br/>
              your email: <?php echo $email; ?><br/>
              <a href="red_us.php"> Edit  profil</a><br/>
              <a href="del_us.php" onclick="return confirm('Are You Sure?');"> Delete profil </a>
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