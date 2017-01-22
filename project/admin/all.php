<html>
<body>
<form action="all.php" method="post">
<?php
$con=mysqli_connect("localhost","root","","project") or die("Data Connection Error") ;
$query="select * from news";
$res=mysqli_query($con,$query) or die("select query error");
$table1="";
$table1.="<table border=1>";
$table1.="<tr><td>srno</td><td>news heading</td><td>full news</td><td>Select News</td></tr>";
while($row=mysqli_fetch_array($res))
{
extract($row);

$table1.="<tr><td>$id</td><td>$head</td><td>$fullnews</td><td><input type='checkbox' name='newsid'></td></tr>";
}
$table1.="<tr><td align=center colspan=3><input type=submit name='click' value='set news'>";
$table1.="</table>";
echo $table1;
if(isset($_POST['click']))
{
$newsid=$_POST['head'];
echo $newsid;
}
?>
</form>
</body>
</html>