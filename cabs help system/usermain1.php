<?php
session_start();
include("headers.php");
include("connection.php");
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$query="select * from users where username='$username' and password='$password'";
$result=mysql_query($query)or die(mysql_error());
echo "<form method = 'get' action = 'edituser.php'><table border='2'>";
while($row=mysql_fetch_array($result))
{

echo"<tr><th>Userid</th><th>". $row['userid']."</th></tr>";
echo "<tr><th>Username</th><th>".$row['username']."</th></tr>";
echo "<tr><th>emailid</th><th>".$row['emailid']."</th></tr>";
echo "<tr><th>city</th><th>".$row['city']."</th></tr>";
echo "<tr><th>address</th><th>".$row['address']."</th></tr>";
echo "<tr><th>gender</th><th>". $row['gender']."</th></tr>";
echo "<tr><th>password</th><th>". $row['password']."</th></tr>";
echo "<tr><th>idnumber</th><th>". $row['idnumber']."</th></tr>";
echo "<tr><th>contactno</th><th>". $row['contactno']."</th></tr>";
echo "<tr><th>idproof</th><th>". $row['idproof']."</th></tr>";
echo "<tr><th><input type = 'submit' value = 'Edit' name = 'edit'></th><th><a href = 'logout1.php'>Logout </a></th></tr>";

}
echo "</table></form>";
?>