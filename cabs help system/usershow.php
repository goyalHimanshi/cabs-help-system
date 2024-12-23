<?php
include("connection.php");

$query="select * from users ";
$result=mysql_query($query)or die(mysql_error());
echo "<center><h1><font color = 'red' >Information of user</font></h1></center>";
echo "<table align = 'center' border='2' bgcolor = 'lightblue'><tr><th>userid</th><th>username</th><th>password</th><th>address</th><th>contactno</th><th>city</th><th>gender</th><th>idnumber</th><th>idproof</th><th>emailid</th></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><th>".$row['userid']."</th><th>".$row['username']."</th><th>".$row['password']."</th><th>".$row['address']."</th><th>".$row['contactno']."</th><th>".$row['city']."</th><th>".$row['gender']."</th><th>".$row['idnumber']."</th><th>".$row['idproof']."</th><th>".$row['emailid']."</th></tr>";

}
echo "</table>";
?>