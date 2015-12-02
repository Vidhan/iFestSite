<?php
/* NOTE: Username and Password are the fields to be used to check for post*/
session_start();
if(isset($_COOKIE["username"]))
$cookie=$_COOKIE["username"];
if( isset($cookie)==TRUE && $cookie==$_SESSION['username'] )
	header("Location: login.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script type="text/javascript" src="js/md5.js">
</script>
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
	<title>I.Funda | I.Fest 2012</title>
    <style type="text/css">
    .style10 {font-size:115%;}
	.style9 {color: #000000}
	.style13 {color: #000000; font-size:12px;}
.style11 {font-weight: bold}
.style12 {font-weight: bold;
          font-size:130%;}	
.style1
{
	color:#735313;
	text-decoration:underline;
}
.style1:hover
{
	color:#00C;
	text-decoration:underline;
}
	</style>
</head>
<body>
<div id="content">
	<div id="logo1">
    <img width="350" height="70" src="images/logo.png"/>
    </div>
    <div id="logo2">
    <a href="http://ieee.daiict.ac.in/ifest" target="_blank"><img width="300" height="200" src="images/img2.png"/></a>
    </div>
    
    <div class="gboxtop"></div>
		<div class="gbox">
		  <p><span class="style10">
			  <marquee scrollamount="8" onMouseover="this.scrollAmount=0" onMouseout="this.scrollAmount=8"><strong1><span class="style10">All the best!!!</strong1>
			   </marquee>
		  </span>		</div>
		
     <ul id="menu">
			<li><a href="#" class="current">Home</a></li>
			<li><a href="About.php">Rules</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="registration.php">Registration</a></li>
		</ul>
        
     <div id="center">
			
			<h2 class="style11">I.Funda</h2>  <b><i>"The Big Bang Query"</i></b><br/>
			<p class="style9">If you are very great fan of Ramanujan or Einstein and consider yourself as a master in
Maths or Physics, then we are providing you the perfect opportunity to participate in our
online quiz contest and win exciting prizes.<br/>
i.Funda is the Online quiz contest where you can win prizes by just answering multiple choice
quiz questions. Questions will be asked from the fields of Maths and Physics and will mostly be
conceptual.<br/><br/>
For more details about the event move to the <a href="About.php" class="style1">Rules</a> page.<br/><br/>

 </p>
			
			
			
			<p class="style9"><span class="style5">Tentative Prize Money:</span>Rs.2000</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			
			<p class="date" style="font-size: 13px;"><a href="http://ieee.daiict.ac.in/ifest">Back to I.Fest</a></p>
		</div>
        <div id="right">
			<div class="caption"><p>Login</p></div>
			<div class="box">
			<form method="post" action="login.php">
			  <table width="261" height="134" id="personalinfo">
                <tr id="login-notification"> </tr>
                
                <tr id="Name-div">
                  <td><label for="Username"><span class="style9">User Name</span></label></td>
                  <td><input name="Username" type="text" id="Name" value=""  /></td>
                </tr>
                <tr id="Name-div">
                  <td><label for="Username"><span class="style9">Password</span></label></td>
                  <td><input type="password" name="Password" value="" id="Name2" /></td>
				  <!-- <td><input type="hidden" id="user_password" value="" name="Password" /></td> -->
                </tr>
                <tr> <?php if(isset($_GET["attempt"]) && $_GET["attempt"]=="incorrect") echo"<p style=\"color:red\" font-size=\"smallest\"/> Incorrect Username or Password"; ?></tr>
                <tr>
                  <td><a href = "registration.php" target="_blank" class="style1"> Register </a></td>
                  <td><input type="submit" id="submit" name="submit" value="Login" onclick="MD5(document.getElementById('Name2').value);" /></td>
                </tr>
              </table>
			</form>
			</div>
			<p>
			
			</p>
		</div>
<div id="footer">
			
				<p align="center" class="style12">Dhirubhai Ambani Institute of Information and Communication Technology</p>
				<p align="center" class="style13">Design: Swena Gupta, Vidhan Agarwal</p>
		
			
		</div>
	</div>
</body>
</html>