<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$genrename = $_POST['genre'];
$filename = $_POST['filenm'];
$file = $_FILES['afile'] ;
$file_Temp = $_FILES['afile']['tmp_name'];
$file_name = $_FILES['afile']['name'];
$fileerror =	$_FILES['afile']['error'];
$file_size= $_FILES['afile']['size'];
$file_type =$_FILES['afile']['type'];
echo "file errors are $fileerror<br>";		
echo "genre name is $genrename<br>";
echo "file name is $filename<br>";
echo "file size is $file_size<br>";
echo "file type is $file_type<br>";

	if(is_uploaded_file($file_Temp))
	{
		
		
		if(!file_exists("videotutorials"))
			{
				mkdir("videotutorials",0777,true);
			}
		
			
			$file = "videotutorials//".$filename;
				if(file_exists($file))
				
					{
						echo "<script>  alert('you have already uploaded your file');</script> ";
					}
				else
					{
						move_uploaded_file($_FILES['afile']['tmp_name'] ,$file);
						
						$con = mysql_connect("localhost","root","") or die(mysql_error());
						mysql_query("create database if not exists tutorialDb")or die(mysql_error());
						mysql_query("use tutorialDb")or die(mysql_error());
												
						mysql_query("create table if not exists tutsTb(genre varchar(100),filename varchar(100),originalname varchar(100),filesize varchar(100),filetype varchar(100),user varchar(100))") or die(mysql_error());
						$user = $_SESSION['user'];
						


						$rs = mysql_query("select count(*) from tutsTb") or die(mysql_error());
						$c = 0;
						while( $row = mysql_fetch_array($rs))
						{
							$c = $row[0];
						}
						
						mysql_query("insert into  tutsTb   values('$genrename','$filename','$file_name','$file_size','$file_type','$user')") or die(mysql_error());
						 
						  
					}
				
		
		
		
		
	}




?>
</body>
</html>