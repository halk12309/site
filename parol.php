<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE>Форум програміста</TITLE>
<meta name="reywords" content="код","програма","задача","обговорення","форум","допоможіть","розв язок"/>
<link href="style.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY bgcolor = "#987654">
<table border =  "1" width = "100%" height = "100%" cellspacing = "1" cellpadding = "7">

<tr height = "90">
   <td width="20%">
      <img src="1.jpg" width ="100" heigth="120">
   </td>
   <td width = "65%" align = center>
      <font  face="Verdana" size="20" color="#cc0000"> САЙТ НА СТАДІЇ РОЗРОБКИ</font>
   </d>
   <td align = right>
<?
if(isset($_SESSION['userid'])){include 'box/page2.php';}else {include 'box/page1.php';}
?>
   </td>
</tr>

<tr height = "40">
   <td colspan = "2">
      <font size = "5">
      <a href="index.php"> головна </a>&nbsp
      <a href="forum.php"> форум </a>&nbsp
      <a href="regist.html"> мій профіль</a>
      </font>
   </td>
   <td>
      <p></p>
   </td>
</tr>

<tr>
   <td>
      <font size = "5">
      <p> href="regist.html" головна </p>
      <p> href="regist.html" форум </p>
      <p> href="regist.html" мій профіль</p>
      </font>
   </td>
   <td valign = top align = center>
      <form action="reset_parol.php" method="POST" name="form1" align = "left">
         <font size="5">
         <br>Введіть свою  електронну пошту<br>
         <input type ="text" name = "email"><br>
         <input type="submit" value="OK">
         </font>      
      </form>
   </td>
   <td  valign = top>
Кількість користувачів на сайті:&nbsp&nbsp
<?
include "box/us_kilk.php";
?>   
</td>
</tr>
<tr height = "20" >
   <td  colspan = "3"> 
      <p>Aвтор сайту: Радчук Віталій</p>
   </td>
</tr>
</table>
</BODY>
</HTML>