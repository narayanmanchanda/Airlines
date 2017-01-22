<?php
$con=mysqli_connect("localhost","root","","project") or die("data connection error");
extract($_POST);
if(isset($login))
{
$userpass1=sha1($userpass);
$query="select id,password from airways where id='$userid' and password='$userpass1'";
$res=mysqli_query($con,$query)or die("query error");
if(mysqli_num_rows($res))
{
header("location:logout.php");
}
}
?>
<html>
<head>
<link href="css/main.css" type="text/css" rel="stylesheet">
<title>Airline Reservation</title>
</head>
<form action="index.php" method="post">
<body>
<div id="maindiv">

<div id="header">
<img src="img/logo.jpg" width="150px" height="90px" style="margin-left:-1100px; margin-top:5px;">
<h1 style="margin-top:-70px;">Airline Reservation</h1>
<div id="login"> 

<input type="text" placeholder="UserID" name="userid">
<input type="password" placeholder="Password" name="userpass">
<input type="submit" name="login" value="Login">


</div>
<a  href="signup.php">Signup</a>

</div>
<div id="nav">
<a href="index.php">Home</a>
<a href="flights.php">Flights</a>
<a href="aboutus.php">AboutUs</a>
<a href="contactus.php">ContactUs</a>
<a href="helpdesk.php">Help Desk</a>
</div>
<?php
include("banner.html");
?>
<div id="left">
<img src="img/IMG_5361.JPG" width="100%" height="30%" style=" border:solid #FF0000 2px" >
<img src="img/IMG_5363.JPG" width="100%" height="30%" style=" border:solid #FF0000 2px">
<img src="img/IMG_5360.JPG" width="100%" height="30%" style=" border:solid #FF0000 2px">
</div>

<div id="content">
<table style="margin-left:50px; margin-top:100px; box-shadow: gray 5px 5px;" height="50%" bgcolor="yellow">
<tr>
<td colspan="2"><input type="radio" name="rt"><font face="Courier New, Courier, monospace">Round Trip</font></td>
<tr>
<td colspan="2"><input type="radio" name="rt">One Way</td></tr>
<tr><td>
<select name="going">
<option>Going to...</option>
<option>Ahemdabad</option>
<option>Amsterdam</option>
<option>Bangkok</option>
<option>Bora Bora</option>
<option>Chennai</option>
<option>Delhi</option>
<option>Goa</option>
<option>Karachi</option>
<option>London</option>
<option>Manahaton</option>
<option>New York</option>
<option>Paris</option>
<option>Singapore</option>
</select></td>
</tr>
<tr>
<td>
departure date<input type="date" name="date">
arrival date<input type="date" name="date">
</td>
</tr>
<tr><td>
<select name="adult">
<option>adult</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
<select name="children">
<option>children</option>
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
<select name="infant">
<option>infant</option>
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
</select>
</table>
</div>
<div id="right">
<font  size="15px" color="red">Latest News</font>
<marquee vspace="20px" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
<?php
$con=mysqli_connect("localhost","root","","project") or die("Data Connection Error") ;
$query="select * from news";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
extract($row);
echo "<details>$fullnews.<summary>$head</summary></details>";
}
?>
</marquee>

</div>
<div id="bottom">
<h1>Bottom</h1>
</div>

</div>
</form>
</body>

</html>