<form  action="ob_z_forum.php" method="post" name="form1">
    <p>
        <input type="submit" value="<?php echo "{$tr[$i][vidmina]}"; ?>"/>
    </p>
</form>
<form  action="ob_ok_forum.php" method="post" name="form2">
    <p>
        ������ ��� �� ��������� ���<br/>
        ������ ���� �����������:
        <br/><textarea cols="70" rows="2" name="head1"></textarea><br/>
        ������ �����������:
        <br/><textarea cols="70" rows="7" name="text1"></textarea><br/>
        <br/>
        ������� ������ �� ������ �����<br/>
        ������� ���� ���������:
        <br/><textarea cols="70" rows="2" name="head2"></textarea><br/>
        ������� ���������:
        <br/><textarea cols="70" rows="7" name="text2"></textarea><br/>
        <br/>z
        Enter data in English<br/>
        enter the subject:
        <br/><textarea cols="70" rows="2" name="head3"></textarea><br/>
        write your message:
        <br/><textarea cols="70" rows="7" name="text3"></textarea><br/>        
        <input type="submit" value="<?php echo "{$tr[$i][napusatu]}"; ?>"/>
    </p>
</form>
