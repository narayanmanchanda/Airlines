<?php
extract($_GET);
if(isset($login))
{
if($usrid=="admin" && $pass="admin")
{
header("location: all.php");
}
else
{
header("location: index.php");
}
}


?>
<html>
<head>
<style>
#main
{
margin-left:40%;
margin-top:20%;
}


</style>
</head>
<body>
<form action="index.php" method="get">
<div id="main">
<table>
<tr>
<td>Enter userID</td><td><input type="text" placeholder="Userid" name="usrid"></td>
</tr>
<tr>
<td>Enter userID</td><td><input type="text" placeholder="Password" name="pass"></td>

</tr>
<tr>
<td colspan="2" align="right"><input type="submit" name="login" value="Login"></td>
</tr>
</table>

</div>

</form>

</body>
</html>