<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE>����� ����������</TITLE>
<meta name="reywords" content="���","��������","������","�����������","�����","���������","���� ����"/>
<link href="style.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY bgcolor = "#987654">
<table border =  "1" width = "100%" height = "100%" cellspacing = "1" cellpadding = "7">

<tr height = "90">
   <td width="20%">
      <img src="1.jpg" width ="100" heigth="120">
   </td>
   <td width = "65%" align = center>
      <font  face="Verdana" size="20" color="#cc0000"> ���� �� ���Ĳ� ��������</font>
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
      <a href="index.php"> ������� </a>&nbsp
      <a href="forum.php"> ����� </a>&nbsp
      <a href="regist.html"> �� �������</a>
      </font>
   </td>
   <td>
      <p></p>
   </td>
</tr>

<tr>
   <td>
      <font size = "5">
      <p> href="regist.html" ������� </p>
      <p> href="regist.html" ����� </p>
      <p> href="regist.html" �� �������</p>
      </font>
   </td>
   <td valign = top align = center>
      <form action="reset_parol.php" method="POST" name="form1" align = "left">
         <font size="5">
         <br>������ ����  ���������� �����<br>
         <input type ="text" name = "email"><br>
         <input type="submit" value="OK">
         </font>      
      </form>
   </td>
   <td  valign = top>
ʳ������ ������������ �� ����:&nbsp&nbsp
<?
include "box/us_kilk.php";
?>   
</td>
</tr>
<tr height = "20" >
   <td  colspan = "3"> 
      <p>A���� �����: ������ ³����</p>
   </td>
</tr>
</table>
</BODY>
</HTML>