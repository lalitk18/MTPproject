<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body id="" style="background-color:rgba(204,255,255,1)">
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
		
			echo"<tr><td class='genrename';>$genrename</td><td class='namc';>$tutorialname </td>
			<td class='sizex';>$filesize KB</td>
			<td class='type';>$filetype</td>
			</tr>";
		
	
		echo"</table></div>";
	}
}
	
	else
	{
		

		$sql = "select filename,originalname,filesize,filetype from tutsTb where genre = '$gerename'";
		
	$rs = mysql_query($sql) or die(mysql_error());
	echo"<div id='divtb'><table id ='table2'>";
	echo "<title id = 'title'> results for your search  </title>";
	echo"<tr id='heading'><th>subject</th><th>tutorial name</th><th>size</th><th>format</th></tr>";
	while($row = mysql_fetch_array($rs))
	{
		$genrename = $gerename;
		$tutorialname = $row[0];
		$filesize = $row[2];
		$filetype = $row[3];
		
			echo"<tr class='content';><td class='genrename';>$genrename</td>
			<td class='namc';><a href='../upload tutorial links/videotutorials/".$tutorialname."'>".$tutorialname." </a></td><td class='sizex';>$filesize KB</td><td class='filetype'; >$filetype</td></tr>";
		
	
		
	}	
		echo"</table></div>";
	}
	
	
?>
<style>
#title
{
	color:rgba(0,0,0,1);
	font-size:24px;
	
}
.namc
{
	border-collapse:collapse;
}
.content td,th
{
	text-align:center;
	border:3px groove rgba(204,204,255,1);
}
#table2
{
	margin-left:100px;	
	border:2px groove rgba(204,204,51,1);
	width:700px;
	margin-top:100px;
}

</style>




</body >
</html>