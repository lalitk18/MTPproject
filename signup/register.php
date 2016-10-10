<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['sbsignup']))
{
	$f_name = $_POST['txname'];
	$l_name = $_POST['txnamel'];
	$dob = $_POST['cbyy']."/".$_POST['cbmm']."/".$_POST['cbdd'];
	$email1 = $_POST['txemail1'];
	$email2 = $_POST['txemail2'];
	$gender = $_POST['gender'];
	$password = $_POST['txpass'];
	
				
					
						
						
						$con = mysql_connect("localhost","root","") or die(mysql_error());
						mysql_query("create database if not exists signupdb")or die(mysql_error()); 
						mysql_query("use signupdb")or die(mysql_error());
												
						mysql_query("create table if not exists registerTb(firstname varchar(100), lastname varchar(100) ,dob date , email varchar(100), gender varchar(10),username varchar(100), password varchar(100))") or die(mysql_error());
						$rs = mysql_query("select count(*) from registerTb") or die(mysql_error());
						$c = 0;
						while( $row = mysql_fetch_array($rs))
						$c = $row[0];
						
						$username =$email1 ;
						$password = $password;
						if($f_name!=null && $l_name!=null && $dob!=null && $email1!=null && $gender!=null && $username!=null && $password!=null )
				{		
					mysql_query("insert into registerTb values('$f_name','$l_name','$dob','$email1', '$gender','$username', '$password')") or die(mysql_error());
					echo "<script >alert('You have been registered');</script>";
						 echo "<script> window.location.assign('../signin/signin.php');
		</script>";
				}
						  
				else
				{
				  echo '<script >alert("All fields required");</script>'; 
				}
	
			
		
		
		
}
	
	


?>
</body>
</html>