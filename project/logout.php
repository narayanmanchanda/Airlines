<?php
extract($_POST);

if(isset($click))
{
header("location:index.php");
}
?>
<html>
<body>
<form method="post" action="logout.php">
<input type="submit" name="click" value="logout">
</form>
</body>
</html>
