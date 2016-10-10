<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['sbdelete']))
{
	$con = mysql_connect("localhost","root","") or die("mysql_error()");
	$sql = "use tutorialDb";
	
	mysql_query($sql) or die(mysql_error());
	
	$genrenameind = $_SESSION['genrename'];
	
		
		$sql="delete from tutsTb where filename='$genrenameind'";
		mysql_query($sql) or die(mysql_error());
			echo "<script>alert('file deleted');</script>";
	mysql_close($con);
	echo "<script>window.location.assign('tutzadmin.php'); </script>";
}

?>
</body>
</html>