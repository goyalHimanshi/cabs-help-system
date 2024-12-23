<?php

mysql_connect("localhost","root","");
mysql_select_db("cabshelpsystem");
$userid=$_REQUEST['userid'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$emailid=$_REQUEST['emailid'];
$address=$_REQUEST['address'];
$contactno=$_REQUEST['contactno'];
$idproof=$_REQUEST['idproof'];
$idnumber=$_REQUEST['idnumber'];
$gender=$_REQUEST['gender'];
$city = $_REQUEST['city'];

$query="update users set username='$username',
password='$password',emailid='$emailid',address ='$address',gender ='$gender',idnumber ='$idnumber',idproof ='$idproof',contactno ='$contactno',city ='$city' where userid='$userid'";
mysql_query($query) or die(mysql_error()) ;
echo "<h1> Record Updated</h1>";
?>