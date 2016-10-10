<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#tableoft
		{
			margin-top:30px;
		}
		#title
		{
			border:2px groove rgba(204,51,204,1);
			width:400px;
			background-color:rgba(153,153,153,1);
			margin-top:-100px;
		}
		#filediv
		{
			margin-top:-1000px;
			margin-left:350px;
		}
		#fileinput
		{
			margin-top:5px;
			width:300px;
			height:30px;
			background-color:rgba(204,255,255,1);
		}
		#submit_button
		{
			width:100px;
			height:40px;
			border-radius:4px;
			background-color:rgba(153,153,153,1);
			margin-top:10px;
		}
		
body
{
	margin:0px;
	background-image:url(images/image.jpg);
	
}
#headfirst
{
	width:98%;
	height:120px;
	border-radius:40px 0px 40px 0px;
	background-color:#660000;
	margin-left:8px;
	margin-top:10px;
	border-right:rgba(255,255,255,1) groove 3px;
	border-left:rgba(255,255,255,1) groove 3px;
	
}
#headfirst div img
{
	width:160px;
	height:60px;
	margin-top:30px;
	margin-left:10px;
	
	
}
#headfirst div 
{	
	
	float:left;
}
#resttexture
{
	height:80%;
	width:100%;
	margin-top:30px;
	margin-left:100px;
	
}
#contenttop
{
	background-image:url(images/containertopImage.png);
	height:36px;
	background-repeat:no-repeat;

}

#contentcenter
{
	background-image:url(images/containercenterbg.png);
	background-repeat:repeat-y;
	height:1000px;
	
}

#contentbottom
{
	background-image:url(images/container-bottom.png);
	height:42px;
	background-repeat:no-repeat;

}

#info
{
	float:left;
	margin-top:40px;
	margin-left:800px;
	
}
#headrighttext
{
	color:rgba(153,153,153,1); 
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	font-weight:600;
}
#searchbutton
{
	width:200px;
	height:30px;
	border-radius:5px  0px 4px 0px ;
	background-color:#99FFFF;
	border-bottom-color:rgba(255,255,255,1)
	font:Georgia, "Times New Roman", Times, serif;
}
</style>
</head>
<body>
<?php
echo $_SESSION['user'];
if(!(isset($_SESSION['user'])))
{
	
	echo "<script>window.location.assign('../signin/signin.php')</script>";
}
?>

<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" name="frm"  method="post" enctype="multipart/form-data">
	<div id="headfirst">
    	<div id="logo" >
        	<img src="images/LOGO-lw-scaled.JPEG.png" />
        </div>
        <div id="signout" >
         <input type="submit" value="signout" id="logoutb" name="logoutbu" onclick="frm.action='signout.php'" />
		</div>
        <style>
		#logoutb
		{
			
			margin-left:900px;
			margin-top:60px;
			width:150px;
			height:40px;
			background-color:#663333;
			color:rgba(255,0,255,1);
			font:Verdana, Geneva, sans-serif;
			font-size:14px;
			box-shadow:rgba(102,102,102,1) 1px 1px 1px 1px;
			border:groove 1px #CCFF00;
			font-weight:600;
			text-shadow:rgba(102,102,102,1) 4px;	 
			
			
		}
		</style>

    </div>
    
    <div id="resttexture">
    	<div id="contenttop">
    	</div>
		<div id="contentcenter">
    	</div>
		<div id="contentbottom">
    	</div> 
        <div id="filediv">
        	<div id="title">
            <h1 > Upload Your Tutorials  </h1>
            </div>
        <div>
        	<table id="tableoft">
        		<tr>
        			<td>
        				Select Genre
        			</td>
        			<td>
        				<select style="width:50%; height:40px;" name="genre" > 
        					<option> Select </option>
        					<option> physics</option> 
        					<option>chemestry</option> 
        					<option>maths</option>
							<option>php</option>
            				<option>java</option>
            				<option> html</option>
							<option> css</option> 
							<option> c</option>
							<option> other</option>							
                                                         
						</select>
                    
       				</td>
       			</tr>
        
        		<tr>
        			<td style="font:'Arial Black', Gadget, sans-serif"> File Name </td>
        			<td>
      					<input type="text"  id="filenmi" placeholder="filename" name="filenm"  style="width:50%;height:30px;" /> 
                    </td>
        		</tr>
        		<tr>
        			<td style="font:Arial, Helvetica, 'Trebuchet MS', Arial, Helvetica, sans-serif">
        Select File
        			</td>
        			<td >
       					<input type="file"   id="fileinput" name="afile" style="width:36%;height:20px;" />
        			</td>
        		</tr>
				<tr>
        
       				<td colspan="2" >
        				<input type="submit" value="submit" name="sbsumbit" id="submit_button" 
                        onclick="frm.action='tutorialdb.php'"style="width:100%" />
        			</td>
        		</tr>
			</table>
            
        </div>
       </div>
	</div>
   </form>
</body>
</html>
