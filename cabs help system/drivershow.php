<?php
include("connection.php");

$query="select * from driver ";
$result=mysql_query($query)or die(mysql_error());
echo "<center><h1><font color = 'purple' >Information of driver</font></h1></center>";
echo "<table align = 'center' border='2' bgcolor = 'lightgreen'><tr><th>driverid</th><th>name</th><th>password</th><th>address</th><th>contactno</th><th>Experience</th><th>gender</th><th>vehiclenumber</th><th>idproof</th><th>emailid</th><th>noofseats</th></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><th>".$row['driverid']."</th><th>".$row['name']."</th><th>".$row['password']."</th><th>".$row['address']."</th><th>".$row['contactno']."</th><th>".$row['experience']."</th><th>".$row['gender']."</th><th>".$row['vehicleno']."</th><th>".$row['idproof']."</th><th>".$row['emailid']."</th><th>".$row['noofseats']."</th></tr>";

}
echo "</table>";
?>