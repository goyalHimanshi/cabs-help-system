<?php
session_start();

include("headers.php");
$username=$_SESSION['username'];
$password=$_SESSION['password'];
echo "welcome " .$username;
include("connection.php");
$query="select * from users where username='$username' and password='$password'";
$result=mysql_query($query) or die(mysql_error());
echo"<center><table border='2'>";
echo "<form method='get' action='next.php'>";
while($row=mysql_fetch_array($result))
{
echo "<tr><th>userid</th><th><input type='text' name='userid' value=".$row['userid']."></th><tr>";
echo "<tr><th>userName</th><th><input type='text' name='username' value=".$row['username']."></th><tr>";
echo "<tr><th>Password</th><th><input type='text' name='password' value=".$row['password']."></th><tr>";
echo "<tr><th>Address</th><th><input type='text' name='address' value=".$row['address']."></th><tr>";
echo "<tr><th>Email ID</th><th><input type='text' name='emailid' value=".$row['emailid']."></th><tr>";
echo "<tr><th>ID Number</th><th><input type='text' name='idnumber' value=".$row['idnumber']."></th><tr>";
echo "<tr><th>ID Proof</th><th><input type='text' name='idproof' value=".$row['idproof']."></th><tr>";
echo "<tr><th>Contactno</th><th><input type='text' name='contactno' value=".$row['contactno']."></th><tr>";
echo "<tr><th>Gender</th><th><input type='text' name='gender' value=".$row['gender']."></th><tr>";
echo "<tr><th>City</th><th><input type='text' name='city' value=".$row['city']."></th><tr>";
echo "<tr><th><input type='submit' value='update' name='action'></th><th><input type='reset' value='clear'></th></tr>";

}
echo "</table></center>";
?>