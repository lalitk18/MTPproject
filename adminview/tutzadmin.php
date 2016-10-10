<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body
{
	margin:0px;
	background-image:url(images/images.png);
	
}
#headfirst
{
	width:98%;
	height:120px;
	border-radius:40px 0px 40px 0px;
	background-color:#6633CC;
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
	margin-top:100px;
	margin-left:160px;
	
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
#searchtuts
{
	margin-top:-1000px;
	margin-left:400px;
	
}
span
{
	color:rgba(0,51,51,1);
}
#genre
{
	width:120px;
	height:30px;
	background-color:rgba(204,255,102,1);
	color:rgba(0,102,255,1);
	font:"Arial Black", Gadget, sans-serif;
	
}
#sbgenre
{
	width:120px;
	height:30px;
	background-color:rgba(204,255,102,1);
	color:rgba(0,102,255,1);
	font:"Arial Black", Gadget, sans-serif;
	
}
#buttonse
{
	height:30px;
	background-color:rgba(204,255,102,1);
	color:rgba(0,102,255,1);
	font:"Arial Black", Gadget, sans-serif;
	
}

</style>
<script>
function searchd()
{
	window.open()
}
</script>
</head>
<body>

<form  method="post"  action="<?php echo $_SERVER['file:///C|/xampp/htdocs/lalit/form/lalitPhp/js/MTP/tutz/PHP_SELF'];?>" name="frm" enctype="multipart/form-data">
	<div id="headfirst">
     	<div id="logo" >
        <img src="images/LOGO-lw-scaled.JPEG.png" />
        </div>
        <div id="signout" >
         <input type="submit"  action="frm.action='signout.php'" value="signout" id="logoutb" name="logoutbu" />
		</div>
         <div id="adminhi" > <p  >  HELLO ADMIN!!!! </p></div>
        <div id="motto"><p> THINK BIG, BE INNOVATIVE AND MOTIVATE PEOPLE TO INNOVATE   </p> </div>
        
        <style>
		#adminhi
		{
			width:700px;
			height:100px;
			margin-left:250px;

			
		}
		#adminhi p
		{
			margin-top:30px;
			text-align:center; 
			text-shadow:3px 5px 5px 5px #CC99FF; 
			font-size:18px;
			font-style:italic;
			font-weight:800;
			color:rgba(204,102,0,1); 
		}
		#motto
		{
			width:700px;
			height:100px;
			margin-left:250px;
			margin-top:-170px;
			margin-bottom:00px;
		}
		#motto p
		{
			font-family:"Courier New", Courier, monospace;
			font-style:italic;
			font-size:18px;
			font-weight:bold;
			text-align:center;
			color:rgba(255,0,0,1)
		}
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
        <div id="searchtuts">
        <h1> <span>Manage Tutorials </span>  </h1>
         <select id="genre" name="genrew"> 
         					<option> select genere    </option>
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
         <input type="submit" onclick="frm.action='showtuts.php'" value="Search" id="buttonse" />
        </div>
    </div>
    <div>
    </div>
    </form>
    </body>
</html>
