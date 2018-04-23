<html>
<head>
<title>Login</title>
</head>
<body>
<?php
session_start();
$username =$_POST['username'];
$password =$_POST['password'];
if($username&&$password)
{
	$server='localhost';
	$userid2='root';
	$dbname='calculegend';
$conn=mysql_connect("$server","$userid2");

mysql_select_db("$dbname",$conn) or die (mysql_error());

$query=mysql_query("select * from user where username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
	}
	
if($username==$dbusername&&$password==$dbpassword)
{
	$_SESSION['username']=$username;
	echo "<script type='text/javascript'>alert('Login Berjaya');
	window.location='calculegend.php'
	</script>";
	
} 
else
{ 
 echo ("Your Password is Wrong please try harder to think what your Password might be. I know you surely remember your password so if you try hard enought you will remember it. \n <a href='login.php'> Click here to login again</a>");
}
}// if 2
else
	die ("That user doesn't exist");
}//if 1
else
{
	echo"Please enter userid and password!!<a href='login.php'>Click here to login again</a>";
}
?>
</body>
</html>