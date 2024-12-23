<?php
session_start();
?>
<marquee behavior ='alternate' scrollamount = "50" direction = "right">Complaint</marquee>
<form method = "get" action = "">
<table border = '2' height = '80%' align = "center" bgcolor = "lightgreen">
<tr><th>Personname<input type ="text" name ="personname"></th></tr>

<tr><th>Email ID<input type ="text" name ="emailid"></th></tr>

<tr><th>Contact No<input type ="text" name ="contactno"></th></tr>

<tr><th>Date<input type ="date" name = "date"></th></tr>

<tr><th>Complaint<input type ="text" name ="complaint"></th></tr>
<tr><th><input type = "submit" name  = "action" value = "submit">
</table></form>
<?php
if(isset($_REQUEST['action']))
{
include("connection.php");
$personname=$_REQUEST['personname'];
$emailid=$_REQUEST['emailid'];
$complaint=$_REQUEST['complaint'];
$contactno=$_REQUEST['contactno'];
$date = $_REQUEST['date'];
$query="insert into complaint(personname,emailid,contactno,date,complaint) values('$personname','$emailid','$contactno','$date','$complaint')";
$result=mysql_query($query)or die (mysql_error());

echo "<h1>Complaint Submitted</h1>";

}
?>