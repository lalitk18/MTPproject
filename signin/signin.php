<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
  #table
  {
	  
	  margin-left:100px;
	  margin-top:30px;
	  width:500px;
  }
  #caption
  {
	  border-bottom:1px #999999 groove;
	  text-align:start;
	  margin-left:180px;
	  margin-top:20px;
	  width:600px;
  }
  .input
  {
	  
	  width:100%;
	  height:100%;
	  
	  
  }
  p
  {
	  text-align:end
	  ;
	  font:Tahoma, Geneva, sans-serif;
	  font-size:16px;
	  color:rgba(51,51,51,1);
	  font-weight:bold;
  }

  #signupbutton
  {
	  width:40%;
	  height:40px;
	  border-radius:10px;
	  background-color:rgba(51,0,255,1);
	  text-align:center;
	  padding-top:-1px;
	  font:"Arial Black", Gadget, sans-serif;
	  font-style:oblique;
	  margin-left:225px;
	  color:rgba(255,255,255,1);
	  font-weight:500;
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
form
{
	
}
#headfirst div 
{	
	
	float:left;
}

html {
  font-size: 100%;
  line-height: 1.5;
  height: 100%;
}

body {
  position: relative;
  margin: 0;
  font-family: 'Work Sans', Arial, Helvetica, sans-serif;
  min-height: 100%;
  background-image:url(images/image.png);
  color: #777;
}
#formdiv
{
	
}

  #profile
  {
	 margin-left:200px; 
	  
  }
  </style>
  
  <link rel="stylesheet" href="main.css" > 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signin form</title>
</head>

 <body onload="init()">
    
<link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">
<div id="headfirst">
    	<div id="logo" >
        <img src="images/LOGO-lw-scaled.JPEG.png" />
        </div>
    </div>

<div class="container">
	
    <div class="profile">
    	<button class="profile__avatar" id="toggleProfile">
    		 <img src="images/avatar_2x.png" alt="Avatar" /> 
    	</button>

	
    <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" name="frm" method="post" enctype="multipart/form-data" >
		
    	

    	<div class="profile__form">
        	<div class="profile__fields">
        		<div class="field">
          			<input type="text" id="fieldUser"  name="txuser" class="input" required pattern=.*\S.* />
          			<label for="fieldUser" class="label">Username</label>
        		</div>
        		<div class="field">
          			<input type="password" name="txpass" id="fieldPassword" class="input" required pattern=.*\S.* />
          			<label for="fieldPassword" class="label">Password</label>
        		</div>
        		<div class="profile__footer">
           			
					<input class="button raised blue" type="submit" value="Sign In" name="sblogin" id="signupbutton" onclick="frm.action='check.php'"   />
                    <input class=""
            				<paper-ripple fit></paper-ripple>
          			</div>
      		</div>
     	
    </div>
    
    </form>
    
    </div>
    </div>
    
     <script src="signin.js"></script> 


</body>
</html>
