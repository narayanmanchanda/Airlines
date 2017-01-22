<?php
if(isset($_GET['click']))
{
echo $_GET['colors'];
}


?>


<html>
<body>
<form action="rr.php" method="get">
Red&nbsp;<input type="checkbox" name="colors"  value="red" />&nbsp;&nbsp;&nbsp;
Black&nbsp;<input type="checkbox" name="colors" value="black" />&nbsp;&nbsp;&nbsp;
Green&nbsp;<input type="checkbox" name="colors" value="green" />&nbsp;&nbsp;&nbsp;
Yellow&nbsp;<input type="checkbox" name="colors" value="yellow" />&nbsp;&nbsp;&nbsp;<br/><br/><br/>
<input type="submit" name="click" value="CheckData">

</form>
</body>
</html>