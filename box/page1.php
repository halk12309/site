<form action="vhod.php" method="post" name="form1">
         <p>
         login:
         <input type="text" name ="login"/>
         <br />
         password:
         <input type="password" name ="parol"/>  
         <br />
         <input type="submit" value="enter"/>
         </p>
</form>
      <a href="parol.php"><?php echo "{$tr[$i][res_parol]} "; ?></a> 
      <br />
      <a href="regist.php"> <?php echo "{$tr[$i][registr]} "; ?></a>