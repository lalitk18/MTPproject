<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
if(isset($_POST['sblogin']))
{
	$user = $_POST['txuser'];
	$pass = $_POST['txpass'];
	//echo $user;
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_query("use signupdb")or die(mysql_error());
	$rs = mysql_query("select count(*) from registerTb where username = '$user' and password = '$pass'")or die(mysql_error());
	$c = 0;
	while($row = mysql_fetch_array($rs))
	$c = $row[0];
	
	if($c ==0)
	{
		echo "<script>alert('wrong tha');</script>";
		echo "<script> alert('wrong username or password');
	</script>";
	echo "<script></script>";
	}
	
	else 
	{
		if($user =='adminmtpcec29@gmail.com' && $pass == 'measadminforfirstpagecredittocec')
	{
		echo "<script> window.location.assign('../adminview/tutzadmin.php');
		</script>";
		
	}
		else{
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		
		echo "<script> window.location.assign('../MTP.php');
		</script>";

		}
	}
	 
	


}

?>


</body>
</html>