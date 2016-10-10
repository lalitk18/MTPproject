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
echo "$gerename";
if($_POST['genrew'] == 'select genere')
{	
	$rs = mysql_query(" select * from tutsTb") or die(mysql_error());
	$rs = mysql_query($sql) or die(mysql_error());
	echo"<div id='divtb'><table>";
	echo"<tr id='heading'><th>subject</th><th>tutorial name</th><th>link</th><th>size</th></tr>";
	while($row = mysql_fetch_array($rs))
	{
		$genrename = $row[0];
		$tutorialname = $row[1];
		$filesize = $row[3];
		
			echo"<tr><td class 'genrename';>$rollno</td><td class 'namc';>$tutorialname</td><td class 'sizex';>$filesize KB</td></tr>";
		
	
		echo"</table></div>";
	}
}
	
	else
	{

		$rs = mysql_query(" select genre,filename,originalname,filesize,filetype from tutsTb   ") or die(mysql_error());
	$rs = mysql_query($sql) or die(mysql_error());
	echo"<div id='divtb'><table>";
	echo"<tr id='heading'><th>subject</th><th>tutorial name</th><th>link</th><th>size</th><th>format</th></tr>";
	while($row = mysql_fetch_array($rs))
	{
		$genrename = $row[0];
		$tutorialname = $row[1];
		$filesize = $row[3];
		$filetype = $row[4];
		
			echo"<tr><td class 'genrename';>$genrename</td><td class 'namc';>$tutorialname</td><td class 'sizex';>$filesize KB</td><td class 'filetype'; >$filetype</td></tr>";
		
	
		echo"</table></div>";
	}	
		
	}
?>



?>

</body>
</html>