<?php
session_start();
	
	require_once("require/constants.php");
	require_once("require/functions.php");
	require_once("require/begun_or_not_scheme.php");
	begun_or_not(1); 
	// define any other scheme in begun_or_not_scheme.php
	
	
	$done=0;
if( isset($_COOKIE["username"]) && isset($_SESSION['username']) &&  $_COOKIE["username"]==$_SESSION['username'] ){
	
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
	$connection=createConn();
	
	$temp_usr=mysql_real_escape_string($username);
	$temp_pass=mysql_real_escape_string($password);
	$sql_query="select completed from googlockusers where username='$temp_usr' and password='$temp_pass'";
	
	//lock
	put_lock($connection,"googlockusers","read");
	$temp=mysql_query($sql_query,$connection) or die("ERROR QUERY");
	remove_lock($connection);
	//unlock
	
	
	$result=mysql_fetch_array($temp);
	$result['completed']=$result['completed']+1;
	
	$no=$result['completed'];
	if( $result['completed'] >$no_of_questions) {
	//finished all the questions 
	$done=1;
	}
	
	$sql_query="select question from googlockquestions where no='$result[completed]'";
	$temp=mysql_query($sql_query,$connection) or die("Error in query");
	$question=mysql_fetch_array($temp);
	$sql_query="select username,score from googlockusers ORDER BY score desc limit 0, 1"; 
	
	//lock
	put_lock($connection,"googlockquestions","read");
	$temp=mysql_query($sql_query,$connection);
	remove_lock($connection);
	//unlock
	
	
	$no_of_records=mysql_num_rows($temp);
	
	for($i=0;$i<$no_of_records;$i++){
		//setcookie( either the cookie method in which a javascript is used to keep tab
		//else we can use a hidden form an check if the values are not null. if null this is the first time this form has been 
		//visited, keep a counter and after every 5 refreshes or so give fresh values.also note that after refresh the values are deleted therefore the php script has to check and set the values every time( no need to set fresh values, just the stale ones back again)
		}
		$result3=mysql_fetch_array($temp);
	
	
	$sql_query="select score from googlockusers where username='$temp_usr'";
	
	//lock
	put_lock($connection,"googlockusers","read");
	$temp=mysql_query($sql_query,$connection);
	remove_lock($connection);
	//unlock
	
	
	$result2=mysql_fetch_array($temp);
	mysql_close($connection);
	if( isset($_COOKIE["time"])==FALSE || stristr($_COOKIE["time"],"undefined") || stristr($_COOKIE["time"],"NaN") ){
			
			$raw_time=$duration-$diff;
			$hours=floor($raw_time/3600);
			
			$raw_time=$raw_time%3600;
			$minutes=floor($raw_time/60);
			$seconds=$raw_time%60;
			$to_send=$hours. ":" . $minutes . ":" . $seconds . ":";
			
			setcookie("time",$to_send,0,'/');
		}
			
}

else{
	session_destroy();
	setcookie("username","a",time()-1000);
	header("Location: index.php");
	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<title><?php if($done==1){ echo"You have shown excellent abilities. I confer you the first decipher!";} else echo"You are on question: ". $no. " HURRY!";?></title>

<script type="text/javascript" src="cookie_display.js">
</script>
    <style type="text/css">
.style10 {font-size:115%;}
	.style9 {color: #000000}
	.style13 {color: #000000; font-size:12px;}
.style14 {color: #000000; font-size:15px;}
.style11 {font-weight: bold}
.style12 {font-weight: bold;
          font-size:130%;}	
.style1
{
	color:#C00;
	text-decoration:none;
}
.style1:hover
{
	color:#00C;
	text-decoration:none;
}
    </style>

</head>
<body onload="checkCookie('time')" onunload="setCookie()"; id="bodyplay">
	      
	<div id="content">
	<div id="logo1">
    <img width="350" height="70" src="images/logo.png"/>
    </div>
    <div id="logo2">
    <a href="http://ieee.daiict.ac.in/ifest" target="_blank"><img width="300" height="200" src="images/img2.png"/></a>
    </div>
    
    <div id="lfsidebar">
  <table width="101%" border="1" cellspacing="2" cellpadding="2" name="counter">
    <tr>
      <th width="55%" scope="row"><span class="style5">Time Left:</span></th>
      <td width="45%" id="time_left">not set</td>
    </tr>
	<tr>
		 <th width="55%" scope="row"><span class="style5">Top Score:</span></th>
      <td width="45%" id="time_left"><?php echo "$result3[score]"; ?></td>
	  </tr>
		<tr>
		 <th width="55%" scope="row"><span class="style5">Your Score:</span></th>
      <td width="45%" id="time_left"><?php echo "$result2[score]"; ?></td>
	  </tr>
	  
  </table>
		
		<br/>
		<div>
			
			<div id="right1" >
			<ul id="menu1">
			<li><a href="logout.php" class="current">Logout</a></li>
		
		</ul>
			</div>
	





</div>


	  


	<div class="clear">
		  <div align="justify">
	      </div>
	  </div>
	  <div id="left">
	  <?php if($done!=1)
	  echo "<p>Question $no: $question[question] </p>"; ?>
	  </div>
		<div>
		<?php if($done!=1) 
		{
		print<<<HERE
		<p><img src="img.php" /></p>
HERE;
}
		?>
			
			<form action="validate.php" method="post">
				<?php  
				
				if($done==1) {echo "<br/><p class=\"style14\"><em>Congratulations: You truly are a Decipher!</em> </p>
				       <!--Congratulations: You truly are a Decipher!.</br> Phase1 is over, results will be posted on website.-->
					</form>
					</div>
					</body>
					</html>"; 
					exit;
				} 
				else {
				echo "<p>Answer $no: $question[question] </p>";} if(isset($_GET["attempt"]) && $_GET["attempt"]=="incorrect") echo"Incorrect Answer";?> 			
							
			<input name="answer" type="text" value=""  />
			<input name="skip" type="hidden" value="" id="skip"  />
			<input type="submit" value="Submit" />
			<input type="submit" value="Skip" onclick="document.getElementById('skip').value=-1">
	
			</form>
	

			<p class="date"  style="font-size: 13px;"><a href="http://ieee.daiict.ac.in/ifest" target='_blank'>Back to I.Fest</a></p>
		</div>
        
<div id="footer">
			
				<p align="center" class="style12">Dhirubhai Ambani Institute of Information and Communication Technology</p>
				<p align="center" class="style13">Design: Swena Gupta, Vidhan Agarwal</p>
		
			
		</div>
	</div>
</body>
</html>