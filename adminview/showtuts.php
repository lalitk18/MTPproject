<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","") or die(mysql_error());
mysql_query("use tutorialDb")or die(mysql_error());
$gerename = $_POST['genrew'];

if($_POST['genrew'] == 'select genere')
{	
	$sql = "select * from tutsTb";
	$rs = mysql_query($sql) or die(mysql_error());
	echo"<div id='divtb'><table>";
	echo"<tr id='heading'><th>subject</th><th>tutorial name</th><th>size</th><th>type</th></tr>";
	while($row = mysql_fetch_array($rs))
	{
		$genrename = $row[0];
		$tutorialname = $row[1];
		$filesize = $row[3];
		$filetype = $row[4];
		
			echo"<tr><td class='genrename';>$genrename</td><td class='namc';>$tutorialname</td><td class='sizex';>$filesize KB</td><td class='type';>$filetype </td></tr>";
		
	
		echo"</table></div>";
	}
}
	
	else
	{
		

		$sql = "select filename,originalname,filesize,filetype from tutsTb where genre = '$gerename'";
		echo "<style>#heading th{ width:200px; margin-left:-100px;margin-top:100px;} </style>";
		echo "<style>.genrename{ margin-left:-100px;} </style>";
	$rs = mysql_query($sql) or die(mysql_error());
	echo"<div id='divtb'><table>";
	echo"<tr id='heading'><th>subject</th><th>tutorial name</th><th>original name</th><th>size</th><th>format</th>
	<th>delete this tutorial</th></tr>";
	while($row = mysql_fetch_array($rs))
	{
		$genrename = $gerename;
		$tutorialname = $row[0];
		$originalname = $row[1];
		$filesize = $row[2];
		$filetype = $row[3];
		$_SESSION['genrename']=$tutorialname;
		
			echo"<tr class='content';><td class='genrename'; >$genrename</td><td class='namc';>$tutorialname</td><td>$originalname</td><td class='sizex';>$filesize KB</td><td class='filetype'; >$filetype</td>
			<td><form action='delRec.php' method='post'><input type='submit' value='delete' class='deletet'  name='sbdelete' /></form> </td></tr>";
		
	
		
	}	
		echo"</table></div>";
	}
	
?>


</body>
</html>