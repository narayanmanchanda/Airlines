<?php
$con=mysqli_connect("localhost","root","","project") or die("Data Connection Error") ;
extract($_POST);
if(isset($reg))
{
$dob="";
$dob=$year."-".$month."-".$date;
$pass=sha1($pas);
$repass=sha1($repas);
if($pass==$repass)
{
$query="INSERT INTO `project`.`airways` (`id`, `password`, `repass`, `firstname`, `lastname`, `DOB`, `gender`, `address`, `phone`, `email`, `passport_no`, `passport_type`) VALUES ('$id', '$pass', '$repass', '$first', '$last', '$dob', '$gen', '$add', '$phone', '$email', '$no', '$type')";
$res=mysqli_query($con,$query) or die("insert query error");
echo "Registered";
header("location:signup.php");
}
else
{
$pass_error="<b><font color=red>Please enter correct password</font></b>";
}
}
?>
<html>
<head>
<link href="css/main.css" type="text/css" rel="stylesheet">
<title>Airline Reservation</title>
</head>
<body>
<form action="signup.php" method="post">
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
<fieldset id="field" style="width:45%;">
<legend>Reg... Form</legend>

You are one step away from getting our privilages.
<table>
<tr><td colspan="2"><b>Login Details</b></td></tr>
<tr>
<td>User ID</td>
<td><input type="text" name="id" required/></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pas"/></td>
</tr>

<tr>
<td>Re-enter Password</td>
<td><input type="password" name="repas"/><?php echo $pass_error; ?></td>
</tr>
<tr><td colspan="2"><b>Personal Details</b></td></tr>
<tr>
<td>First Name</td>
<td><input type="text" name="first" /></td>
</tr>

<tr>
<td>Last name</td>
<td><input type="text" name="last" /></td>
</tr>

<tr>
<td>DOB</td>
<td><select name="year" />
<option>Year</option>
<option>2002</option>
<option>2001</option>
<option>2000</option>
<option>1999</option>
<option>1998</option>
<option>1997</option>
<option>1996</option>
<option>1995</option>
<option>1994</option>
<option>1993</option>
<option>1992</option>
<option>1991</option>
<option>1990</option>
<option>1989</option>
<option>1988</option>
<option>1987</option>
<option>1986</option>
<option>1985</option>
<option>1984</option>
<option>1983</option>
<option>1982</option>
<option>1981</option>
<option>1980</option>
</select>

<select name="month">
<option>Month</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>

<select name="date"/>
<option>Date</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
</td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gen">Female <input type="radio">Male</td>
<tr><td colspan="2"><b>Contact Details</b></td></tr>
<tr>
<td>Address</td>
<td><textarea cols="30" rows="5" name="add"></textarea></td>
</tr>

<tr>
<td>Phone No</td>
<td><input type="text" name="phone"/></td>
</tr>

<tr>
<td>Email Address</td>
<td><input type="email" name="email"/></td>
</tr>
<tr><td colspan="2"><b>Passport Details</b></td></tr>
<tr>
<td>passport no</td>
<td><input type="text" name="no"/></td>
</tr>

<tr>
<td>passport type</td>
<td><select name="passport type" name="type"/>
<option>Select</option>
<option>Regular</option>
<option>Official</option>
<option>Diplomatic</option>
</td>
</tr>

<tr>
<td colspan="2" align="center"><input type="checkbox" />
I accept all the <a href=terms.php>terms and conditions.</a></td>
</tr>
<tr><td colspan="2" align="right"><input type="submit" name="reg" value="Register"/></td></tr>

</table>

</fieldset>

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