<?php
session_start();
include 'box/translate.php';
include 'box/include.php';
$i=$_SESSION[mova];
?>
<HTML>
   <HEAD>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
      <TITLE>Форум пограмістів</TITLE>
      <meta name="reywords" content="пїЅпїЅпїЅ","пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ","пїЅпїЅпїЅпїЅпїЅпїЅ","пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ","пїЅпїЅпїЅпїЅпїЅ","пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ","пїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅ"/>
      <link href="style.css" type="text/css" rel="stylesheet">
   </HEAD>
   <BODY bgcolor = "#987654">
   <table border =  "1" width = "100%" height = "100%" cellspacing = "1" cellpadding = "7">
      <tr height = "90">
	 <td width="20%">
	    <img src="1.jpg" width ="100" heigth="120">
	 </td>
	 <td width = "65%" align = center>
	    <font  face="Verdana" size="20" color="#cc0000"> Сайт на стадії розробки</font>
	 </td>
	 <td align = right>
	 <?
	 if(isset($_SESSION['userid'])){include 'box/page2.php';}else {include 'box/page1.php';}
	 ?>
	 </td>
      </tr>
      <tr height = "40">
	 <td colspan = "2">
	    <font size = "5">
	       <a href="index.php"> <?php echo "{$tr[$i][golovna]}"; ?> </a>&nbsp
	       <a href="forum.php"> <?php echo "{$tr[$i][forum]}"; ?> </a>&nbsp
	       <a href="profil.php"> <?php echo "{$tr[$i][profil]}"; ?></a>
	    </font>
	 </td>
	 <td align = right>
	    <a href='en.php'><img src="en.jpg" width ="30" heigth="36"><a>&nbsp
	    <a href='ua.php'><img src="ua.jpg" width ="30" heigth="36"><a>&nbsp
	    <a href='ru.php'><img src="ru.png" width ="30" heigth="36"><a>
	 </td>
      </tr>
      <tr>
	 <td>
	    <font size = "5">
	       <p>q</p>
	    </font>
	 </td>
	 <td valign = top align = left>
	 <?php
         $host = 'localhost';
         $user = 'root';
         $password = '';
         $database = 'bd1';
         $table = 'users';
         $connect = mysql_connect($host, $user, $password);
         $users = mysql_select_db ($database, $connect);
         mysql_query('SET NAMES cp1251');
         $result = mysql_query("SELECT * FROM `users`");
         $id=	$_SESSION['userid'];
	 while($row = mysql_fetch_array($result))
	 {
	    $id1 = $row['id'];
	    if($id1==$id)
	    {
	       $ima=$row['ima'];
	       $fam=$row['fam'];
	       $bat=$row['bat'];
	       $parol=$row['parol'];
	       $img=$row['img'];
	       $email=$row['email'];
	       $login=$row['name'];
	    }
	 }
	 ?>
	 <table align = center  border =  "1" width = "80%" height = "90%" cellspacing = "1" cellpadding = "7" >
	    <tr>
	       <td valign = top>
		  Your data: <br><br>
		  <form  enctype="multipart/form-data" action="redus.php" method="POST" name = "form2">
		     Your login:
		     <input type="text" name ="login"  value="<?php echo $login; ?>"> <br>
		     Your name:
		     <input type="text" name ="ima"  value="<?php echo $ima; ?>"> <br>
		     Your last name:
		     <input type="text" name ="fam"  value="<?php echo $fam; ?>"> <br>
		     Your name and patronymic:
		     <input type="text" name ="bat"  value="<?php echo $bat; ?>"> <br>
		     Your email:
		     <input type="text" name ="email"  value="<?php echo $email; ?>"> <br>
		     Your password:
		     <input type="text" name ="parol"  value="<?php echo $parol; ?>"> <br>
		     New avatar:
		     <input type="file" name="userfile"><br><br>
		     <input type="submit" value="Edit" name="OK">
		  </form>
	       </td>
	    </tr>
	 </table>
	 <a href="profil.php"> exit </a>
      </td>
      <td  valign = top>
	 <?php echo "{$tr[$i][kilkist_korust]}"; ?>&nbsp&nbsp
	 <?
	 include "box/us_kilk.php";
	 ?>
	 <br><br>
      </td>
      </tr>
      <tr height = "20" >
	 <td  colspan = "3">
	    <p><?php echo "{$tr[$i][avtor_sait]}"; ?> </p>
	 </td>
      </tr>
      </table>
   </BODY>
</HTML>