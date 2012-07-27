<?php
$i=$_SESSION['mova'];
echo  $_SESSION['login'];
?>
<br />
<form action="vuhod.php" method="post" name="form1">
    <p>
         <input type="submit" value="<?php echo "{$tr[$i][vuhod]} "; ?>"/>
         </p>
</form>
