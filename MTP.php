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
	position:absolute;
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
#alllink ul
{
	list-style:none;
	text-decoration:none;
	font:"Lucida Console", Monaco, monospace;
	font-size:20px;
	display:block;
	margin-top:-900px;
	text-transform:capitalize;
	height:40px;
	border-radius:10px 10px;
}
.links
{
	display:block;
	background-color:rgba(102,255,255,1);
	width:200px;
	margin-top:15px;
	padding-top:10px;
	
}
.links a
{
	text-decoration:none;
	color:rgba(102,153,0,1);
	margin-top:30px;
	
}
.links
{
	border-radius:10px; 
	height:40px;
	margin-top:20px;
	text-align:center;
	text-deoration:!important;
	border-bottom:rgba(153,153,153,1);
	border: 1px #FFFFFF groove;
	
	
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
#Signinbutton
{
	
	position:absolute;
	width:70px;
	height:30px;
	float:right;
	border-radius:3px  3px 3px 3px ;
	background-color:#660066;
	border: hidden #990033 12px ;
	font:Georgia, "Times New Roman", Times, serif;
	color:rgba(204,204,204,1);
}
#logindiv
{

	position:absolute;
	margin-left:1160px;
	margin-top:70px;
}
#comntsec
{
	margin-left:330px;
	margin-top:120px;
	width:550px;
}

#cs
{
	color:rgba(204,51,204,1);
}
#submit
{
	background-color:rgba(102,255,255,1);
	color:rgba(204,153,255,1);
	text-transform:capitalize;
}
</style>
</head>

<body>
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" name="frm"  method="post" enctype="multipart/form-data" >
	<div id="headfirst">
    	<div id="logo" >
        <img src="images/LOGO-lw-scaled.JPEG.png" />
        </div>
        
         <div id="logindiv">
        	 <input type="submit" id="Signinbutton" value="Signin" onclick="frm.action='signin/signin.php'"   /> 
         
		</div>
        <div id="signout" >
         <input type="submit" onclick="frm.action='signout.php'" value="signout" id="logoutb" name="logoutbu" />
		</div>

<?php


if(isset($_SESSION['user']) && $_SESSION['user']!="")
	{
		echo $_SESSION['user']."<br>";		
		echo "<script>document.getElementById('logindiv').style.display='none';</script>";
		echo "<script>document.getElementById('signout').style.display='block';</script>";
    		
	}
	else
	{
		echo "<script>document.getElementById('logindiv').style.display='block';</script>";
		echo "<script>document.getElementById('signout').style.display='none';</script>";
		
		
	} 
	
   
?>





        <style>
		#signout
		{
			
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
    	<div id="contenttop">n
    	</div>
		<div id="contentcenter">
    	</div>
		<div id="contentbottom">
    	</div> 
        <div id="alllink">
        	<ul>
            <li class="links"><a href="uploadtutoriallinks/Upload Tutorial links.php"><span class="new"> Upload Tutorial links</span></a>	</li>
            <li class="links"  ><a href="tutz/tutz.php" ><span class="new" > Tutorial Zone</span></a></li>
            <li class="links"><a href="clgz/clgz.php"> <span class="new">College zone</span></a>	</li>
            <li class="links"><a href="cu/cu.php"> <span class="new">Contact us</span>	</a></li>
            </ul>
        </div >
        <!--
         <div id="extralinks">
    
    `	<ul> 
    		<li><a href>LATEST TUTORIALS  </a></li>
    		<li><a href> HIGHEST RATED TUTORIALS  </a></li>
            <li><a href> USER REVIEWS  </a></li>
            
                        
    	</ul>
    
    </div>
    	

	#extralinks ul  li
	{
		list-style:none;
		text-align:center;
		
		
	}
	#extralinks ul  li a
	{
		text-decoration:none;
		color:rgba(204,0,0,1);
		box-decoration-break:clone;
		display:block;
		border: 2px groove rgba(204,204,255,1);
		width:300px;
		height:40px;
		margin-top:20px;
		background-color:rgba(0,255,255,1);
		padding-top:20px;
		border-radius:14px;
	}
	#extralinks
	{
		margin-left:400px;
		margin-top:-100px;
		
	}
	</style>
    

        <textarea> </textarea> <br />
        <input type="submit" id="submit" value="submit"  />
        
        </div>  
        -->
  
    </div>
    </form>
    
    </body>
    </html>