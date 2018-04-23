<!DOCTYPE html>
<html>
<head>
<img src="logo.jpg">
</head>
<style>
fieldset
{
	border:0;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4B5061;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

</style>
<?php
if (!session_id()) session_start();
if (!$_SESSION['logon']) 
    {
        header('Location:index.php')
    } 
 ?>
<body bgcolor= "#2F333F">
	<ul>
  <li><a href="calculegend.php">Halaman Utama</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
  <li style="float:right"><a href="index.php">Sign up</a></li>
  <li style="float:right"><a href="login.php">Log In</a></li>
</ul>
<center><fieldset style="width: 0px">

		<font color="white">
        <form name="cal" action="insert.php" method="POST">
		Nama:<input type="text" name="nama">
		<br><br>
		Nombor 1:<input type="text" id="num1">
		<br><br>
		Nombor 2:<input type="text" id="num2">
		<br><br>

		<input type="button" value="+" onclick="add()">
		<input type="button" value="-" onclick="minus()">
		<input type="button" value="*" onclick="sub()">
		<input type="button" value="/" onclick="div()">
		<input type="button" value="%" onclick="mod()">
		
		<br><br>
		Hasil:<input type="text" name="hasil" value="">
		<br><br>
		
		Catatan:<input type="textfeild" name="catatan"><br><br>
		<input type="submit" value="Hantar"></button>
		<input type="reset" value="Reset"></button>
	</form>

<script type="text/javascript">
	//operation 
	function add()
	{
		var num1,num2,result
    	num1=parseInt(cal.num1.value);
    	num2=parseInt(cal.num2.value);
    	result=num1+num2;
    	cal.hasil.value=result;
    }

	function minus()
{
		var num1,num2,result
    	num1=parseInt(cal.num1.value);
    	num2=parseInt(cal.num2.value);
    	result=num1-num2;
    	cal.hasil.value=result;
    }

	function sub()
{
		var num1,num2,result
    	num1=parseInt(cal.num1.value);
    	num2=parseInt(cal.num2.value);
    	result=num1*num2;
    	cal.hasil.value=result;
    }

	function div()
{
		var num1,num2,result
    	num1=parseInt(cal.num1.value);
    	num2=parseInt(cal.num2.value);
    	result=num1/num2;
    	cal.hasil.value=result;
    }

	function mod()
{
		var num1,num2,result
    	num1=parseInt(cal.num1.value);
    	num2=parseInt(cal.num2.value);
    	result=num1%num2;
    	cal.hasil.value=result;
    }

		
</script>
</FIELDSET>
</font>
</center>
</body>
</html>