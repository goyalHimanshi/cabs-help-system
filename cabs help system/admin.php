<?php
session_start();
?>

<form method="get" action="">
username<input type="text" name="username">
<br>
password<input type="text" name="password">
<br>
<input type="submit" value="signup" name="signup">
<input type="submit" value="login" name="login">
<input type="reset" value="reset" >
</form>

<?php
if(isset($_REQUEST['signup']))
{
include("connection.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$query="insert into admin values('$username','$password')";
$result=mysql_query($query)or die (mysql_error());
echo "<h1>you are Register Administrator</h1>";
}
if(isset($_REQUEST['login']))
{
include("connection.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$query="select * from admin where username='$username' and password='$password'";
$result=mysql_query($query)or die (mysql_error());
$num=0;
$num=mysql_num_rows($result);
if($num>=1)
{
$_SESSION['username']=$username;
$_SESSION['password']=$password;



header("Location:adminmain.php");
}
else
{
echo "<h1>Please enter the right username and password</h1>";
}
}

?>


