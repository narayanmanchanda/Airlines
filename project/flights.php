
<html>
<head>
<link href="css/main.css" type="text/css" rel="stylesheet">
<title>Airline Reservation</title>
</head>
<body>
<div id="maindiv">

<div id="header">
<h1>Airline Reservation</h1>
<a  href="signup.php">Signup</a>
</div>
<div id="nav">
<a href="index.php">Home</a>
<a href="flights.php">Flights</a>
<a href="aboutus.php">AboutUs</a>
<a href="contactus.php">ContactUs</a>
<a href="helpdesk.php">Help Desk</a>
</div>

<div id="left">
<h1>LEFT</h1>

</div>

<div id="content">
<p>
<?php
$con=mysqli_connect("localhost","root","","project") or die("Data Connection Error") ;
$query="select * from flights";
$res=mysqli_query($con,$query)or die ("query error");
$output="";
$output.="<table border=1 width=90% height=80% ><tr><td>id</td><td>time</td><td>Destination</td><td>flight</td><td>status</td></tr>";
while($row=mysqli_fetch_array($res))
{
extract($row);

$output.="<tr><td>$id</td><td>$time</td><td>$destination</td><td>$flight</td><td>$status</td></tr>";
}
$output.="</table>";
echo $output;

?>


</p>
</div>
<div id="right">
<h1>RIGHT</h1>

</div>
<div id="bottom">
<h1>Bottom</h1>
</div>

</div>
</body>

</html>