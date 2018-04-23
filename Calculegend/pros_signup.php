<?php
include ('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

echo"<br>";

$query="insert into user values
('$username','$password')";

if(mysql_query($query)){
	echo "<script type='text/javascript'>alert('Signup Berjaya');
	window.location='login.php'
	</script>";

}

else
echo"something went wrong";
?>