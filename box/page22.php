<form  action="ob_z_forum.php" method="post" name="form1">
    <p>
        <input type="submit" value="<?php echo "{$tr[$i][vidmina]}"; ?>"/>
    </p>
</form>
<form  action="ob_ok_comment.php" method="post" name="form2">
    <p>
        <?php echo $tr[$i][topic]; ?>
        <br/><textarea cols="70" rows="2" name="head"></textarea><br/>
        <?php echo $tr[$i][comment]; ?>
        <br/><textarea cols="70" rows="7" name="text"></textarea><br/>
        <input type="hidden" value="<?php echo $id1; ?>" name="id"/>
        <input type="submit" value="<?php echo "{$tr[$i][napusatu]}"; ?>"/>
    </p>
</form>
