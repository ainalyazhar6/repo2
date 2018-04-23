<?php
include ('config.php');
$nama=$_POST['nama'];
$hasil=$_POST['hasil'];
$catatan=$_POST['catatan'];

$query="INSERT into data values
('$nama','$hasil','$catatan')";

if(mysql_query($query)){
	echo "<script type='text/javascript'>alert('Hantar Berjaya');
	window.location='papar.php'
	</script>";
}

else
echo"something went wrong";
?>