<?php
session_start();

include("headers1.php");
$name=$_SESSION['name'];
$password=$_SESSION['password'];
echo "welcome " .$name;
include("connection.php");
$query="select * from driver where name='$name' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
echo"<center><table border='2'>";
echo "<form method='get' action='next1.php'>";
while($row=mysql_fetch_array($result))
{
echo "<tr><th>driverid</th><th><input type='text' name='driverid' value=".$row['driverid']."></th><tr>";
echo "<tr><th>Name</th><th><input type='text' name='name' value=".$row['name']."></th><tr>";
echo "<tr><th>Password</th><th><input type='text' name='password' value=".$row['password']."></th><tr>";
echo "<tr><th>Address</th><th><input type='text' name='address' value=".$row['address']."></th><tr>";
echo "<tr><th>Email ID</th><th><input type='text' name='emailid' value=".$row['emailid']."></th><tr>";
echo "<tr><th>vehicle Number</th><th><input type='text' name='vehicleno' value=".$row['vehicleno']."></th><tr>";
echo "<tr><th>ID Proof</th><th><input type='text' name='idproof' value=".$row['idproof']."></th><tr>";
echo "<tr><th>Contactno</th><th><input type='text' name='contactno' value=".$row['contactno']."></th><tr>";
echo "<tr><th>Gender</th><th><input type='text' name='gender' value=".$row['gender']."></th><tr>";
echo "<tr><th>Experience</th><th><input type='text' name='experience' value=".$row['experience']."></th><tr>";
echo "<tr><th>noofseats</th><th><input type='text' name='noofseats' value=".$row['noofseats']."></th><tr>";
echo "<tr><th><input type='submit' value='update' name='action'></th><th><input type='reset' value='clear'></th></tr>";

}
echo "</table></center>";
?>