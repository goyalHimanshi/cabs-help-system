<?php
session_start();
?>
<marquee behavior ='slide' scrollamount = "25" direction = "right"><center>Driver Selection</center></marquee>
<form method = "get" action = "">
<table border = '2' height = '80%' align = "center" bgcolor = "yellow">
<tr><th>Name<input type ="text" name ="name"></th></tr>

<tr><th>Password<input type ="text" name ="password"></th></tr>

<tr><th>Email ID<input type ="text" name ="emailid"></th></tr>

<tr><th>Contact No<input type ="text" name ="contactno"></th></tr>

<tr><th>gender<input type ="radio" name ="gender" value = "male">male
<input type ="radio" name ="gender" value ="Female">Female</th></tr>

<tr><th>Address<input type ="text" name ="address"></th></tr>

<tr><th>vehicleNumber<input type ="text" name ="vehicleno"></th></tr>


<tr><th>ID Proof<input type ="text" name ="idproof"></th></tr>
<tr><th>No of Seats<input type ="text" name ="noofseats"></th></tr>
<tr><th>Experience<input type ="text" name ="experience"></th></tr>

<tr><th><input type = "submit" name ="signup" value ="signup">

<input type = "submit" name ="login" value ="login">

<input type = "reset" value ="reset"></th></tr>

</table></form>

<?php
if(isset($_REQUEST['signup']))
{
include("connection.php");
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];

$emailid=$_REQUEST['emailid'];
$gender=$_REQUEST['gender'];
$contactno=$_REQUEST['contactno'];

$address=$_REQUEST['address'];

$vehicleno=$_REQUEST['vehicleno'];
$idproof=$_REQUEST['idproof'];
$noofseats=$_REQUEST['noofseats'];
$experience=$_REQUEST['experience'];

$query="insert into driver(name,password,emailid,contactno,gender,address,vehicleno,idproof,experience,noofseats) values('$name','$password','$emailid','$contactno','$gender','$address','$vehicleno','$idproof','$experience','$noofseats')";
$result=mysql_query($query)or die (mysql_error());

echo "<h1>you are selected Driver</h1>";

}
if(isset($_REQUEST['login']))
{
include("connection.php");
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$query="select * from driver where name='$name' and  password='$password' ";
$result=mysql_query($query)or die (mysql_error());
$num=0;
$num=mysql_num_rows($result);
if($num>=1)
{
$_SESSION['name']=$name;
$_SESSION['password']=$password;
header("Location:drivermain1.php");
}
else
{
echo "<h1>Please enter the right name and password</h1>";
}
}

?>


