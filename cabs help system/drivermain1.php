<?php
session_start();
include("headers1.php");
include("connection.php");
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$query="select * from driver where name='$name' and password='$password'";
$result=mysql_query($query)or die(mysql_error());
echo "<form method = 'get' action = 'editdriver.php'><table border='2'>";
while($row=mysql_fetch_array($result))
{

echo"<tr><th>Driverid</th><th>". $row['driverid']."</th></tr>";
echo "<tr><th>name</th><th>".$row['name']."</th></tr>";
echo "<tr><th>emailid</th><th>".$row['emailid']."</th></tr>";
echo "<tr><th>address</th><th>".$row['address']."</th></tr>";
echo "<tr><th>gender</th><th>". $row['gender']."</th></tr>";
echo "<tr><th>password</th><th>". $row['password']."</th></tr>";
echo "<tr><th>Vehicle No</th><th>". $row['vehicleno']."</th></tr>";
echo "<tr><th>contactno</th><th>". $row['contactno']."</th></tr>";
echo "<tr><th>idproof</th><th>". $row['idproof']."</th></tr>";
echo "<tr><th>Number of Seats</th><th>". $row['noofseats']."</th></tr>";
echo "<tr><th>Experience</th><th>". $row['experience']."</th></tr>";
echo "<tr><th><input type = 'submit' value = 'Edit' name = 'edit'></th><th><a href = 'logout2.php'>Logout </a></th></tr>";

}
echo "</table></form>";
?>