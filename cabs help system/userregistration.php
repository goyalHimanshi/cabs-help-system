<?php
session_start();
?>
<form method = "get" action = "">
<table border = '2' height = '90%' align = "center" bgcolor = "lightblue">
<tr><th>UserName<input type ="text" name ="username"></th></tr>

<tr><th>Password<input type ="text" name ="password"></th></tr>

<tr><th>Email ID<input type ="text" name ="emailid"></th></tr>

<tr><th>Contact No<input type ="text" name ="contactno"></th></tr>

<tr><th>gender<input type ="radio" name ="gender" value = "male">male
<input type ="radio" name ="gender" value ="Female">Female</th></tr>

<tr><th>Address<input type ="text" name ="address"></th></tr>

<tr><th>ID Number<input type ="text" name ="idnumber"></th></tr>


<tr><th>ID Proof<input type ="text" name ="idproof"></th></tr>

<tr><th>City<input type ="text" name ="city"></th></tr>
<tr><th><input type = "submit" name ="signup" value ="signup">

<input type = "submit" name ="login" value ="login">

<input type = "reset" value ="reset"></th></tr>

</table></form>

<?php
if(isset($_REQUEST['signup']))
{
include("connection.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$emailid=$_REQUEST['emailid'];
$gender=$_REQUEST['gender'];
$contactno=$_REQUEST['contactno'];

$city=$_REQUEST['city'];
$address=$_REQUEST['address'];

$idnumber=$_REQUEST['idnumber'];
$idproof=$_REQUEST['idproof'];

$query="insert into users(username,password,emailid,contactno,gender,address,idnumber,idproof,city) values('$username','$password','$emailid','$contactno','$gender','$address','$idnumber','$idproof','$city')";
$result=mysql_query($query)or die (mysql_error());

echo "<h1>you are Register Administrator</h1>";

}
if(isset($_REQUEST['login']))
{
include("connection.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$query="select * from users where username='$username' and  password='$password' ";
$result=mysql_query($query)or die (mysql_error());
$num=0;
$num=mysql_num_rows($result);
if($num>=1)
{
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("Location:usermain1.php");
}
else
{
echo "<h1>Please enter the right username and password</h1>";
}
}

?>


