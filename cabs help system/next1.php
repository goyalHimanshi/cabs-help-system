<?php

mysql_connect("localhost","root","");
mysql_select_db("cabshelpsystem");
$driverid=$_REQUEST['driverid'];
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$emailid=$_REQUEST['emailid'];
$address=$_REQUEST['address'];
$contactno=$_REQUEST['contactno'];
$idproof=$_REQUEST['idproof'];
$vehicleno=$_REQUEST['vehicleno'];
$gender=$_REQUEST['gender'];
$experience= $_REQUEST['experience'];
$noofseats= $_REQUEST['noofseats'];
$query="update driver set name='$name',
password='$password',emailid='$emailid',address ='$address',gender ='$gender',vehicleno ='$vehicleno',idproof ='$idproof',contactno ='$contactno',experience ='$experience' ,noofseats ='$noofseats'where driverid='$driverid'";
mysql_query($query) or die(mysql_error()) ;
echo "<h1> Record Updated</h1>";
?>