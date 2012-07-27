<?php
session_start();
include 'box/translate.php';
include 'box/include.php';
$i=$_SESSION[mova];
$id1 = $_POST['id'];
$id=$_SESSION['userid'];
if ($id1){ unset($_SESSION['text']); $_SESSION['text']=$id1;}
$iddd = $_SESSION['text'];
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
            <td class ="td11">
	       <?php
	       $result =$db->query("SELECT * FROM forum");
	       $id1 = $_SESSION['text'];
	       while($row = $result->fetch(PDO::FETCH_ASSOC))
	       {
		  $id2=$row['id'];
		  if($id1==$id2)
		  {
		     if($i==0){
			$text=$row['text1'];
			$head=$row['head1'];
		     }
		     if($i==1){
			$text=$row['text2'];
			$head=$row['head2'];
		     }
		     if($i==2){
			$text=$row['text3'];
			$head=$row['head3'];
		     }    
		  }
	       }
	       ?>
	       <br/>
	       Тема: <?php
	       echo $head;
	       ?><br/>
	       Повідомлення: <?php
	       echo $text;
	       ?>
	       <br/>
	       <?php
	       $result = $db->query("SELECT AVG(score) FROM rating WHERE id_forum = '$iddd'");
	       $row = $result->fetch(PDO::FETCH_ASSOC);
	       echo $tr[$i][score]." " . sprintf("%.1f", $row['AVG(score)'])." "." ";
	       $result = $db->query("SELECT * FROM rating");
	       $q=0;
               while($row = $result->fetch(PDO::FETCH_ASSOC))
	       {
		  if($row['id_user']==$id and $row['id_forum']==$iddd){$q=1;$score1=$row['score'];}
		  $k++;
	       }
	       if($q==1)
	       {
		  echo $tr[$i][your_score]." ". $score1;?>
		  <br/>
                  <form  action="del_com.php" method="post" name = "form3">
                     <p>
                        <input type="hidden" value="<?php echo $id; ?>" name="user"/>
			<input type="hidden" value="<?php echo $iddd; ?>" name="forum"/>
                        <input type="submit" value="<?php echo $tr[$i][vudalutu]?>"/>
                     </p>
                  </form>
		  <?php
	      } 
	       else
	       {
	       ?>
	       <form  action="score.php" method="post" name = "form3">
		  <p>
		     <?php echo $tr[$i][your_score]?>
		     <select name="score">
			<option>1</option>
		        <option>2</option>
		        <option>3</option>
		        <option>4</option>
		        <option>5</option>
		        <option>6</option>
		        <option>7</option>
		        <option>8</option>
		        <option>9</option>
		        <option>10</option>
		     </select>
		     <input type="hidden" value="<?php echo $iddd; ?>" name="id"/>
		     <input type="submit" value="OK"/>
		  </p>
	       </form>
	       <?php } ?>
	       <a href="forum.php"> <?php echo $tr[$i][retur]; ?></a>
	       <br/>
	       <?php
	       $result = $db->query("SELECT * FROM comment");
               while($row = $result->fetch(PDO::FETCH_ASSOC))
               {
		  if($id1==$row['id_forum']){
		  $us_id = $row['id_user'];
		  $result1=$db->query("SELECT * FROM users WHERE id = '$us_id'");
                  $res1 = $result1->fetch(PDO::FETCH_ASSOC);
                  
		  $img = $res1['img'];
		  $login=$res1['name'];
		  $date=$row['date'];
		  ?>
		  <table border =  "1" cellspacing = "1" width = "70%">
                     <tr>
                        <td rowspan="2" class="td9">
			   <img src=" <?php echo $img ?>" alt="sait in English"/>
                        </td>
                        <td class ="td8"><?php
			   echo $tr[$i][topic] . ": ";
			   echo $row['head'];
			   ?>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2" class="td11"><?php
			   echo $tr[$i][comment] . ": ";
			   if(!$row['head']){$text = substr($row['text'],0,15);}
			   echo $text;
                          ?>
                        </td>
                     </tr>
		     <tr>
			<td>
			   <a href="profil_us.php?id=<?php echo $us_id;?>"><?php echo $login ?></a>
			</td>
			<td>
			   <?php
			   echo $date;
			   ?>
			</td>
		     </tr>
                  </table>
	 <?php }

	 
	 }
	 if($_SESSION['comment'] == "OK" and $res!=2){include 'box/page22.php';}
         if($_SESSION['comment'] == "NO" and $res!=2){include 'box/page21.php';}?>
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