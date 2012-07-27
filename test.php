<!DOCTYPE html>
<html>
<HEAD>
<TITLE>Закрытие окна через заданное время</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<script type="text/javascript">
ID=window.setTimeout("Update();",2000);
function Update(){
   javascript:window.close();
   }
</script>
</HEAD>
<BODY>
Update();
$(document).ready(function(){
   alert('ready!');
});
</body>
</html>